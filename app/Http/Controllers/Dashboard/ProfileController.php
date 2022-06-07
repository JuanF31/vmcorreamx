<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;

class ProfileController extends Controller
{
    public function add_digital_card(User $user){
        return view('dashboard.profile.index', compact('user'));
    }
    public function register_digital_card(User $user, StoreRequest $request){

        $count = Profile::where('user_id', $user->id);
        $data = $request->validated();
        if(!$count->count()){
            $data['digital_card'] = $fillename = Str::slug('tarjeta digital' . ' ' . $user->username . ' ' . time(), '-') . "." . $data['digital_card']->extension();
            $data['user_id'] = $user->id;
            $img_status = $request->digital_card->move(public_path("assets/digital-cards"), $fillename);
            if($img_status){
                $response = Profile::create($data);
                if($response != null){
                    return redirect()->route('profile.card', $user)->with('status', 'Tarjeta digital asignada con exito!');
                }
            }
        }else{
            $img = public_path('assets/digital-cards/' . $user->profile->digital_card);
            $data['digital_card'] = $fillename = Str::slug('tarjeta digital' . ' ' . $user->username . ' ' . time(), '-') . "." . $data['digital_card']->extension();
            $status = $request->digital_card->move(public_path("assets/digital-cards"), $fillename);
            if($status){
                if(@getimagesize($img)){
                    unlink($img);
                }
            }
            $response = $count->update(['digital_card' => $data['digital_card']]);
            if($response){
                return redirect()->route('profile.card', $user)->with('status', 'Tarjeta digital actualizado con exito!');
            }
        }
        return back()->with('status', 'Oops..!, Algo salio mal');
    }
}
