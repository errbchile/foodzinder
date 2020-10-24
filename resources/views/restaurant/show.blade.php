<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Registrar Restaurant</title>
</head>
<?php //dd($restaurant); ?>
<body>
   <div class="container fluid">
      <div class="row">
         <div class="col-md-12">
            <form>
               <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="nombre">Nombre</label>
                     <input readonly name="nombre" type="text" value="{{ $restaurant->nombre }}" class="form-control" id="nombre">
                  </div>
                  <div class="form-group col-md-8">
                     <label for="direccion">Dirección</label>
                     <input readonly name="direccion" type="text" class="form-control" value="{{ $restaurant->direccion }}" id="direccion" >
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="ciudad">Ciudad</label>
                     <input readonly name="ciudad" type="text" class="form-control" value="{{ $restaurant->ciudad }}" id="ciudad" >
                  </div>
                  <div class="form-group col-md-4">
                     <label for="pais">País</label>
                     <input readonly name="pais" type="text" class="form-control" value="{{ $restaurant->pais }}" id="pais" >
                  </div>
                  <div class="form-group col-md-4">
                     <label for="telefono">Teléfono (+34)</label>
                     <input readonly name="telefono" type="text" value="{{ $restaurant->telefono }}" class="form-control" id="telefono">
                  </div>
               </div>

               <hr>

               <p>Precio</p>
                <div class="form-check">
                  <input readonly name="precio1" {{ ($restaurant->precio1 === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="precio1">
                  <label class="form-check-label" for="precio1">
                    $
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="precio2" {{ ($restaurant->precio2 === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="precio2">
                  <label class="form-check-label" for="precio2">
                    $$
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="precio3" {{ ($restaurant->precio3 === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="precio3">
                  <label class="form-check-label" for="precio3">
                    $$$
                  </label>
                </div>

                <hr>  

                <p>Tipo de Establecimiento</p>
                <div class="form-check">
                  <input readonly name="restaurante" {{ ($restaurant->restaurante === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="restaurante">
                  <label class="form-check-label" for="restaurante">
                    Restaurante
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="cafeteria" {{ ($restaurant->cafeteria === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="cafeteria">
                  <label class="form-check-label" for="cafeteria">
                    Cafetería
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="bar" {{ ($restaurant->bar === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="bar">
                  <label class="form-check-label" for="bar">
                    Bar
                  </label>
                </div>

                <hr>  

                <p>Características</p>
                <div class="form-check">
                  <input readonly name="admite_reservas" {{ ($restaurant->admite_reservas === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="admite_reservas">
                  <label class="form-check-label" for="admite_reservas">
                    Admite Reservas
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="para_llevar"  {{ ($restaurant->para_llevar === "on") ? "checked" : "" }} {{ ($restaurant->para_llevar === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="para_llevar">
                  <label class="form-check-label" for="para_llevar">
                    Para LLevar
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="domicilio"  {{ ($restaurant->domicilio === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="domicilio">
                  <label class="form-check-label" for="domicilio">
                    A Domicilio
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="terraza_exterior"  {{ ($restaurant->terraza_exterior === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="terraza_exterior">
                  <label class="form-check-label" for="terraza_exterior">
                    Terraza Exterior
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="wifi_gratuito"  {{ ($restaurant->wifi_gratuito === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="wifi_gratuito">
                  <label class="form-check-label" for="wifi_gratuito">
                    Wifi Gratuito
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="sin_gluten"  {{ ($restaurant->sin_gluten === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="sin_gluten">
                  <label class="form-check-label" for="sin_gluten">
                    Sin Glúten
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="accesible"  {{ ($restaurant->accesible === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="accesible">
                  <label class="form-check-label" for="accesible">
                    Accesible
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="admite_mascotas"  {{ ($restaurant->admite_mascotas === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="admite_mascotas">
                  <label class="form-check-label" for="admite_mascotas">
                    Admite Mascotas
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="plastic_free"  {{ ($restaurant->plastic_free === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="plastic_free">
                  <label class="form-check-label" for="plastic_free">
                    Plastic Free
                  </label>
                </div>

                <hr>  

                <p>Comidas</p>
                <div class="form-check">
                  <input readonly name="desayuno"  {{ ($restaurant->desayuno === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="desayuno">
                  <label class="form-check-label" for="desayuno">
                    Desayuno
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="brunch"  {{ ($restaurant->brunch === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="brunch">
                  <label class="form-check-label" for="brunch">
                    Brunch
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="almuerzo"  {{ ($restaurant->almuerzo === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="almuerzo">
                  <label class="form-check-label" for="almuerzo">
                    Almuerzo
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="cena"  {{ ($restaurant->cena === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="cena">
                  <label class="form-check-label" for="cena">
                    Cena
                  </label>
                </div>

                <hr>  

                <p>Soy más de</p>
                <div class="form-check">
                  <input readonly name="dulce"  {{ ($restaurant->dulce === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="dulce">
                  <label class="form-check-label" for="dulce">
                    Dulce
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="salado"  {{ ($restaurant->salado === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="salado">
                  <label class="form-check-label" for="salado">
                    Salado
                  </label>
                </div>

                <hr>  

                <p>Tipo de Cocina</p>
                <div class="form-check">
                  <input readonly name="local"  {{ ($restaurant->local === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="local">
                  <label class="form-check-label" for="local">
                    Local
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="nacional"  {{ ($restaurant->nacional === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="nacional">
                  <label class="form-check-label" for="nacional">
                    Nacional
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="internacional"  {{ ($restaurant->internacional === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="internacional">
                  <label class="form-check-label" for="internacional">
                    Internacional
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="fusion"  {{ ($restaurant->fusion === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="fusion">
                  <label class="form-check-label" for="fusion">
                    Fusión
                  </label>
                </div>

                <hr>

                <p>Platos</p>
                <div class="form-check">
                  <input readonly name="vegetariano"  {{ ($restaurant->vegetariano === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="vegetariano">
                  <label class="form-check-label" for="vegetariano">
                    Vegetariano
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="vegano"  {{ ($restaurant->vegano === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="vegano">
                  <label class="form-check-label" for="vegano">
                    Vegano
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="marisco"  {{ ($restaurant->marisco === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="marisco">
                  <label class="form-check-label" for="marisco">
                    Marisco
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="atun"  {{ ($restaurant->atun === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="atun">
                  <label class="form-check-label" for="atun">
                    Atún
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="sushi"  {{ ($restaurant->sushi === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="sushi">
                  <label class="form-check-label" for="sushi">
                    Sushi
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="pescado"  {{ ($restaurant->pescado === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="pescado">
                  <label class="form-check-label" for="pescado">
                    Pescado
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="carne"  {{ ($restaurant->carne === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="carne">
                  <label class="form-check-label" for="carne">
                    Carne
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="paella"  {{ ($restaurant->paella === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="paella">
                  <label class="form-check-label" for="paella">
                    Paella
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="pasta"  {{ ($restaurant->pasta === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="pasta">
                  <label class="form-check-label" for="pasta">
                    Pasta
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="pizza"  {{ ($restaurant->pizza === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="pizza">
                  <label class="form-check-label" for="pizza">
                    Pizza
                  </label>
                </div>
                <div class="form-check">
                  <input readonly name="zumos_y_batidos"  {{ ($restaurant->zumos_y_batidos === "on") ? "checked" : "" }} class="form-check-input" type="checkbox" disabled id="zumos_y_batidos">
                  <label class="form-check-label" for="zumos_y_batidos">
                    Zumos y Batidos
                  </label>
                </div>
                <a href="{{ route('restaurant.edit', ['id' => $restaurant->id]) }}">
                  <button type="button" class="btn btn-success">Editar</button>
                </a>
                <a href="{{ url('/') }}">
                  <button type="button" class="btn btn-primary">Home</button>
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Borrar
                </button>


             


              
                
                <hr>  

             </form>
         </div>
      </div>
   </div>
   



      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ATENCIÓN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            Los datos del restaurante serán borrados de manera definitiva ¿Aún desea <strong>borrar</strong> el restaurante <strong>{{ $restaurant->nombre }}</strong>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
              <form method="POST" action="{{ route('restaurant.destroy', ['id' => $restaurant->id]) }}">
                  @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>