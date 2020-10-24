<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Editar Restaurant</title>
</head>
<body>
   <div class="container fluid">
      <div class="row">
         <div class="col-md-12">
            <form method="POST" action="{{ route('restaurant.update', ['id' => $restaurant->id]) }}">
               @csrf
               <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="nombre">Nombre</label>
                  <input name="nombre" type="text" value="{{ $restaurant->nombre }}" class="form-control" id="nombre">
                  </div>
                  <div class="form-group col-md-8">
                     <label for="direccion">Dirección</label>
                     <input name="direccion" type="text" class="form-control" value="{{ $restaurant->direccion }}" id="direccion">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="ciudad">Ciudad</label>
                     <select name="ciudad" id="ciudad" value="{{ $restaurant->ciudad }}" class="form-control">
                       <option value="" disabled selected>-- Seleccione --</option>
                       <option {{ $restaurant->ciudad === 'madrid' ? 'selected' : '' }} value="madrid">Madrid</option>
                       <option {{ $restaurant->ciudad === 'barcelona' ? 'selected' : '' }} value="barcelona">Barcelona</option>
                       <option {{ $restaurant->ciudad === 'sevilla' ? 'selected' : '' }} value="sevilla">Sevilla</option>
                       <option {{ $restaurant->ciudad === 'bilbao' ? 'selected' : '' }} value="bilbao">Bilbao</option>
                       <option {{ $restaurant->ciudad === 'zaragoza' ? 'selected' : '' }} value="zaragoza">Zaragoza</option>
                       <option {{ $restaurant->ciudad === 'granada' ? 'selected' : '' }} value="granada">Granada</option>
                       <option {{ $restaurant->ciudad === 'cordoba' ? 'selected' : '' }} value="cordoba">Córdoba</option>
                       <option {{ $restaurant->ciudad === 'san-sebastian' ? 'selected' : '' }} value="san-sebastian">San Sebastián</option>
                       <option {{ $restaurant->ciudad === 'salamanca' ? 'selected' : '' }} value="salamanca">Salamanca</option>
                       <option {{ $restaurant->ciudad === 'valencia' ? 'selected' : '' }} value="valencia">Valencia</option>
                       <option {{ $restaurant->ciudad === 'toledo' ? 'selected' : '' }} value="toledo">Toledo</option>
                       <option {{ $restaurant->ciudad === 'burgos' ? 'selected' : '' }} value="burgos">Burgos</option>
                       <option {{ $restaurant->ciudad === 'malaga' ? 'selected' : '' }} value="malaga">Málaga</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="pais">País</label>
                     <select name="pais" id="pais" class="form-control">
                       <option value="" disabled selected>-- Seleccione --</option>
                       <option {{ $restaurant->pais === 'España' ? 'selected' : '' }} value="España">España</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="telefono">Teléfono (+34)</label>
                     <input value="{{ $restaurant->telefono }}" name="telefono" type="text" class="form-control" id="telefono">
                  </div>
               </div>

               <hr>

               <p>Precio</p>
                <div class="form-check">
                  <input {{ $restaurant->precio1 === 'on' ? 'checked' : '' }} name="precio1" class="form-check-input" type="checkbox" id="precio1">
                  <label class="form-check-label" for="precio1">
                    $
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->precio2 === 'on' ? 'checked' : '' }} name="precio2" class="form-check-input" type="checkbox" id="precio2">
                  <label class="form-check-label" for="precio2">
                    $$
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->precio3 === 'on' ? 'checked' : '' }} name="precio3" class="form-check-input" type="checkbox" id="precio3">
                  <label class="form-check-label" for="precio3">
                    $$$
                  </label>
                </div>

                <hr>  

                <p>Tipo de Establecimiento</p>
                <div class="form-check">
                  <input {{ $restaurant->restaurante === 'on' ? 'checked' : '' }} name="restaurante" class="form-check-input" type="checkbox" id="restaurante">
                  <label class="form-check-label" for="restaurante">
                    Restaurante
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->cafeteria === 'on' ? 'checked' : '' }} name="cafeteria" class="form-check-input" type="checkbox" id="cafeteria">
                  <label class="form-check-label" for="cafeteria">
                    Cafetería
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->bar === 'on' ? 'checked' : '' }} name="bar" class="form-check-input" type="checkbox" id="bar">
                  <label class="form-check-label" for="bar">
                    Bar
                  </label>
                </div>

                <hr>  

                <p>Características</p>
                <div class="form-check">
                  <input {{ $restaurant->admite_reservas === 'on' ? 'checked' : '' }} name="admite_reservas" class="form-check-input" type="checkbox" id="admite_reservas">
                  <label class="form-check-label" for="admite_reservas">
                    Admite Reservas
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->para_llevar === 'on' ? 'checked' : '' }} name="para_llevar" class="form-check-input" type="checkbox" id="para_llevar">
                  <label class="form-check-label" for="para_llevar">
                    Para LLevar
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->domicilio === 'on' ? 'checked' : '' }} name="domicilio" class="form-check-input" type="checkbox" id="domicilio">
                  <label class="form-check-label" for="domicilio">
                    A Domicilio
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->terraza_exterior === 'on' ? 'checked' : '' }} name="terraza_exterior" class="form-check-input" type="checkbox" id="terraza_exterior">
                  <label class="form-check-label" for="terraza_exterior">
                    Terraza Exterior
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->wifi_gratuito === 'on' ? 'checked' : '' }} name="wifi_gratuito" class="form-check-input" type="checkbox" id="wifi_gratuito">
                  <label class="form-check-label" for="wifi_gratuito">
                    Wifi Gratuito
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->sin_gluten === 'on' ? 'checked' : '' }} name="sin_gluten" class="form-check-input" type="checkbox" id="sin_gluten">
                  <label class="form-check-label" for="sin_gluten">
                    Sin Glúten
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->accesible === 'on' ? 'checked' : '' }} name="accesible" class="form-check-input" type="checkbox" id="accesible">
                  <label class="form-check-label" for="accesible">
                    Accesible
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->admite_mascotas === 'on' ? 'checked' : '' }} name="admite_mascotas" class="form-check-input" type="checkbox" id="admite_mascotas">
                  <label class="form-check-label" for="admite_mascotas">
                    Admite Mascotas
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->plastic_free === 'on' ? 'checked' : '' }} name="plastic_free" class="form-check-input" type="checkbox" id="plastic_free">
                  <label class="form-check-label" for="plastic_free">
                    Plastic Free
                  </label>
                </div>

                <hr>  

                <p>Comidas</p>
                <div class="form-check">
                  <input {{ $restaurant->desayuno === 'on' ? 'checked' : '' }} name="desayuno" class="form-check-input" type="checkbox" id="desayuno">
                  <label class="form-check-label" for="desayuno">
                    Desayuno
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->brunch === 'on' ? 'checked' : '' }} name="brunch" class="form-check-input" type="checkbox" id="brunch">
                  <label class="form-check-label" for="brunch">
                    Brunch
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->almuerzo === 'on' ? 'checked' : '' }} name="almuerzo" class="form-check-input" type="checkbox" id="almuerzo">
                  <label class="form-check-label" for="almuerzo">
                    Almuerzo
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->cena === 'on' ? 'checked' : '' }} name="cena" class="form-check-input" type="checkbox" id="cena">
                  <label class="form-check-label" for="cena">
                    Cena
                  </label>
                </div>

                <hr>  

                <p>Soy más de</p>
                <div class="form-check">
                  <input {{ $restaurant->dulce === 'on' ? 'checked' : '' }} name="dulce" class="form-check-input" type="checkbox" id="dulce">
                  <label class="form-check-label" for="dulce">
                    Dulce
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->salado === 'on' ? 'checked' : '' }} name="salado" class="form-check-input" type="checkbox" id="salado">
                  <label class="form-check-label" for="salado">
                    Salado
                  </label>
                </div>

                <hr>  

                <p>Tipo de Cocina</p>
                <div class="form-check">
                  <input {{ $restaurant->local === 'on' ? 'checked' : '' }} name="local" class="form-check-input" type="checkbox" id="local">
                  <label class="form-check-label" for="local">
                    Local
                  </label>
                </div>
                <div class="form-check">
                  <input  {{ $restaurant->nacional === 'on' ? 'checked' : '' }} name="nacional" class="form-check-input" type="checkbox" id="nacional">
                  <label class="form-check-label" for="nacional">
                    Nacional
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->internacional === 'on' ? 'checked' : '' }} name="internacional" class="form-check-input" type="checkbox" id="internacional">
                  <label class="form-check-label" for="internacional">
                    Internacional
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->fusion === 'on' ? 'checked' : '' }} name="fusion" class="form-check-input" type="checkbox" id="fusion">
                  <label class="form-check-label" for="fusion">
                    Fusión
                  </label>
                </div>

                <hr>

                <p>Platos</p>
                <div class="form-check">
                  <input {{ $restaurant->vegetariano === 'on' ? 'checked' : '' }} name="vegetariano" class="form-check-input" type="checkbox" id="vegetariano">
                  <label class="form-check-label" for="vegetariano">
                    Vegetariano
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->vegano === 'on' ? 'checked' : '' }} name="vegano" class="form-check-input" type="checkbox" id="vegano">
                  <label class="form-check-label" for="vegano">
                    Vegano
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->marisco === 'on' ? 'checked' : '' }} name="marisco" class="form-check-input" type="checkbox" id="marisco">
                  <label class="form-check-label" for="marisco">
                    Marisco
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->atun === 'on' ? 'checked' : '' }} name="atun" class="form-check-input" type="checkbox" id="atun">
                  <label class="form-check-label" for="atun">
                    Atún
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->sushi === 'on' ? 'checked' : '' }} name="sushi" class="form-check-input" type="checkbox" id="sushi">
                  <label class="form-check-label" for="sushi">
                    Sushi
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->pescado === 'on' ? 'checked' : '' }} name="pescado" class="form-check-input" type="checkbox" id="pescado">
                  <label class="form-check-label" for="pescado">
                    Pescado
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->carne === 'on' ? 'checked' : '' }} name="carne" class="form-check-input" type="checkbox" id="carne">
                  <label class="form-check-label" for="carne">
                    Carne
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->paella === 'on' ? 'checked' : '' }} name="paella" class="form-check-input" type="checkbox" id="paella">
                  <label class="form-check-label" for="paella">
                    Paella
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->pasta === 'on' ? 'checked' : '' }} name="pasta" class="form-check-input" type="checkbox" id="pasta">
                  <label class="form-check-label" for="pasta">
                    Pasta
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->pizza === 'on' ? 'checked' : '' }} name="pizza" class="form-check-input" type="checkbox" id="pizza">
                  <label class="form-check-label" for="pizza">
                    Pizza
                  </label>
                </div>
                <div class="form-check">
                  <input {{ $restaurant->zumos_y_batidos === 'on' ? 'checked' : '' }} name="zumos_y_batidos" class="form-check-input" type="checkbox" id="zumos_y_batidos">
                  <label class="form-check-label" for="zumos_y_batidos">
                    Zumos y Batidos
                  </label>
                </div>


                <hr>  


              


              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="{{ url('/') }}">
                <button type="button" class="btn btn-primary">Home</button>
              </a>
             </form>
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