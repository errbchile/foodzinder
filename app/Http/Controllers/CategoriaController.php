<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index($id)
    {
        $restaurante = Restaurant::find($id);
        $entrantes = DB::table('entrantes')->where('restaurant_id', $id)->get()->toJson();

        return view("categorias.index", ['restaurante' => json_encode($restaurante->toJson()), 'entrantes' => json_encode($entrantes)]);
    }

    public function AddNewProductoEntrante(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/entrantes/', $name);

        // Preparamos el producto:
        $entrante['nombre'] = $request->input('nombre');
        $entrante['precio'] = $request->input('precio');
        $entrante['restaurant_id'] = $request->input('restauranteId');
        $entrante['imagen'] = '/images/categorias/entrantes/'.$name;

        $entrante_id = DB::table('entrantes')->insertGetId($entrante);

        $entrante['id'] = $entrante_id;

        return response()->json($entrante);
    }

    public function eliminarEntrante($id)
    {
        DB::table('entrantes')->where('id', $id)->delete();
        return $id.' fue borrado';
    }
}
