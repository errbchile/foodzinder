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
        $res->telefono = "333-783-2323";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "Restaurante económico";
        $res->direccion = "Calle Santa Magdalena";
        $res->ciudad = "Madrid";
        $res->pais = "España";
        $res->telefono = "989-387-2321";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "Restaurante de prueba";
        $res->direccion = "Calle Santa Josefina";
        $res->ciudad = "Madrid";
        $res->pais = "España";
        $res->telefono = "121-387-2321";
        foreach ($filtros as $filtro) {
            $res->{$filtro} = 'on';
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "Chickens Resto test";
        $res->direccion = "Calle Florida";
        $res->ciudad = "Madrid";
        $res->pais = "Barcelona";
        $res->telefono = "334-386-3221";
        foreach ($filtros as $index => $filtro) {
            if ($index % 2 === 0) {
                $res->{$filtro} = 'on';
            }
        }
        $res->save();

        $res = new Restaurant();
        $res->nombre = "testing resto";
        $res->direccion = "Calle Francia";
        $res->ciudad = "Medellín";
        $res->pais = "Colombia";
        $res->telefono = "335-111-3221";
        foreach ($filtros as $index => $filtro) {
            if ($index % 3 === 0) {
                $res->{$filtro} = 'on';
            }
        }
        $res->save();

        
        $res = new Restaurant();
        $res->nombre = "testing test";
        $res->direccion = "Calle Normandie";
        $res->ciudad = "Madrid";
        $res->pais = "España";
        $res->telefono = "222-333-4455";
        $res->precio1 = 'on';
        $res->precio3 = 'on';
        $res->save();





    }
}
