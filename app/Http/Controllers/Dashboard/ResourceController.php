<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Resource;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Resource\PutRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Resource\StoreRequest;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Department $department)
    {
        $resources = Resource::where('department_id', $department->id)->paginate(5);
        return view('dashboard.resources.index', compact('department', 'resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Department $department)
    {
        $resource = new Resource();
        return view('dashboard.resources.create', compact('department', 'resource'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Department $department)
    {
        $data = $request->all();
        $extension = $request->file('resource')->guessExtension();
        if($extension == 'png' || $extension == 'jpg'|| $extension == 'svg'|| $extension == 'jpeg'|| $extension == 'gif'){
            $data['type'] = 'image';
        }else if($extension == 'doc' || $extension == 'docx' || $extension == 'docm'){
            $data['type'] = 'text-document';
        }else if($extension == 'ppt' || $extension == 'pptm' || $extension == 'pptx'){
            $data['type'] = 'presentation-document';
        }else if($extension == 'pdf'){
            $data['type'] = 'pdf';
        }else if($extension == 'zip' || $extension == 'rar'){
            $data['type'] = 'font';
        }
        $file_name = Str::slug($department->name .' '. $data['name_resource'] . ' ' . time(), '-') . '.' . $extension;
        $data['resource'] = $file_name;
        $data['department_id'] = $department->id;

        $response = Resource::create($data);
        
        if($response){
            $file = $request->resource->move(public_path('resources/' . strtolower($department->name)), $file_name);
            if($file) return redirect()->route('resources.index', $department)->with('status', 'Recurso guardado con exito!');
        }
        return redirect()->route('resources.create', $department)->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('dashboard.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Resource $resource)
    {
        if($request->hasFile('resource')){
            if(Storage::disk('local')->exists('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource)){
                Storage::disk('local')->delete('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource);
            }
            $data = $request->all();
            $extension = $request->file('resource')->guessExtension();
            if($extension == 'png' || $extension == 'jpg'|| $extension == 'svg'|| $extension == 'jpeg'|| $extension == 'gif'){
                $data['type'] = 'image';
            }else if($extension == 'doc' || $extension == 'docx' || $extension == 'docm'){
                $data['type'] = 'text-document';
            }else if($extension == 'ppt' || $extension == 'pptm' || $extension == 'pptx'){
                $data['type'] = 'presentation-document';
            }else if($extension == 'pdf'){
                $data['type'] = 'pdf';
            }else if($extension == 'zip' || $extension == 'rar'){
                $data['type'] = 'font';
            }
            $file_name = Str::slug($resource->department->name .' '. $data['name_resource'] . ' ' . time(), '-') . '.' . $extension;
            $data['resource'] = $file_name;
            $response = $resource->update($data);

            if($response){
                $file = $request->file('resource')->storeAs('public/resources/'.strtolower($resource->department->name), $file_name, 'local');
                if($file) return redirect()->route('resources.index', $resource->department)->with('status', 'Recurso actualizado con exito!');
            }
        }else{
            if($resource->update($request->all())) return redirect()->route('resources.index', $resource->department)->with('status', 'Recurso actualizado con exito!');
        }
        return redirect()->route('resources.create', $resource->department)->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $response = $resource->delete();
        if($response){
            if(Storage::disk('local')->exists('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource)){
                Storage::disk('local')->delete('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource);
            }
            return back()->with('status', 'Recurso eliminado');
        }
        return back()->with('status', 'Oops!, algo salio mal');
    }
    public function download_resource(Resource $resource)
    {
        $file = public_path('resources\\' . strtolower($resource->department->name) . '\\' . $resource->resource);
        if(file_exists($file)){
            return response()->download($file);
        }
        return back()->with('status', 'No se encontro el recurso solicitado');
    }
}
