<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Phone;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
            
        echo'Relacionamento Eloquent';
   }

   public function oneToOne(){



            //buscar o telfone do cliente
           // $cliente1 = Client::find(12)->phone;
           // echo'Telefone do ciente id ID '.$cliente1->client_id.'<br>'.$cliente1->phone_number;

          // buscando todos os dados do cliente eo telefone dele no caso so tem o nome mas e possiveel pegar mais 
          // $cliente2 = Client::find(12);
          // $phone = $cliente2->phone->phone_number;
          // echo'<br>';
          // echo'Nome do cliente : '.$cliente2->client_name.'<br>';
          // echo'Telefone do cliente :'.$cliente2->phone->phone_number;
          // echo'<br>';

          //usando o metodo com o with
          // $cliente3 = Client::with('phone')->find(12);
         // echo'<br>';
         // echo'Nome do cliente : '.$cliente3->client_name.'<br>';
         // echo'Telefone do cliente :'.$cliente3->phone->phone_number;

         //montando uma lista pra mostrar todos os clientes e seus telefones
         $clientes = Client::with('phone')->get();
         foreach($clientes as $cliente){
            echo'Nome do cliente : '.$cliente->client_name.'<br>';
            if($cliente->phone){
                echo'Telefone do cliente : '.$cliente->phone->phone_number.'<br>';
            } else {
                echo'Telefone do cliente : Não possui telefone cadastrado.<br>';
            }
            echo'<hr>';
         } 



           
       }


   


    private function showData($data){
       
      echo'<pre>';
       print_r($data);

    }



     public function oneToMany(){

       //buscar o cliente pelo id e mostrar todos os telefones dele

       // $client1 = Client::find(10);
       // $phones = $client1->phones;
       // echo'Nome do cliente : '.$client1->client_name.'<br>';
       // echo'Telefones do cliente :<br>';
       // foreach($phones as $phone){
       //     echo $phone->phone_number . '<br>'; 
       //  }

       //buscando todos os clientes e seus respectivos telefones
       $clients = Client::with('phones')->get();
       foreach($clients as $client){
         echo'<br>';
           echo'Nome do cliente : '.$client->client_name.'<br>';
           echo'Telefones do cliente :<br>';
        foreach($client->phones as $phone){
           echo $phone->phone_number . '<br>'; 
        }
        }
     }

     public function belogsTo(){

      //   nesse metodo eu vou pegar o telefone e mostrar o cliente que pertence a ele
      //   $phone1 = Phone::find(10);
      //   $client = $phone1->client;
      //   echo'Nome do cliente : '.$client->client_name.'<br>'; 
      //   echo'Telefone do cliente : '.$phone1->phone_number.'<br>';
      
      //fazendo o mesmo processo mas com o metodo with
      // $phones = Phone::with('client')->find(10);
      // echo"<br>";
      // echo'Telefone do cliente : '.$phones->phone_number.'<br>';  
      // echo'Nome do cliente : '.$phones->client->client_name.'<br>';
     
   }

   public function manyToMany(){
      
      //buscar por um cliente a mostrar os produtos que ele comprou
     //  $client1 = Client::find(1);
     //  $products = $client1->products; 
     //  echo'Nome do cliente : '.$client1->client_name.'<br>';
     // echo'Produtos comprados pelo cliente :<br>';
     // foreach($products as $product){  
     //    echo $product->product_name . '<br>'; 
     //  } 

      //buscando os clientes que compraram determnados produtos
      //busca inversa nesse caso ele mostra o nome do porduto e em baixa a lista dos 
      //clientes que compraram o produto 

      $product1 = Product::find(3);
      $clients = $product1->clients; 
      echo'Nome do produto : '.$product1->product_name.'<br>';
      echo'clientes :<br>';
      foreach($clients as $client){  
         echo $client->client_name . '<br>'; 
      }
   } 
      
  public function runingQueries(){
      
     //buscando todos os telefones que pertecem a um cliente que começa com o numero 8

    //  $client1 = Client::find(9);
    //  $phones = $client1->phones()->where('phone_number','like','%8')->get();
    //  echo'Cliente: '.$client1->client_name.'<br>';
    //  echo'Telefones: <br>';
    //  foreach($phones as $phone){
    //    echo $phone->phone_number.'<br>';
    //  }

   // buscando tdos os produtos comprados por u cliente com o valor acima de 50 reais 
   // $client2 = Client::find(9);
   // $products = $client2->products()->where('price','>',50)->get();
   // echo'Cliente: '.$client2->client_name.'<br>';
   // echo'<br>';
   // foreach($products as $product){
   //    echo $product->product_name.'-'.$product->price.'<br>';
   // }

   //
}

public function SameResults(){
     
      // obtendo dados reslacionados mas sem usar as relações 
     // buscando um clientes e seus telefones não é aocnselhavel fazer consultas dessa forma estou fazendo isso 
     // para mostrar que é possivel 

    //  $client1 = Client::find(1);
    //  $phones  = Phone::where('client_id',$client1->id)->get();
    // echo'Cliente: '.$client1->client_name.'<br>';
    // echo'Telefones: <br>';
    // foreach($phones as $phone){
    //   echo $phone->phone_number.'<br>';
    //   
    //  }

   // Buscando todos os pordutos que um cliente comprou 
   // $client2 = Client::find(1);
   // $products = Product::join('orders','products.id','=','orders.product_id')
   //                 ->where('orders.client_id',$client2->id)
   //                 ->get();
   //  echo'<br>';
   //  echo'Cliente : '.$client2->client_name.'<br>';
   //  echo'Produtos <br>';
   //  foreach($products as $product){
   //    echo $product->product_name.' - '.$product->price.'<br>';
   //  }

   //Nos casos aacima eu ate tenho um reultado esperado  sem usar as relações 
   //porem eu tenho que fazer duas consultas para consultar isso então não é algo pratico de se usar   

    






}





}