<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
   public function search() {
   
        $busca = request('search');// resgatando parâmetros que vem através de querystring
        
        
        
         return view('products', ['busca' => $busca]);
     }//e

    public function searchTeste ($id=null) {
        return view('product', ['id'=> $id]);
    }//e



}//end
