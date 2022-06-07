<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Directory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Directory\PutRequest;
use App\Http\Requests\Directory\StoreRequest;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = Directory::get();
        return view('dashboard.directories.index', compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directory = new Directory();
        return view('dashboard.directories.create', compact('directory'));
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
        $response = Directory::create($data);
        if($response != null){
            return redirect()->route('directories.index')->with('status', 'Directorio guardado con exito!');
        }
        return redirect()->route('directories.index')->with('status', 'Oops!, algo salio mal');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {
        return view('dashboard.directories.edit', compact('directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Directory $directory)
    {
        $data = $request->all();
        $response = $directory->update($data);
        if($response){
            return redirect()->route('directories.index')->with('status', 'Información actualizada con exito!');
        }
        return redirect()->route('directories.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        if($directory->status == "true"){
            return back()->with('status', 'No se puede eliminar un directorio cuando esta activo');
        }else{
            $response = $directory->delete();
            if($response){
                return redirect()->route('organizational.index')->with('status', 'Directorio eliminado con exito!');
            }
        }
        return redirect()->route('departments.index')->with('status', 'Oops!, algo salio mal');
    }
    public function change_status(Directory $directory){
        if($directory->status == 'true'){
            $response = $directory->update(['status' => 'false']);
            if($response)
                return redirect()->route('directories.index')->with('status', 'Estatus actualizado');
        }else{
            $count = Directory::get()->where('status', 'true')->count();
            if($count >= 1){
                return redirect()->route('directories.index')->with('status', 'No es posible tener más de un directorio activo al mismo tiempo');
            }else{
                $response = $directory->update(['status' => 'true']);
                if($response)
                    return redirect()->route('directories.index')->with('status', 'Estatus actualizado');
            }
        }
    }
}
