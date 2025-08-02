<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

      //fazendo o update de um registro
      //nesse caso o eloquent vai fazer o update
      //conforme o contexto se eu selecionei produto 1 
      //qualquer update que eu fizer vai ser no produto 1
      //as linhas abaixo vão pegando os dados por contexto 

      //update para um unico produto
      // $product = Product::find(1);
      // $product->product_name = 'Produto Atualizado'; 
      // $product->price= 57;
      // $product->save();
      
      //update para varios produtos
      // Product::where('price','>=', 10)
      //            ->update(['price' => 100]); 
      //
      //

      
         
      
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
