<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Str;
use App\Models\Degree_study;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Password\PutRequest as PasswordPutRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\PutRequest;
use App\Http\Requests\User\StoreRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(User::find(2)->profile->digital_card);
        $users = User::where('rol', 'user')->paginate(5);
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::pluck('id', 'name');
        $degree_studies = Degree_study::pluck('id', 'name');
        $user = new User();

        return view('dashboard.users.create', compact('departments', 'degree_studies', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        $data['profile_avatar'] = ($data['gender'] == 'M') ? 'avatar-default-masculino.png' : 'avatar-default-femenino.png';
        switch($data['lada']){
            case 'mx':
                $data['lada'] = '+52'; 
            break;
            case 'usa':
                $data['lada'] = '+1';
            break;
            default:
                return redirect()->route('users.index')->with('status', 'Oops!, algo salio mal');
            break;
        }
        $response = User::create($data);
        if($response != null){
            return redirect()->route('users.index')->with('status', 'Usuario creado con exito!');
        }
        return redirect()->route('users.index')->with('status', 'Oops!, algo salio mal');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $departments = Department::pluck('id', 'name');
        $degree_studies = Degree_study::pluck('id', 'name');

        return view('dashboard.users.edit', compact('departments', 'degree_studies', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, User $user)
    {
        $data = $request->all();
        switch($data['lada']){
            case 'mx':
                $data['lada'] = '+52'; 
            break;
            case 'usa':
                $data['lada'] = '+1';
            break;
            default:
                return redirect()->route('users.index')->with('status', 'Oops!, algo salio mal');
            break;
        }
        if(isset($data['profile_avatar'])){
            $img = public_path() . "/assets/profiles/" . $user->profile_avatar;
            $data["profile_avatar"] = $fillename = Str::slug('avatar' . ' ' . $data['username'], '-') . '-' .time() . "." . $data['profile_avatar']->extension();
            $status = $request->profile_avatar->move(public_path("assets/profiles"), $fillename);
            if($user->profile_avatar != 'avatar-default-masculino.png' && $user->profile_avatar != 'avatar-default-femenino.png'){
                if($status){
                    if(@getimagesize($img)){
                        unlink($img);
                    }
                }
            }
        }
        else{
            if($user->profile_avatar == 'avatar-default-masculino.png' || $user->profile_avatar == 'avatar-default-femenino.png'){
                $data['profile_avatar'] = ($data['gender'] == 'M') ? 'avatar-default-masculino.png' : 'avatar-default-femenino.png';
            }
        }


        $response = $user->update($data);
        if($response){
            return redirect()->route('users.index')->with('status', 'Usuario actualizado con exito!');
        }
        return redirect()->route('users.index')->with('status', 'Oops!, algo salio mal');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $img = public_path() . "/assets/profiles/" . $user->profile_avatar;
        $response = $user->delete();

        if($response){
            if($user->profile_avatar != 'avatar-default-masculino.png' && $user->profile_avatar != 'avatar-default-femenino.png'){
                if(@getimagesize($img)){
                    unlink($img);
                }
            }
            return redirect()->route('users.index')->with('status', 'Usuario eliminado con exito!');
        }
        return redirect()->route('usuarios.index')->with('status', 'Oops!, algo salio mal');
    }
    public function edit_password(User $user)
    {
        return view('dashboard.users._change-password', compact('user'));
    }
    public function update_password(PasswordPutRequest $request, User $user)
    {
        $data = $request->validated();
        $new_password = Hash::make($data['password']);
        $user_confirm_password = $data['confirm_password'];
        if(Hash::check($user_confirm_password, Auth::user()->password)){
            $user->update(['password' => $new_password]);
            return redirect()->route('users.index')->with('status', 'Contraseña actualizada');
        }else{
            return redirect()->route('password-change.edit', $user)->with('status', 'Usuario administrador no confirmado');
        }
        return redirect()->route('users.index')->with('status', 'Oops!, algo salio mal');
    }
}
