<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\Organizational_chart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function show_data(){
        $organizational = Organizational_chart::select('uri_flipbook')->where('status', 'true')->get();
        return view('control.user.control', compact('organizational'));
    }
    public function searcher(Request $request){
        if(!empty($request->searcher)){
            $data = DB::select("SELECT u.id, u.name, u.lastname_d, u.lastname_m, u.profile_avatar, d.name AS department, d.icon FROM users AS u 
            INNER JOIN departments AS d ON u.department_id = d.id
            WHERE u.rol = 'user' AND u.name LIKE '%$request->searcher%'");
            if($data){
                $array = array('data' => $data);
            }else{
                $array = array('data' => [0]);
            }
        }
        else{
            $array = array('data' => [0]);
        }
        return response()->json($array);
    }
}
