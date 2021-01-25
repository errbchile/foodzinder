@extends('categorias.layout')

@section('categoria-content')
    <div class="container mt-4">
       <div class="row justify-content-center">
          <h3>Restaurante:</h3>
       </div>
       <div class="row mt-2">
          <div class="col">
            <div class="form-row">
               <div class="form-group col-md-4">
                 <label for="nombre">Nombre</label>
               <input disabled name="nombre" type="text" :value="restaurante.nombre" class="form-control">
               </div>
               <div class="form-group col-md-4">
                  <label for="direccion">Dirección</label>
                  <input disabled name="direccion" type="text" class="form-control" :value="restaurante.direccion">
               </div>
               <div class="form-group col-md-4">
                  <label for="telefono">Teléfono (+34)</label>
                  <input disabled :value="restaurante.telefono" name="telefono" type="text" class="form-control" id="telefono">
               </div>
            </div>
          </div>
       </div>

       <div class="row">
          <div class="col text-right">
             <a href="{{ url('/') }}">
                <button class="btn btn-info btn-sm">Página de inicio</button>
             </a>
          </div>
       </div>

       <div class="row">
          <div class="col text-center">
             <h3>Categorias:</h3>
          </div>
       </div>

       <div class="row">
          <div class="col">
             {{-- START-PESTAÑAS --}}
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="entrantes-tab" data-toggle="tab" href="#entrantes" role="tab" aria-controls="entrantes" aria-selected="true">Entrantes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sopas-tab" data-toggle="tab" href="#sopas" role="tab" aria-controls="sopas" aria-selected="false">Sopas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="fritos-tab" data-toggle="tab" href="#fritos" role="tab" aria-controls="fritos" aria-selected="false">Fritos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="carnes-tab" data-toggle="tab" href="#carnes" role="tab" aria-controls="carnes" aria-selected="false">carnes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pescado-tab" data-toggle="tab" href="#pescado" role="tab" aria-controls="pescado" aria-selected="false">pescado</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pastas-tab" data-toggle="tab" href="#pastas" role="tab" aria-controls="pastas" aria-selected="false">pastas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="postres-tab" data-toggle="tab" href="#postres" role="tab" aria-controls="postres" aria-selected="false">postres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="bebidas-tab" data-toggle="tab" href="#bebidas" role="tab" aria-controls="bebidas" aria-selected="false">bebidas</a>
                </li>
              </ul>{{-- END-PESTAÑAS --}}
              {{-- START CONTENIDO DE LAS PESTAÑAS --}}
              <div class="tab-content" id="myTabContent">
                 {{-- START ENTRANTES --}}
                <div class="tab-pane fade show active" id="entrantes" role="tabpanel" aria-labelledby="entrantes-tab">
                   <div class="container-fluid mt-3">
                      <div class="row">

                         <div v-for="(producto, index) in categorias.entrantes" :key="producto.id" class="col-md-3 d-flex">
                           <div  class="card" style="width: 18rem;">
                              <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                              <div class="card-body">
                                 <h5 class="card-title">@{{ producto.nombre }}</h5>
                                 <p class="card-text">@{{ producto.precio }}€</p>
                                 <a @click="eliminarEntrante(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                              </div>
                           </div>
                         </div>


                      </div>
                      
                      <div class="row">
                        <div v-if="!addNewCardEntrante" class="col text-center">
                           <div @click="addNewCardEntrante = !addNewCardEntrante" class="card" style="width: 18rem;">
                              <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                           </div>
                        </div>
                        <div v-else="addNewCardEntrante" class="col text-center">
                           <div class="card" style="width: 18rem;">
                              <div class="card-header">AGREGAR NUEVO PRODUCTO (Entrante):</div>
                              <div class="card-body">

                                 <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="nombre">Nombre</span>
                                    </div>
                                    <input v-model="newEntranteNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                 </div>
                                 <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="precio">Precio</span>
                                    </div>
                                    <input v-model="newEntrantePrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                 </div>
                        
                                 <div class="input-group mb-3">
                                    
                                    <input @change="onImageChangeEntrante" type="file" name="files[]" id="file-selector" class="form-control"/>
                                 </div>
                                 <div class="input-group mb-3">
                                    <input @click="AddNewProductoEntrante" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                 </div>



                              </div>
                           </div>
                        </div>
                      </div>
                   </div>
                </div>{{-- END ENTRANTES --}}
                {{-- START SOPAS --}}
                <div class="tab-pane fade" id="sopas" role="tabpanel" aria-labelledby="sopas-tab">
                   
               
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.sopas" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarSopa(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardSopa" class="col text-center">
                          <div @click="addNewCardSopa = !addNewCardSopa" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardSopa" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Sopa):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newSopaNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newSopaPrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangeSopa" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoSopa" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               
               </div>{{-- END SOPAS --}}
                {{-- START fritos --}}
                <div class="tab-pane fade" id="fritos" role="tabpanel" aria-labelledby="fritos-tab">
                   
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.fritos" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarFrito(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardFrito" class="col text-center">
                          <div @click="addNewCardFrito = !addNewCardFrito" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardFrito" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Frito):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newFritoNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newFritoPrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangeFrito" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoFrito" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               </div>{{-- END fritos --}}
               {{-- START carnes --}}
                <div class="tab-pane fade" id="carnes" role="tabpanel" aria-labelledby="carnes-tab">
                   
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.carnes" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarCarne(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardCarne" class="col text-center">
                          <div @click="addNewCardCarne = !addNewCardCarne" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardCarne" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Carne):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newCarneNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newCarnePrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangeCarne" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoCarne" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               
               </div>{{-- END carnes --}}
               {{-- START pescado --}}
                <div class="tab-pane fade" id="pescado" role="tabpanel" aria-labelledby="pescado-tab">
                   
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.pescados" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarPescado(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardPescado" class="col text-center">
                          <div @click="addNewCardPescado = !addNewCardPescado" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardPescado" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Pescado):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newPescadoNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newPescadoPrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangePescado" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoPescado" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               
               </div>{{-- END pescado --}}
               {{-- START pastas --}}
                <div class="tab-pane fade" id="pastas" role="tabpanel" aria-labelledby="pastas-tab">
                   
               
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.pastas" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarPasta(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardPasta" class="col text-center">
                          <div @click="addNewCardPasta = !addNewCardPasta" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardPasta" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Pasta):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newPastaNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newPastaPrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangePasta" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoPasta" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               
               
               </div>{{-- END pastas --}}
               {{-- START postres --}}
                <div class="tab-pane fade" id="postres" role="tabpanel" aria-labelledby="postres-tab">
                   
               
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.postres" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarPostre(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardPostre" class="col text-center">
                          <div @click="addNewCardPostre = !addNewCardPostre" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardPostre" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Postre):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newPostreNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newPostrePrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangePostre" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoPostre" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               
               </div>{{-- END postres --}}
               {{-- START bebidas --}}
                <div class="tab-pane fade" id="bebidas" role="tabpanel" aria-labelledby="bebidas-tab">
                   
                
                  <div class="container-fluid mt-3">
                     <div class="row">

                        <div v-for="(producto, index) in categorias.bebidas" :key="producto.id" class="col-md-3 d-flex">
                          <div  class="card" style="width: 18rem;">
                             <img class="card-img-top" :src="producto.imagen" alt="Imagen de ejemplo">
                             <div class="card-body">
                                <h5 class="card-title">@{{ producto.nombre }}</h5>
                                <p class="card-text">@{{ producto.precio }}€</p>
                                <a @click="eliminarBebida(producto.id)" href="#" class="btn btn-danger btn-sm">Borrar</a>
                             </div>
                          </div>
                        </div>


                     </div>
                     
                     <div class="row">
                       <div v-if="!addNewCardBebida" class="col text-center">
                          <div @click="addNewCardBebida = !addNewCardBebida" class="card" style="width: 18rem;">
                             <i class="fas fa-plus-circle" style="font-size: 10vw"></i>
                          </div>
                       </div>
                       <div v-else="addNewCardBebida" class="col text-center">
                          <div class="card" style="width: 18rem;">
                             <div class="card-header">AGREGAR NUEVO PRODUCTO (Bebida):</div>
                             <div class="card-body">

                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="nombre">Nombre</span>
                                   </div>
                                   <input v-model="newBebidaNombre" type="text" class="form-control" aria-label="nombre" aria-describedby="nombre">

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text" id="precio">Precio</span>
                                   </div>
                                   <input v-model="newBebidaPrecio" type="number" class="form-control" aria-label="precio" aria-describedby="precio">
                                </div>
                       
                                <div class="input-group mb-3">
                                   
                                   <input @change="onImageChangeBebida" type="file" name="files[]" id="file-selector" class="form-control"/>
                                </div>
                                <div class="input-group mb-3">
                                   <input @click="AddNewProductoBebida" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                </div>



                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
               
               
               </div>{{-- END bebidas --}}

              </div>{{-- END CONTENIDO DE LAS PESTAÑAS --}}
          </div>
       </div>
    </div>

@endsection

@section('customJS')
   <script>

      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      const restaurante = {!! json_decode($restaurante) !!};
      const entrantes = {!! json_decode($entrantes) !!};
      const sopas = {!! json_decode($sopas) !!};
      const fritos = {!! json_decode($fritos) !!};
      const carnes = {!! json_decode($carnes) !!};
      const pescados = {!! json_decode($pescados) !!};
      const pastas = {!! json_decode($pastas) !!};
      const postres = {!! json_decode($postres) !!};
      const bebidas = {!! json_decode($bebidas) !!};

      const app = new Vue({
         el: '#app',
         data: {
            restaurante:  restaurante,
            categorias: {
               entrantes: entrantes,
               sopas: sopas,
               fritos: fritos,
               carnes: carnes,
               pescados: pescados,
               pastas: pastas,
               postres: postres,
               bebidas: bebidas
            },
            addNewCardEntrante: false,
            newEntranteImageFile: {},
            newEntranteNombre: '',
            newEntrantePrecio: '',
            
            addNewCardSopa: false,
            newSopaImageFile: {},
            newSopaNombre: '',
            newSopaPrecio: '',
            
            addNewCardFrito: false,
            newFritoImageFile: {},
            newFritoNombre: '',
            newFritoPrecio: '',
            
            addNewCardCarne: false,
            newCarneImageFile: {},
            newCarneNombre: '',
            newCarnePrecio: '',
            
            addNewCardPescado: false,
            newPescadoImageFile: {},
            newPescadoNombre: '',
            newPescadoPrecio: '',
            
            addNewCardPasta: false,
            newPastaImageFile: {},
            newPastaNombre: '',
            newPastaPrecio: '',
            
            addNewCardPostre: false,
            newPostreImageFile: {},
            newPostreNombre: '',
            newPostrePrecio: '',
            
            addNewCardBebida: false,
            newBebidaImageFile: {},
            newBebidaNombre: '',
            newBebidaPrecio: '',
         },
         methods: {
            onImageChangeEntrante(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newEntranteImageFile = files[0];
               
            },
            onImageChangeSopa(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newSopaImageFile = files[0];
               
            },
            onImageChangeFrito(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newFritoImageFile = files[0];
               
            },
            onImageChangeCarne(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newCarneImageFile = files[0];
               
            },
            onImageChangePescado(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newPescadoImageFile = files[0];
               
            },
            onImageChangePasta(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newPastaImageFile = files[0];
               
            },
            onImageChangePostre(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newPostreImageFile = files[0];
               
            },
            onImageChangeBebida(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.newBebidaImageFile = files[0];
               
            },
            // START ENTRANTES
            AddNewProductoEntrante: function(){
               if (this.newEntranteImageFile === {} || this.newEntranteNombre === '' || this.newEntrantePrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newEntranteNombre);
               form.append('precio', app.newEntrantePrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newEntranteImageFile);
               
               fetch("/categoria/AddNewProductoEntrante", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoEntrante(data);
                 });

               this.newEntranteNombre = '';
               this.newEntrantePrecio = '';
               this.newEntranteImageFile = '';
               this.addNewCardEntrante = false;
            },

            showNewProductoEntrante: function(producto){
               this.categorias.entrantes.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarEntrante: function(id){
               // eliminar en interfaz:
               this.categorias.entrantes = this.categorias.entrantes.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarEntrante/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END ENTRANTES
            // START SOPA
            AddNewProductoSopa: function(){
               if (this.newSopaImageFile === {} || this.newSopaNombre === '' || this.newSopaPrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newSopaNombre);
               form.append('precio', app.newSopaPrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newSopaImageFile);
               
               fetch("/categoria/AddNewProductoSopa", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoSopa(data);
                 });

               this.newSopaNombre = '';
               this.newSopaPrecio = '';
               this.newSopaImageFile = '';
               this.addNewCardSopa = false;
            },

            showNewProductoSopa: function(producto){
               this.categorias.sopas.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarSopa: function(id){
               // eliminar en interfaz:
               this.categorias.sopas = this.categorias.sopas.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarSopa/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END SOPA
            // START FRITOS
            AddNewProductoFrito: function(){
               if (this.newFritoImageFile === {} || this.newFritoNombre === '' || this.newFritoPrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newFritoNombre);
               form.append('precio', app.newFritoPrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newFritoImageFile);
               
               fetch("/categoria/AddNewProductoFrito", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoFrito(data);
                 });

               this.newFritoNombre = '';
               this.newFritoPrecio = '';
               this.newFritoImageFile = '';
               this.addNewCardFrito = false;
            },

            showNewProductoFrito: function(producto){
               this.categorias.fritos.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarFrito: function(id){
               // eliminar en interfaz:
               this.categorias.fritos = this.categorias.fritos.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarFrito/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END FRITOS
            // START CARNES
            AddNewProductoCarne: function(){
               if (this.newCarneImageFile === {} || this.newCarneNombre === '' || this.newCarnePrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newCarneNombre);
               form.append('precio', app.newCarnePrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newCarneImageFile);
               
               fetch("/categoria/AddNewProductoCarne", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoCarne(data);
                 });

               this.newCarneNombre = '';
               this.newCarnePrecio = '';
               this.newCarneImageFile = '';
               this.addNewCardCarne = false;
            },

            showNewProductoCarne: function(producto){
               this.categorias.carnes.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarCarne: function(id){
               // eliminar en interfaz:
               this.categorias.carnes = this.categorias.carnes.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarCarne/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END CARNES
            // START PESCADOS
            AddNewProductoPescado: function(){
               if (this.newPescadoImageFile === {} || this.newPescadoNombre === '' || this.newPescadoPrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newPescadoNombre);
               form.append('precio', app.newPescadoPrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newPescadoImageFile);
               
               fetch("/categoria/AddNewProductoPescado", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoPescado(data);
                 });

               this.newPescadoNombre = '';
               this.newPescadoPrecio = '';
               this.newPescadoImageFile = '';
               this.addNewCardPescado = false;
            },

            showNewProductoPescado: function(producto){
               this.categorias.pescados.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarPescado: function(id){
               // eliminar en interfaz:
               this.categorias.pescados = this.categorias.pescados.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarPescado/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END PESCADOS
            // START PASTAS
            AddNewProductoPasta: function(){
               if (this.newPastaImageFile === {} || this.newPastaNombre === '' || this.newPastaPrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newPastaNombre);
               form.append('precio', app.newPastaPrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newPastaImageFile);

               fetch("/categoria/AddNewProductoPasta", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoPasta(data);
                 });

               this.newPastaNombre = '';
               this.newPastaPrecio = '';
               this.newPastaImageFile = '';
               this.addNewCardPasta = false;
            },

            showNewProductoPasta: function(producto){
               this.categorias.pastas.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarPasta: function(id){
               // eliminar en interfaz:
               this.categorias.pastas = this.categorias.pastas.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarPasta/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END PASTAS
            // START POSTRES
            AddNewProductoPostre: function(){
               if (this.newPostreImageFile === {} || this.newPostreNombre === '' || this.newPostrePrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newPostreNombre);
               form.append('precio', app.newPostrePrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newPostreImageFile);
               
               fetch("/categoria/AddNewProductoPostre", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoPostre(data);
                 });

               this.newPostreNombre = '';
               this.newPostrePrecio = '';
               this.newPostreImageFile = '';
               this.addNewCardPostre = false;
            },

            showNewProductoPostre: function(producto){
               this.categorias.postres.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarPostre: function(id){
               // eliminar en interfaz:
               this.categorias.postres = this.categorias.postres.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarPostre/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END POSTRES
            // START BEBIDAS
            AddNewProductoBebida: function(){
               if (this.newBebidaImageFile === {} || this.newBebidaNombre === '' || this.newBebidaPrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newBebidaNombre);
               form.append('precio', app.newBebidaPrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newBebidaImageFile);
               
               fetch("/categoria/AddNewProductoBebida", {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "post",
                  credentials: "same-origin",
                  body: form
               }).then(response => response.json())
                 .then(data => {
                     app.showNewProductoBebida(data);
                 });

               this.newBebidaNombre = '';
               this.newBebidaPrecio = '';
               this.newBebidaImageFile = '';
               this.addNewCardBebida = false;
            },

            showNewProductoBebida: function(producto){
               this.categorias.bebidas.push({
                  id: producto.id,
                  nombre: producto.nombre,
                  precio: producto.precio,
                  imagen: producto.imagen
               })
            },

            eliminarBebida: function(id){
               // eliminar en interfaz:
               this.categorias.bebidas = this.categorias.bebidas.filter(producto => producto.id !== id);

               // eliminar en la base de datos:
               fetch(`/categoria/eliminarBebida/${id}`, {
                  headers: {
                     "Accept": "application/json",
                     "X-Requested-With": "XMLHttpRequest",
                     "X-CSRF-Token": token
                  },
                  method: "delete",
               }).then(response => response.json())
                 .then(data => console.log(data));
            },
            // END BEBIDAS
         }
      });
   </script>
@endsection

