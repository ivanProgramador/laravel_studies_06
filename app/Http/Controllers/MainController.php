<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){


      Product::insert([
        [
         'product_name' => 'Produto 3',
         'price' => 20,
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
       ],
       [
         'product_name' => 'Produto 4',
         'price' => 30,
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
       ],
       [
         'product_name' => 'Produto 5',
         'price' => 25,
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
       ]   
      ]);
      
      
      

      
        
       

}


    private function showData($data){
       
      echo'<pre>';
       print_r($data);

    }

    private function ArrayOfObject($data){

        $tmp = [];
        foreach($data as $key => $value){
           $tmp[] =(object) $value;
        }
        return $tmp;
      }


}
