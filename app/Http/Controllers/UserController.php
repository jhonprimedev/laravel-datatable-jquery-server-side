<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function list(){
        $draw = request('draw');
        $start = request('start');
        $length = request('length');
        $search = request('search');
        $columns = request('columns');
        $order = request('order');

        $users = DB::table('users');

        $recordsTotal = $users->count();
        $recordsFiltered = 0;
        if($search['value']){
            $firstColumn = true;
            foreach($columns as $column){
                if($column['searchable'] === 'true'){
                    if ($firstColumn){
                        $users->where($column['data'], 'LIKE', "%{$search['value']}%");
                        $firstColumn = false;
                    }else{
                        $users->orWhere($column['data'], 'LIKE', "%{$search['value']}%");
                    }
                }
            }
            $recordsFiltered = $users->count();
        }else{
            $recordsFiltered = $recordsTotal;
        }

        foreach($order as $ord){
            if($columns[$ord['column']]['orderable'] == 'true'){
                $users->orderBy($columns[$ord['column']]['data'], $ord['dir']);
            }
        }

        $users->skip($start);
        $users->limit($length);
        return response()->json([
            'draw' => $draw,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $users->get()
        ], 200);

    }
}
