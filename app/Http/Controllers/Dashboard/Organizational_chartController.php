<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Organizational_chart;
use App\Http\Requests\Organizational_chart\PutRequest;
use App\Http\Requests\Organizational_chart\StoreRequest;

class Organizational_chartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizational_charts = Organizational_chart::get();
        return view('dashboard.organizational_charts.index', compact('organizational_charts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizational = new Organizational_chart();
        return view('dashboard.organizational_charts.create', compact('organizational'));
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
        $response = Organizational_chart::create($data);
        if($response != null){
            return redirect()->route('organizational.index')->with('status', 'Organigrama guardado con exito!');
        }
        return redirect()->route('organizational.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizational_chart $organizational)
    {
        return view('dashboard.organizational_charts.edit', compact('organizational'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Organizational_chart $organizational)
    {
        $data = $request->all();
        $response = $organizational->update($data);
        if($response){
            return redirect()->route('organizational.index')->with('status', 'Información actualizada con exito!');
        }
        return redirect()->route('organizational.index')->with('status', 'Oops!, algo salio mal');
    }

    /**
     * Remove the specified resource from storage.
     *P
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizational_chart $organizational)
    {
        if($organizational->status == "true"){
            return back()->with('status', 'No se puede eliminar un Organigrama cuando esta activo');
        }else{
            $response = $organizational->delete();
            if($response){
                return redirect()->route('organizational.index')->with('status', 'Organigrama eliminado con exito!');
            }
        }
        return redirect()->route('departments.index')->with('status', 'Oops!, algo salio mal');
    }

    public function change_status(Organizational_chart $organizational_chart){
        if($organizational_chart->status == 'true'){
            $response = $organizational_chart->update(['status' => 'false']);
            if($response)
                return redirect()->route('organizational.index')->with('status', 'Estatus actualizado');
        }else{
            $count = Organizational_chart::get()->where('status', 'true')->count();
            if($count >= 1){
                return redirect()->route('organizational.index')->with('status', 'No es posible tener más de un Organigrama activo al mismo tiempo');
            }else{
                $response = $organizational_chart->update(['status' => 'true']);
                if($response)
                    return redirect()->route('organizational.index')->with('status', 'Estatus actualizado');
            }
        }
    }
}
