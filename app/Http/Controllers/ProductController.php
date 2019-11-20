<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listado = Producto::All();
        return view('productos.index',['listado'=>$listado]);
    }
}
