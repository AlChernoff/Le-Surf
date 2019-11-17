<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script>
      var BASE_URL = "{{url('')}}/";
    </script>
   
    <title>Le Surf Admin Panel</title>
  </head>
  <body>
<header>
   <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('cms/dashboard')}}">Le Surf Adfmin Panel</a>
<ul class="nav px-3">
    <li class="nav-item">
      <a target="_blank" class="nav-link text-white" href="{{url('user/logout')}}">Back to Site</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{url('user/logout')}}">Log out</a>
    </li>
  </ul>
</nav>
</header>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/dahboard')}}">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/menu')}}">
            Menu
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/content')}}">
            Content
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/categories')}}">
            Categories
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/products')}}">
            Products
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/orders')}}">
            Orders
            </a>         
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-min-h">
    @yield('content')
    </main>
  </div>
</div>

<footer class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col p-3">
                <p class="text-center">Le Surf &copy; {{date('Y')}} </p>
            </div> 
        </div> 
    </div>         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset ('js/script.js')}}"></script>    

    @if (Session::has('successMessage'))
    <script>
        toastr.options.positionClass = 'toast-top-full-width';
        toastr.success("{{Session::get('successMessage')}}");
       </script>
       @endif
  </body>
</html>