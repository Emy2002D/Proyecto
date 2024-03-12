<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_sesion.css') }}">

    <title> SESION </title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">

            


           <div class="col-xl-7 col-lg-12 d-flex">

                <div class="container align-self-center p-6">

                    <h1 class="font-weight-bold mb-3"> INGRESA A TU SESION </h1>

                     
                      

                    <form method="POST" action="{{ route('LOG') }}">
                        @csrf
                    
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">CORREO <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        

                        <br>    

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña" required>
                        </div>
                        

                        

                        <br>
                        <br>    

                        <div class="form-group mb-5">

                        
                        </div>

                        <style>
                             
                            a {
                                display: inline-block;
                                padding: 10px 20px;
                                text-decoration: none;
                                background-color: #0d6464;  
                                color: white; 
                                border-radius: 5px;  
                                transition: background-color 0.3s ease;  
                            }
                        
                            
                            a:hover {
                                background-color: rgb(19, 160, 173);
                            }
                        </style>
                        
                        <a href="{{ route('welcome') }}"> INICIO </a>

                        <style>
                             
                            a {
                                display: inline-block;
                                padding: 10px 20px;
                                text-decoration: none;
                                background-color: #0d6464;  
                                color: white; 
                                border-radius: 5px;  
                                transition: background-color 0.3s ease;  
                            }
                        
                            
                            a:hover {
                                background-color: rgb(19, 160, 173);
                            }
                        </style>

                        
                        <a href="{{ route('usuario') }}"> REGISTRATE </a>


                        <style>
                             
                            a {
                                display: inline-block;
                                padding: 10px 20px;
                                text-decoration: none;
                                background-color: #0d6464;  
                                color: white; 
                                border-radius: 5px;  
                                transition: background-color 0.3s ease;  
                            }
                        
                            
                            a:hover {
                                background-color: rgb(19, 160, 173);
                            }
                        </style>

                         

                                 <a href="{{ route('index') }}"> SESION </a>




                        <br>
                        <br>

                        

                        <br>    
                        <br>    
                        
                    </form>
                    <small class="d-inline-block text-muted mt-5"> TODOS LOS DERECHOS RESERVADOS DESMARAÑADOG | © 2023 </small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>