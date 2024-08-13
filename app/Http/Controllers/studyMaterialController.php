<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studyMaterial;
use Illuminate\Support\Facades\DB;

class studyMaterialController extends Controller
{
    public function display(){
        return view('index',[
            'list'=>studyMaterial::all()
        ]);
    }
    public function update($id){
        if($id%2==0)
        DB::table('studyMaterial')->where('id',$id/2)->update(['status'=>0]);
        else
        DB::table('studyMaterial')->where('id',($id-1)/2)->update(['status'=>1]);
        return response()->json($id);
    }
}
