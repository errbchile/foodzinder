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
        $sopas = DB::table('sopas')->where('restaurant_id', $id)->get()->toJson();
        $fritos = DB::table('fritos')->where('restaurant_id', $id)->get()->toJson();
        $carnes = DB::table('carnes')->where('restaurant_id', $id)->get()->toJson();
        $pescados = DB::table('pescados')->where('restaurant_id', $id)->get()->toJson();
        $pastas = DB::table('pastas')->where('restaurant_id', $id)->get()->toJson();
        $postres = DB::table('postres')->where('restaurant_id', $id)->get()->toJson();
        $bebidas = DB::table('bebidas')->where('restaurant_id', $id)->get()->toJson();

        return view("categorias.index", ['restaurante' => json_encode($restaurante->toJson()), 
                                         'entrantes'   => json_encode($entrantes),
                                         'sopas'       => json_encode($sopas),
                                         'fritos'      => json_encode($fritos),
                                         'carnes'      => json_encode($carnes),
                                         'pescados'    => json_encode($pescados),
                                         'pastas'      => json_encode($pastas),
                                         'postres'     => json_encode($postres),
                                         'bebidas'     => json_encode($bebidas)
                                         ]);
    }



    // START ENTRANTES
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
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END ENTRANTES

    // START SOPA
    public function AddNewProductoSopa(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/sopas/', $name);

        // Preparamos el producto:
        $sopa['nombre'] = $request->input('nombre');
        $sopa['precio'] = $request->input('precio');
        $sopa['restaurant_id'] = $request->input('restauranteId');
        $sopa['imagen'] = '/images/categorias/sopas/'.$name;

        $sopa_id = DB::table('sopas')->insertGetId($sopa);

        $sopa['id'] = $sopa_id;

        return response()->json($sopa);
    }
    public function eliminarSopa($id)
    {
        DB::table('sopas')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END SOPA

    // START FRITO
    public function AddNewProductoFrito(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/fritos/', $name);

        // Preparamos el producto:
        $frito['nombre'] = $request->input('nombre');
        $frito['precio'] = $request->input('precio');
        $frito['restaurant_id'] = $request->input('restauranteId');
        $frito['imagen'] = '/images/categorias/fritos/'.$name;

        $frito_id = DB::table('fritos')->insertGetId($frito);

        $frito['id'] = $frito_id;

        return response()->json($frito);
    }

    public function eliminarFrito($id)
    {
        DB::table('fritos')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END FRITO

    // START CARNE
    public function AddNewProductoCarne(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/carnes/', $name);

        // Preparamos el producto:
        $carne['nombre'] = $request->input('nombre');
        $carne['precio'] = $request->input('precio');
        $carne['restaurant_id'] = $request->input('restauranteId');
        $carne['imagen'] = '/images/categorias/carnes/'.$name;

        $carne_id = DB::table('carnes')->insertGetId($carne);

        $carne['id'] = $carne_id;

        return response()->json($carne);
    }

    public function eliminarCarne($id)
    {
        DB::table('carnes')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END CARNE

    // START PESCADO
    public function AddNewProductoPescado(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/pescados/', $name);

        // Preparamos el producto:
        $pescado['nombre'] = $request->input('nombre');
        $pescado['precio'] = $request->input('precio');
        $pescado['restaurant_id'] = $request->input('restauranteId');
        $pescado['imagen'] = '/images/categorias/pescados/'.$name;

        $pescado_id = DB::table('pescados')->insertGetId($pescado);

        $pescado['id'] = $pescado_id;

        return response()->json($pescado);
    }

    public function eliminarPescado($id)
    {
        DB::table('pescados')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END PESCADO

    // START PASTA
    public function AddNewProductoPasta(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/pastas/', $name);

        // Preparamos el producto:
        $pasta['nombre'] = $request->input('nombre');
        $pasta['precio'] = $request->input('precio');
        $pasta['restaurant_id'] = $request->input('restauranteId');
        $pasta['imagen'] = '/images/categorias/pastas/'.$name;

        $pasta_id = DB::table('pastas')->insertGetId($pasta);

        $pasta['id'] = $pasta_id;

        return response()->json($pasta);
    }

    public function eliminarPasta($id)
    {
        DB::table('pastas')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END PASTA

    // START POSTRE
    public function AddNewProductoPostre(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/postres/', $name);

        // Preparamos el producto:
        $postre['nombre'] = $request->input('nombre');
        $postre['precio'] = $request->input('precio');
        $postre['restaurant_id'] = $request->input('restauranteId');
        $postre['imagen'] = '/images/categorias/postres/'.$name;

        $postre_id = DB::table('postres')->insertGetId($postre);

        $postre['id'] = $postre_id;

        return response()->json($postre);
    }

    public function eliminarPostre($id)
    {
        DB::table('postres')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END POSTRE

    // START BEBIDAS
    public function AddNewProductoBebida(Request $request)
    {

        $file = $request->file('file'); // capturo el archivo
        $name = time().$request->input('restauranteId').$file->getClientOriginalName(); // le pongo imagen al archivo

        // Guardo la imagen en la siguiente carpeta
        $file->move(public_path().'/images/categorias/bebidas/', $name);

        // Preparamos el producto:
        $bebida['nombre'] = $request->input('nombre');
        $bebida['precio'] = $request->input('precio');
        $bebida['restaurant_id'] = $request->input('restauranteId');
        $bebida['imagen'] = '/images/categorias/bebidas/'.$name;

        $bebida_id = DB::table('bebidas')->insertGetId($bebida);

        $bebida['id'] = $bebida_id;

        return response()->json($bebida);
    }

    public function eliminarBebida($id)
    {
        DB::table('bebidas')->where('id', $id)->delete();
        return response()->json([
            $id => 'Fue borrado exitosamente'
        ]);
    }
    // END BEBIDAS
}
