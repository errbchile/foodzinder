<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Lista de Usuarios</title>
   </head>
   <body>
      <div class="container fluid">
         <div class="row">
            <div class="col-md-12">
               <h3>Actualizar Usuario</h3>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <form action="{{ route('users.update') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $user->id }}">
                  <input readonly type="text" value="{{ $user->name }}">
                  <input readonly type="text" value="{{ $user->email }}">
                  <select name="profile">
                     <option value="" disabled>-- Seleccione --</option>
                     <option {{ ($user->profile === 1) ? 'selected' : "" }} value="1">Administrador</option>
                     <option {{ ($user->profile === 2) ? 'selected' : "" }} value="2">Usuario</option>
                  </select>
                  <input type="submit" value="Actualizar">
               </form>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <a href="{{ route('users.index') }}">
                  <button class="btn btn-danger">Atrás</button>
               </a>
               <a href="{{ url('/') }}">
                  <button class="btn btn-info">Home</button>
               </a>
            </div>
         </div>
      </div>
      



         {{-- <!-- Modal -->
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
         </div> --}}

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </body>
</html>