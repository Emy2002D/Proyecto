
<!DOCTYPE html>
<html lang="en">



<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JALAPP </title>

       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_index.css') }}">


</head> 


<body>
    <form action="post.php"method="post"name="frm"></form>
    

<header class="header">

    <a href="sesion_admin.html" class="logo">
        <img src="images/log.png" alt="">
    </a>

    <nav class="navbar">
       
        

        <a href="{{ route('catusu') }}"> PRODUCTOS </a>

      

        <a href="{{ route('welcome') }}"> SALIR </a>


         
       

    </nav>


    <div class="icons">

        <div class="fas fa-bars" id="menu-btn"></div>
    </div>


    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    

</header>


<section class="home" id="home">

    <div class="content">
        <h3> JALAPP </h3>
        <p> "VEN Y PRUEBA NUESTRO CHILE , SE QUE TE VA A ENCANTAR" </p>
        <a href="#" class="btn"> CONOCE MAS  </a>
        
    </div>

</section>


 

<section class="contact" id="contact">

    <h1 class="heading"> <span>ENCUÉNTRANOS </span></h1>

    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1710190455019!6m8!1m7!1sdlrSDVfoss55sdbU9R8U7w!2m2!1d19.3815143801572!2d-99.09075299824246!3f101.82815795565102!4f0.16156078755554404!5f0.7820865974627469" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>

 

<section class="footer">

     

    <div class="links">


      <a href="{{ route('welcome') }}"> INICIO </a>

        <a href="{{ route('catusu') }}"> PRODUCTOS </a>

    </div>

     

</section>

 
<script src="js/script.js"></script>



<script src="js/script.js"></script>

 

</body>
</html>

