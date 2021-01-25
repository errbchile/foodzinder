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
                              <div class="card-header">AGREGAR NUEVO PRODUCTO:</div>
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
                                    
                                    <input @change="onImageChange" type="file" name="files[]" id="file-selector" class="form-control"/>
                                 </div>
                                 <div class="input-group mb-3">
                                    <input @click="AddNewProductoEntrante" class="btn btn-success btn-sm" type="submit" value="Registrar Producto">
                                 </div>



                              </div>
                           </div>
                        </div>
                      </div>
                   </div>
                </div>

                <div class="tab-pane fade" id="sopas" role="tabpanel" aria-labelledby="sopas-tab">Sopas content</div>

                <div class="tab-pane fade" id="fritos" role="tabpanel" aria-labelledby="fritos-tab">fritos content</div>

                <div class="tab-pane fade" id="carnes" role="tabpanel" aria-labelledby="carnes-tab">carnes content</div>

                <div class="tab-pane fade" id="pescado" role="tabpanel" aria-labelledby="pescado-tab">pescado content</div>

                <div class="tab-pane fade" id="pastas" role="tabpanel" aria-labelledby="pastas-tab">pastas content</div>

                <div class="tab-pane fade" id="postres" role="tabpanel" aria-labelledby="postres-tab">postres content</div>

                <div class="tab-pane fade" id="bebidas" role="tabpanel" aria-labelledby="bebidas-tab">bebidas content</div>

              </div>{{-- END CONTENIDO DE LAS PESTAÑAS --}}
          </div>
       </div>
    </div>


@endsection

@section('customJS')
   <script>

      const restaurante = {!! json_decode($restaurante) !!};
      const entrantes = {!! json_decode($entrantes) !!};
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      console.log(entrantes);
      const app = new Vue({
         el: '#app',
         data: {
            restaurante:  restaurante,
            categorias: {
               entrantes: entrantes,
               sopas: [],
               fritos: [],
               carnes: [],
               pescado: [],
               pastas: [],
               postres: [],
               bebidas: []
            },
            addNewCardEntrante: false,
            newEntranteImageUrl: '',
            newEntranteImageFile: {},
            newEntranteNombre: '',
            newEntrantePrecio: ''
         },
         methods: {
            onImageChange(e) {
               let files = e.target.files || e.dataTransfer.files;
               if (!files.length)
               return;
               this.createImage(files[0]);
               this.newEntranteImageFile = files[0];
               
            },

            createImage(file) {
               let image = new Image();
               let reader = new FileReader();
               let vm = this;

               reader.onload = (e) => {
                  vm.newEntranteImageUrl = e.target.result;
               };
               reader.readAsDataURL(file);
            },

            removeImage: function (e) {
               this.newEntranteImageUrl = '';
            },

            AddNewProductoEntrante: function(){
               if (this.newEntranteImageFile === '' || this.newEntranteNombre === '' || this.newEntrantePrecio === '') {
                  return;
               }

               let form = new FormData();
               form.append('nombre', app.newEntranteNombre);
               form.append('precio', app.newEntrantePrecio);
               form.append('restauranteId', app.restaurante.id);
               form.append('file', app.newEntranteImageFile);
               console.log(form);
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
            }
         }
      });
   </script>
@endsection

