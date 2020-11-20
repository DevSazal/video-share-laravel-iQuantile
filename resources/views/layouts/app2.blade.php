<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <title>@yield('title') - Laravel v8.12 </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito';
                background-color: #48d8a9;
            }
            .w-5{
              display: none!important;
            }
            p.text-sm.text-gray-700.leading-5 {
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>


      <div class="container">


        <div class="jumbotron text-center">
          <h1>Welcome</h1>
          <p>{{ Auth::user()->name }} <span style="color: red">({{ Auth::user()->role_type }})</span> </p>
        </div>



        <div class="row">
          <div class="col-md-3">
              <div class="list-group">
                  <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action"><i class="fas fa-arrow-alt-circle-right"></i>
                    URL 1
                  </a>
                  <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action"><i class="fas fa-arrow-alt-circle-right"></i>
                    URL 2
                  </a>
              </div>
              <br>
              <br>
              <div class="">
                <a href="{{ url('/logout') }}"> @ Logout</a>
              </div>
              <div class="">
                <a href="{{ url('/') }}"> ~ Go to Home Page</a>
              </div>
          </div>
          <div class="col-sm-9">
            @yield('content2')
          </div>

        </div>


      </div>



    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
