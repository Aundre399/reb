<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{


        function add(Request $request){
            //return $request->input();
            $request->validate([
                'lot_number'=>'required|unique:proprietor',
                'proprietor_name'=>'required',
                'unit_entitlement'=>'required',
                'postal_information'=>'required',
                'proprietor_email'=>'required|email|unique:proprietor',
                'total_maintenance'=>'required',
                'monthly_maintenance'=>'required',
                    
            ]);

            $querry = DB::table('proprietor')-> insert([
                "lot_number"=>$request->input('lot_number'),
                "proprietor_name"=>$request->input('proprietor_name'),
                "unit_entitlement"=>$request->input('unit_entitlement'),
                "postal_information"=>$request->input('postal_information'),
                "proprietor_email"=>$request->input('proprietor_email'),
                "total_maintenance"=>$request->input('total_maintenance'),
                
            
                $num1 = $_POST('total_maintenance'),
                $num2 = $_POST('unit_entitlement'),
                $a = $num1 + $num2,
                "monthly_maintencance"=>$request->input('$a'),

                

            

            ]);



            if($querry){
                return back()->with('success', 'data have been successfully inserted');
            } else{
                return back()->with('fail','something went wrong');
            }
        }

    

        

    
}
