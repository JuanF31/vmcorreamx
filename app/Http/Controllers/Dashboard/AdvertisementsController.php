<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use App\Http\Requests\Advertisement\PutRequest;
use App\Http\Requests\Advertisement\StoreRequest;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::orderBy('created_at', 'DESC')->get();
        return view('dashboard.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertisement = new Advertisement();
        $departments = Department::pluck('id', 'name');
        return view('dashboard.advertisements.create', compact('departments', 'advertisement'));
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
        $department = Department::findOrFail($data['department_id']);

        $data['mediaContent'] = $mediaContent = Str::slug("advertisement $department->name" . ' ' . $data['title'], '-') . "." . $data['mediaContent']->extension();
        $status = $request->mediaContent->move(public_path("assets/advertisements"), $mediaContent);

        if($status){
            $response = Advertisement::create($data);
            if($response != null){
                return redirect()->route('advertisements.index')->with('status', 'Aviso creado con exito!');
            }
        }
        return redirect()->route('advertisements.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        $departments = Department::pluck('id', 'name');
        return view('dashboard.advertisements.edit', compact('advertisement', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Advertisement $advertisement)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $img = public_path() . "/assets/advertisements/" . $advertisement->mediaContent;
        $response = $advertisement->delete();
        if($response){
            if(@getimagesize($img)){
                unlink($img);
            }
            return back()->with('status', 'Aviso eliminado con exito!');
        }
        return back()->with('status', 'Oops!, algo salio mal');
    }
}
