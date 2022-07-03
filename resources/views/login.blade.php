<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{ asset('bootstrap5/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap5/bootstrap.bundle.min.js') }}"></script>
      <title>Login</title>
   </head>
      <body class="text-center" cz-shortcut-listen="true">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-4">
                  <main class="form-signin w-100 m-auto">
                    <br>
                    <h3>CSM Login Page</h3>
                     <form method="POST">
                        @csrf
                        <img class="mb-4" src="{{ asset('img/csmlogo.png') }}" alt="" width="92" height="77">
                        <h1 class="h3 mb-5 fw-normal">Please sign in</h1>
                        <div class="form-floating">
                           <input type="text" class="form-control" name="userName" id="userName" placeholder="User name/Email"><br>
                           <label for="userName">User name/Email</label>
                        </div>
                        <div class="form-floating">
                           <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Password"><br>
                           <label for="userPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit"> Sign in </button>
                        
                        <p class="mt-5 mb-13 text-muted"><?php echo Date("Y")?></p>
                        <small style="color: hotpink;">Developed In Laravel</small><br>
                        <small style="color: hotpink;">Developed By <b>Shuvadeep</b></small><br>
                        <small style="color: hotpink;"><b>Shuvadeep</b></small>
                        <small style="color: hotpink;">worked in project - smart city bhubaneswar</small>
                     </form>
                  </main>
               </div>
            </div>
         </div>
   </body>
</html>