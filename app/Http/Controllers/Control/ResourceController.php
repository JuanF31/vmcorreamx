<?php

namespace App\Http\Controllers\Control;

use App\Models\Resource;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function index($slug){
        $department = Department::where('slug', $slug)->firstOrFail()->name;
        $userAuthDepartment = Auth::user()->department->name;

        if($department === $userAuthDepartment){
            $resources = Resource::where([
                ['department_id', Auth::user()->department->id],
                ['published', 'yes']
            ])
            ->orderBy('created_at', 'DESC')
            ->get();
            return view('control.resources.index', compact('resources'));
        }
        return back();
    }
    public function download_resource(Resource $resource)
    {
        if (Storage::disk('local')->exists('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource)) {
            return Storage::download('public/resources/' . strtolower($resource->department->name) . '/' . $resource->resource);
        }
        return back()->with('status', 'No se encontro el recurso solicitado');
    }
}
