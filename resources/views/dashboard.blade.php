<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{ asset('bootstrap5/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap5/bootstrap.bundle.min.js') }}"></script>
      <title>Dashboard - {{ session('UserSession.vchUname') }}</title>
   </head>
   <body>
   <div class="bg-light p-5 rounded">
  
    <h1>Hi - {{ session('UserSession.vchUname') }} !</h1>
    <p class="lead">Jr Software Engineer.</p>
    <a class="btn btn-lg btn-primary" href="{{ '/logout' }}" role="button">Logout</a>
  </div>
   </body>
</html>