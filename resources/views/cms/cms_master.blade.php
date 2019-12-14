<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script>
      var BASE_URL = "{{url('')}}/";
    </script>
   
    <title>Le Surf Admin Panel</title>
  </head>
  <body>
<header>  
   <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('cms/dashboard')}}">Le Surf <img src="{{asset('assets/images/logo.png')}}" 
    style="width:50px;height: 30px" class="img-fluid mx-2"
    alt="logo"> Admin Panel</a>
    <ul class="nav px-3">
      <li class="nav-item">
        <a target="_blank" class="nav-link text-white" href="{{url('user/logout')}}"><i class="fas fa-undo mx-2"></i>Back to Site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('user/logout')}}"><i class="fas fa-sign-out-alt mx-2"></i>Log out</a>
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
            <a class="nav-link" href="{{url('cms/dashboard')}}">
              <i class="fas fa-chart-line mr-2"></i>Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/menu')}}">
            <i class="fas fa-bars mr-2"></i>Menu
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/content')}}">
            <i class="fas fa-server mr-2"></i>Content
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/categories')}}">
            <i class="fas fa-puzzle-piece mr-2"></i>Categories
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/products')}}">
            <i class="fab fa-product-hunt mr-2"></i>Products
            </a>         
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/orders')}}">
            <i class="fas fa-shopping-bag mr-2"></i>Orders
            </a>         
          </li>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{url('cms/users')}}">
            <i class="fas fa-users mr-2"></i>Users
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script src="{{asset ('js/script.js')}}"></script>    

    @if (Session::has('sm'))
    <script>
        toastr.options.positionClass = 'toast-bottom-full-width';
        toastr.success("{{Session::get('sm')}}");
       </script>
       @endif
    <script>
      $('#content_article').summernote({
          height: 300,                 // set editor height

    });
    </script>   
  </body>
</html>