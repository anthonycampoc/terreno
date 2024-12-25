@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de redes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        
                <a class="btn btn-outline-success" href="/createService">Ingresar</a>
                <a class="btn btn-outline-danger" href="/serviciosD">Desactivados</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Titulo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Imagen</th>
              <th scope="col">Contacto</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
    
          
          </tbody>
        </table>
      </div>
</div>

@endsection