<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function listar(){
    	//SELECT * FROM productos
    	$productos = Producto::all();
    	return view('productos',compact('productos'));
    }

    public function crear(){
    	$producto = new Producto;
    	$producto->nombre = "Manzana";
    	$producto->precio = 600;
    	$producto->save();

    }

    public function editar($id){
    	$producto = Producto::find($id);  //SELECT * FROM productos WHERE id=$id
    	$producto->nombre = "Manzana Verde";
    	$producto->precio = 700;
    	$producto->save();
    }

    public function borrar($id){
    	$producto = Producto::find($id);
    	$producto->delete();
    }
}
