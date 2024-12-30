<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('seo')
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="{{asset('sitioWeb/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('sitioWeb/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img width="100px" height="100px" src="{{asset('imagen/'.$empresa->logo)}}" alt="{{$empresa->title}}">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="#nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servicio">Servicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contacto</a>
            </li>
           
          
          </ul>
      
        </div>
      </div>
    </nav>
  </div>

  
  <main>
    @yield('content')
  </main>
  <div id="contacto">
    <div class="container">
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="{{asset('imagen/'.$empresa->logo)}}" alt="{{$empresa->title}}" width="24" height="19">
            <small class="d-block mb-3 text-muted">&copy; 2024</small>
          </div>
          <div class="col-4 col-md">
            <h5>Redes</h5>
            <ul class="list-unstyled text-small">
              @foreach ($redes as $red)
                  <li class="mb-1"><a target="_blank" class="link-secondary text-decoration-none" href="{{$red->link}}"> <i class="{{$red->icon}}"></i> {{$red->title}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-4 col-md">
            <h5>Contacto</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->correo}}</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->numero}}</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->direccion}}</a></li>
            </ul>
          </div>
          <div class="col-4 col-md">
            <h5>Georeferencia</h5>
            <iframe src="{{$empresa->georeferencia}}" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{asset('sitioWeb/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>