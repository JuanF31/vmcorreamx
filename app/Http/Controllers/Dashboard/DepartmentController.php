<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\PutRequest;
use App\Http\Requests\Department\StoreRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();
        return view('dashboard.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = new Department();
        return view('dashboard.departments.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data['icon'] = $fillename = Str::slug('icon departamento' . ' ' . $data['name'], '-') . "." . $data['icon']->extension();
        $img_status = $request->icon->move(public_path("assets/icons-departments"), $fillename);

        $data['banner'] = $baner_name = Str::slug('banner departamento' . ' ' . $data['name'], '-') . "." . $data['banner']->extension();
        $banner_status = $request->banner->move(public_path("assets/banners"), $baner_name);

        $data['slug'] = Str::slug('departamento' . ' ' . $data['name'], '-');
        if($img_status && $banner_status){
            $response = Department::create($data);
            if($response != null){
                return redirect()->route('departments.index')->with('status', 'Departamento creado con exito!');
            }
        }
        return redirect()->route('departments.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Department $department)
    {
        $data = $request->validated();
        if(isset($data['icon'])){
            $img = public_path() . "/assets/icons-departments/" . $department->icon;
            $data["icon"] = $fillename = Str::slug('icon departamento' . ' ' . $data['name'], '-') . '-' .time() . "." . $data['icon']->extension();
            $status = $request->icon->move(public_path("assets/icons-departments/"), $fillename);
            if($status){
                if(@getimagesize($img)){
                    unlink($img);
                }
            }
        }
        if(isset($data['banner'])){
            $banner = public_path() . "/assets/banners/" . $department->banner;
            $data["banner"] = $banner_name = Str::slug('banner departamento' . ' ' . $data['name'], '-') . '-' .time() . "." . $data['banner']->extension();
            $banner_status = $request->banner->move(public_path("assets/banners/"), $banner_name);
            if($banner_status){
                if(@getimagesize($banner)){
                    unlink($banner);
                }
            }
        }
        $response = $department->update($data);
        if($response){
            return redirect()->route('departments.index')->with('status', 'Departamento actualizado con exito!');
        }
        return redirect()->route('departments.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $img = public_path() . "/assets/icons-departments/" . $department->icon;
        $banner = public_path() . "/assets/banners/" . $department->banner;
        $response = $department->delete();
        if($response){
            if(@getimagesize($img)){
                unlink($img);
            }
            if(@getimagesize($banner)){
                unlink($banner);
            }
            return redirect()->route('departments.index')->with('status', 'Departamento eliminado con exito!');
        }
        return redirect()->route('departments.index')->with('status', 'Oops!, algo salio mal');
    }

    public function show(Department $department){
        return view('control.department.index', compact('department'));
    }
}
