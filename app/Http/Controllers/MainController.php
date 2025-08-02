<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        

     

       $this->showData($results);
      
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
