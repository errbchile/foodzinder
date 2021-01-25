<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Registrar Restaurant</title>

   {{-- Data Tables CSS --}}
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">


</head>
<body>
   		
		
   <div class="container fluid add_top_menu mt-5">
      <div class="row">
         <div class="col-md-12">
            <form method="POST" action="{{ route('restaurant.store') }}" enctype="multipart/form-data">
               @csrf
               <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="nombre">Nombre del Restaurant</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" required>
                  </div>
                  <div class="form-group col-md-8">
                     <label for="direccion">Dirección</label>
                     <input name="direccion" type="text" class="form-control" value="{{ old('direccion') }}" id="direccion" placeholder="C/Sant Rafael">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="ciudad">Ciudad</label>
                     <select name="ciudad" id="ciudad" value="{{ old('ciudad') }}" class="form-control">
                       <option value="">-- Seleccione --</option>
                       <option value="Madrid">Madrid</option>
                       <option value="Barcelona">Barcelona</option>
                       <option value="Sevilla">Sevilla</option>
                       <option value="Bilbao">Bilbao</option>
                       <option value="Zaragoza">Zaragoza</option>
                       <option value="Granada">Granada</option>
                       <option value="Córdoba">Córdoba</option>
                       <option value="San Sebastián">San Sebastián</option>
                       <option value="Salamanca">Salamanca</option>
                       <option value="Valencia">Valencia</option>
                       <option value="Toledo">Toledo</option>
                       <option value="Burgos">Burgos</option>
                       <option value="Málaga">Málaga</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="pais">País</label>
                     <select name="pais" id="pais" class="form-control">
                       <option value="" disabled selected>-- Seleccione --</option>
                       <option value="España">España</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="telefono">Teléfono (+34)</label>
                     <input name="telefono" type="text" class="form-control" id="telefono" placeholder="936 3636 3625">
                  </div>
               </div>

               <hr>


               <div class="container">
                 <div class="row">
                   <div class="col-md-3">
                    <p>Precio</p>
                    <div class="form-check">
                      <input name="precio1" class="form-check-input" type="checkbox" id="precio1">
                      <label class="form-check-label" for="precio1">
                        $
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="precio2" class="form-check-input" type="checkbox" id="precio2">
                      <label class="form-check-label" for="precio2">
                        $$
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="precio3" class="form-check-input" type="checkbox" id="precio3">
                      <label class="form-check-label" for="precio3">
                        $$$
                      </label>
                    </div>
                   </div>


                   <div class="col-md-3">
                    <p>Tipo de Establecimiento</p>
                    <div class="form-check">
                      <input name="restaurante" class="form-check-input" type="checkbox" id="restaurante">
                      <label class="form-check-label" for="restaurante">
                        Restaurante
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="cafeteria" class="form-check-input" type="checkbox" id="cafeteria">
                      <label class="form-check-label" for="cafeteria">
                        Cafetería
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="bar" class="form-check-input" type="checkbox" id="bar">
                      <label class="form-check-label" for="bar">
                        Bar
                      </label>
                    </div>
                   </div>


                   <div class="col-md-3">
                    <p>Comidas</p>
                    <div class="form-check">
                      <input name="desayuno" class="form-check-input" type="checkbox" id="desayuno">
                      <label class="form-check-label" for="desayuno">
                        Desayuno
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="brunch" class="form-check-input" type="checkbox" id="brunch">
                      <label class="form-check-label" for="brunch">
                        Brunch
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="almuerzo" class="form-check-input" type="checkbox" id="almuerzo">
                      <label class="form-check-label" for="almuerzo">
                        Almuerzo
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="cena" class="form-check-input" type="checkbox" id="cena">
                      <label class="form-check-label" for="cena">
                        Cena
                      </label>
                    </div>
                   </div>


                   <div class="col-md-3">
                    <p>Tipo de Cocina</p>
                    <div class="form-check">
                      <input name="local" class="form-check-input" type="checkbox" id="local">
                      <label class="form-check-label" for="local">
                        Local
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="nacional" class="form-check-input" type="checkbox" id="nacional">
                      <label class="form-check-label" for="nacional">
                        Nacional
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="internacional" class="form-check-input" type="checkbox" id="internacional">
                      <label class="form-check-label" for="internacional">
                        Internacional
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="fusion" class="form-check-input" type="checkbox" id="fusion">
                      <label class="form-check-label" for="fusion">
                        Fusión
                      </label>
                    </div>
                   </div>{{-- END-COL --}}
                 </div> {{-- END-ROW --}}

                 <hr>

                 <div class="row">
                   <div class="col-md-4">
                    <p>Características</p>
                    <div class="form-check">
                      <input name="admite_reservas" class="form-check-input" type="checkbox" id="admite_reservas">
                      <label class="form-check-label" for="admite_reservas">
                        Admite Reservas
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="para_llevar" class="form-check-input" type="checkbox" id="para_llevar">
                      <label class="form-check-label" for="para_llevar">
                        Para LLevar
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="domicilio" class="form-check-input" type="checkbox" id="domicilio">
                      <label class="form-check-label" for="domicilio">
                        A Domicilio
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="terraza_exterior" class="form-check-input" type="checkbox" id="terraza_exterior">
                      <label class="form-check-label" for="terraza_exterior">
                        Terraza Exterior
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="wifi_gratuito" class="form-check-input" type="checkbox" id="wifi_gratuito">
                      <label class="form-check-label" for="wifi_gratuito">
                        Wifi Gratuito
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="sin_gluten" class="form-check-input" type="checkbox" id="sin_gluten">
                      <label class="form-check-label" for="sin_gluten">
                        Sin Glúten
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="accesible" class="form-check-input" type="checkbox" id="accesible">
                      <label class="form-check-label" for="accesible">
                        Accesible
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="admite_mascotas" class="form-check-input" type="checkbox" id="admite_mascotas">
                      <label class="form-check-label" for="admite_mascotas">
                        Admite Mascotas
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="plastic_free" class="form-check-input" type="checkbox" id="plastic_free">
                      <label class="form-check-label" for="plastic_free">
                        Plastic Free
                      </label>
                    </div>
                   </div>


                   <div class="col-md-4">
                    <p>Soy más de</p>
                    <div class="form-check">
                      <input name="dulce" class="form-check-input" type="checkbox" id="dulce">
                      <label class="form-check-label" for="dulce">
                        Dulce
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="salado" class="form-check-input" type="checkbox" id="salado">
                      <label class="form-check-label" for="salado">
                        Salado
                      </label>
                    </div>
                   </div>

                   <div class="col-md-4">
                    <p>Platos</p>
                    <div class="form-check">
                      <input name="vegetariano" class="form-check-input" type="checkbox" id="vegetariano">
                      <label class="form-check-label" for="vegetariano">
                        Vegetariano
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="vegano" class="form-check-input" type="checkbox" id="vegano">
                      <label class="form-check-label" for="vegano">
                        Vegano
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="marisco" class="form-check-input" type="checkbox" id="marisco">
                      <label class="form-check-label" for="marisco">
                        Marisco
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="atun" class="form-check-input" type="checkbox" id="atun">
                      <label class="form-check-label" for="atun">
                        Atún
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="sushi" class="form-check-input" type="checkbox" id="sushi">
                      <label class="form-check-label" for="sushi">
                        Sushi
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="pescado" class="form-check-input" type="checkbox" id="pescado">
                      <label class="form-check-label" for="pescado">
                        Pescado
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="carne" class="form-check-input" type="checkbox" id="carne">
                      <label class="form-check-label" for="carne">
                        Carne
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="paella" class="form-check-input" type="checkbox" id="paella">
                      <label class="form-check-label" for="paella">
                        Paella
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="pasta" class="form-check-input" type="checkbox" id="pasta">
                      <label class="form-check-label" for="pasta">
                        Pasta
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="pizza" class="form-check-input" type="checkbox" id="pizza">
                      <label class="form-check-label" for="pizza">
                        Pizza
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="zumos_y_batidos" class="form-check-input" type="checkbox" id="zumos_y_batidos">
                      <label class="form-check-label" for="zumos_y_batidos">
                        Zumos y Batidos
                      </label>
                    </div>
                   </div>{{-- END-COL --}}
                 </div>{{-- END-ROW --}}

                 <div class="row mt-3">
                   <div class="col text-center">
                     <h3>Imágenes del Restaurante:</h3>
                   </div>
                  </div>
                   <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Imagen 1</span>
                        </div>
                        <input id="imagen1" type="file" name="filenames[]" class="form-control">
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Imagen 2</span>
                        </div>
                        <input id="imagen1" type="file" name="filenames[]" class="form-control">
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Imagen 3</span>
                        </div>
                        <input id="imagen1" type="file" name="filenames[]" class="form-control">
                      </div>
                    </div>
                  </div>
               </div> {{-- END-CONTAINER --}}

               <div class="container mt-3">
                 <div class="row">
                   <div class="col">
                     <button type="submit" class="btn btn-success">Registrar Restaurant</button>
                     <a href="{{ url('/') }}">
                       <button type="button" class="btn btn-primary">Página de inicio</button>
                     </a>
                    
                   </div>
                 </div>
               </div>
            </form>
         </div>
      </div>
      <hr>
   </div>


   <div class="container mt-5">
     <div class="row">
      <div class="col text-center">
        <h4>Restaurantes Registrados:</h4>
       </div>
     </div>
     <div class="row">
       <div class="col">
        <table id="tabla_listado_restaurantes" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Restaurant</th>
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($restaurantes as $resto)
            <tr>
              <td>{{ $resto->nombre }}</td>
              <td>{{ $resto->direccion }}</td>
              <td>{{ $resto->telefono }}</td>
              <td class="text-center d-flex">
                <a href="{{ route('restaurant.edit', ['id' => $resto->id]) }}">
                  <button type="button" class="btn btn-success btn-sm">Editar Restaurante</button>
                </a>
                <a href="{{ route('categorias.index', ['id' => $resto->id]) }}">
                  <button type="button" class="btn btn-info btn-sm">Ver Categorías</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
              <tr>
                <th>Restaurant</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
              </tr>
          </tfoot>
      </table>


       </div>
     </div>
   </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    {{-- Data Tables JS --}}
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#tabla_listado_restaurantes').DataTable();
      });
     </script>
</body>
</html>