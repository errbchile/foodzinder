<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurant::class, 100)->create();

        $filtros = ['precio1', 'precio2', 'precio3', 'restaurante', 'cafeteria', 'bar', 'admite_reservas', 'para_llevar', 'domicilio', 'terraza_exterior', 'wifi_gratuito', 'sin_gluten', 'accesible', 'admite_mascotas', 'plastic_free', 'desayuno', 'brunch', 'almuerzo', 'cena', 'dulce', 'salado', 'local', 'nacional', 'internacional', 'fusion', 'vegetariano', 'vegano', 'marisco', 'atun', 'sushi', 'pescado', 'carne', 'paella', 'pasta', 'pizza', 'zumos_y_batidos'];

        $res = new Restaurant();
        $res->nombre = "Restaurante barato";
        $res->direccion = "Calle San Joaquín";
        $res->ciudad = "Barcelona";
        $res->pais = "España";
        $res->telefono = "332-783-2323";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "Restaurante económico";
        $res->direccion = "Calle Santa Magdalena";
        $res->ciudad = "Madrid";
        $res->pais = "España";
        $res->telefono = "323-387-2321";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "Restaurante de prueba";
        $res->direccion = "Calle Santa Josefina";
        $res->ciudad = "Madrid";
        $res->pais = "España";
        $res->telefono = "323-387-2321";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();




    }
}
