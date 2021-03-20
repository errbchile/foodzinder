<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Editar Restaurant</title>
     <!-- Cropper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.css" integrity="sha512-jO9KUHlvIF4MH/OTiio0aaueQrD38zlvFde9JoEA+AQaCNxIJoX4Kjse3sO2kqly84wc6aCtdm9BIUpYdvFYoA==" crossorigin="anonymous" />

       {{-- Data Tables CSS --}}
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <style>
      .imagen_izquierda_modal {
         display: block;
         max-width: 100%;
      }
      .imagen_final {
         display: block;
         max-width: 100%;
      }
      .preview_imagen_recortada {
         overflow: hidden;
         width: 1280px;
         height: 720px;
         margin: 10px;
         border: 1px solid grey;
      }
  
   </style>
</head>
<body>
   <div class="container fluid">
      <div class="row">
         <div class="col-md-12">
            <form method="POST" action="{{ route('restaurant.update', ['id' => $restaurant->id]) }}" enctype="multipart/form-data">
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
                       <option {{ $restaurant->ciudad === '' ? 'selected' : '' }} value="">-- Seleccione --</option>
                       <option {{ $restaurant->ciudad === 'Madrid' ? 'selected' : '' }} value="Madrid">Madrid</option>
                       <option {{ $restaurant->ciudad === 'Barcelona' ? 'selected' : '' }} value="Barcelona">Barcelona</option>
                       <option {{ $restaurant->ciudad === 'Sevilla' ? 'selected' : '' }} value="Sevilla">Sevilla</option>
                       <option {{ $restaurant->ciudad === 'Bilbao' ? 'selected' : '' }} value="Bilbao">Bilbao</option>
                       <option {{ $restaurant->ciudad === 'Zaragoza' ? 'selected' : '' }} value="Zaragoza">Zaragoza</option>
                       <option {{ $restaurant->ciudad === 'Granada' ? 'selected' : '' }} value="Granada">Granada</option>
                       <option {{ $restaurant->ciudad === 'Cordoba' ? 'selected' : '' }} value="Cordoba">Córdoba</option>
                       <option {{ $restaurant->ciudad === 'San Sebastián' ? 'selected' : '' }} value="San Sebastián">San Sebastián</option>
                       <option {{ $restaurant->ciudad === 'Salamanca' ? 'selected' : '' }} value="Salamanca">Salamanca</option>
                       <option {{ $restaurant->ciudad === 'Valencia' ? 'selected' : '' }} value="Valencia">Valencia</option>
                       <option {{ $restaurant->ciudad === 'Toledo' ? 'selected' : '' }} value="Toledo">Toledo</option>
                       <option {{ $restaurant->ciudad === 'Burgos' ? 'selected' : '' }} value="Burgos">Burgos</option>
                       <option {{ $restaurant->ciudad === 'Malaga' ? 'selected' : '' }} value="Malaga">Málaga</option>
                       <option {{ $restaurant->ciudad === 'Tarifa' ? 'selected' : '' }} value="Tarifa">Tarifa</option>
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

                     <label for="telefono">Teléfono</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text">+34</div>
                       </div>
                       <input value="{{ $restaurant->telefono }}" name="telefono" type="text" class="form-control" id="telefono">
                     </div>

                  </div>
               </div>
               <div class="form-row">
                <div class="form-group col-md-8">
                   <label for="google_maps">Enlace a Google Maps:</label>
                   <input name="google_maps" type="text" class="form-control" value="{{ $restaurant->google_maps }}" id="google_maps">
                </div>
                <div class="form-group col-md-4 text-center">
                  <label for="google_maps">¿Tiene WhatsApp?  </label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tiene_whatsapp" id="checkbox_si" {{ $restaurant->tiene_whatsapp === 1 ? "checked" : "" }}>
                    <label class="form-check-label" for="checkbox_si">
                      SI
                    </label>
                  </div>
               </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="google_maps">Horario de Atención:</label>
                    <input name="horario" type="text" class="form-control" value="{{ $restaurant->horario }}" id="horario">
                  </div>
              </div>

               <hr>












               
               <div class="container">
                <div class="row">
                  <div class="col-md-3">
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
                  </div>


                  <div class="col-md-3">
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
                  </div>


                  <div class="col-md-3">
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
                      <input {{ $restaurant->merienda === 'on' ? 'checked' : '' }} name="merienda" class="form-check-input" type="checkbox" id="merienda">
                      <label class="form-check-label" for="merienda">
                        Merienda
                      </label>
                    </div>
                    <div class="form-check">
                      <input {{ $restaurant->cena === 'on' ? 'checked' : '' }} name="cena" class="form-check-input" type="checkbox" id="cena">
                      <label class="form-check-label" for="cena">
                        Cena
                      </label>
                    </div>
                  </div>


                  <div class="col-md-3">
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
                  </div>{{-- END-COL --}}
                </div> {{-- END-ROW --}}

                <hr>

                <div class="row">
                  <div class="col-md-4">
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
                  </div>


                  <div class="col-md-4">
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
                  </div>

                  <div class="col-md-4">
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
                  </div>{{-- END-COL --}}
                </div>{{-- END-ROW --}}
              </div> {{-- END-CONTAINER --}}

              @if ($restaurant->imagenes)
                <div class="container mt-3">
                  <div class="row d-flex">
                      <div class="col-4">
                        <div>
                          <img src="{{ url($restaurant->imagenes) }}" class="img-fluid" alt="Responsive image">
                        </div>
                      </div>
                  </div>
                </div>
              @endif

              <div class="container m-3">

                <div class="row mt-3">
                  <div class="col text-center">
                    <h3>Portada del Restaurante</h3>
                  </div>
                 </div>
                  <div class="row">
                   <div class="col">
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Imagen</span>
                       </div>

                        {{-- para recortar --}}
                        <input id="original_image" type="file" name="imagen"  class="form-control">

                        {{-- recortado (oculto) --}}
                       <input id="imagen1" type="text" name="filenames" class="form-control d-none">
                     </div>
                   </div>
                 </div>

                 <div class="row m-2 p-1">
                  <div class="col-md-12">
                    <img class="imagen_final" id="imagen_final" src="" alt="">
                  </div>
                </div>

              </div>

              <div class="container m-3">
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ url('/') }}">
                      <button type="button" class="btn btn-primary">Página de inicio</button>
                    </a>
                  </div>
                </div>
              </div>
            </form>

            <hr>

            <div class="container m-3">
              <div class="row">
                <div class="col">
                  <div class="row mt-3">
                   <div class="col text-center">
                     <a href="{{ route('restaurant.create') }}">
                       <button type="button" class="btn btn-info">Registrar Nuevo Restaurant</button>
                     </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
   </div>

      <!-- Modal -->
      <div class="modal fade" id="ventanaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Seleccione el área de la imágen final</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-md-8">
                       <img class="imagen_izquierda_modal" id="imagen_original_visualizada" src="" alt="">
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                       <div class="preview_imagen_recortada"></div>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                 <button id="crop" type="button" class="btn btn-primary">Recortar</button>
              </div>
           </div>
        </div>
     </div>
     <!-- Modal -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Cropper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.js" integrity="sha512-1bpfZkKJ+WlmJN/I2KLm79dSiuOos0ymwL5IovsUVARyzcaf9rSXsVO2Cdg4qlKNOQXh8fd1d0vKeY9Ru3bQDw==" crossorigin="anonymous"></script>

    {{-- Data Tables JS --}}
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    


    <script>
      $(document).ready(function() {
        $('#tabla_listado_restaurantes').DataTable();

        // Escucha el evento que surge cuando el source de la imagen cambia:
        let img = document.querySelector("#imagen_final"),
        observer = new MutationObserver((changes) => {
          changes.forEach(change => {
              if(change.attributeName.includes('src')){
                document.querySelector('#imagen1').value = img.src;
              }
          });
        });
        observer.observe(img, {attributes : true});

      });



      // CROPPER
      var bs_modal = $('#ventanaModal');
        var image = document.getElementById('imagen_original_visualizada');
        var cropper, reader, file;

        $('body').on("change", "#original_image", function (e) {
          var files = e.target.files;
          var done = function(url){
              image.src = url;
              bs_modal.modal('show');
          };

          if (files && files.length > 0) {
              file = files[0];

              if (URL) {
                done(URL.createObjectURL(file));
              } else if(FileReader) {
                reader = new FileReader();
                reader.onload = function(e){
                    done(reader.result);
                };
                reader.readAsDataURL(file);
              }
          }
        });

        bs_modal.on('shown.bs.modal', function() {
          cropper = new Cropper(image, {
              aspectRatio: 16/9,
              viewmode: 3,
              preview: ".preview_imagen_recortada",
          });
        }).on('hidden.bs.modal', function() {
          document.getElementById("original_image").value = "";
          cropper.destroy();
          cropper = null;
        });

        $('#crop').click(function() {
          canvas = cropper.getCroppedCanvas({
              width: 1280,
              height: 720
          })

          canvas.toBlob(function(blob) {
              url = URL.createObjectURL(blob);
              var reader = new FileReader();
              reader.readAsDataURL(blob);
              reader.onloadend = function() {
                var base64data = reader.result;
                document.getElementById('imagen_final').src = base64data;
                bs_modal.modal('hide');
              };
          })
        });


    
    </script>

</body>
</html>