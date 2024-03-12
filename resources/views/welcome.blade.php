
<!DOCTYPE html>
<html lang="en">



<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desmarañadog</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_index.css') }}">


</head> 


<body>
    <form action="post.php"method="post"name="frm"></form>
    

<header class="header">

    <a href="{{ route('admin') }}" class="logo">

        <img src="images/log.png" alt="">
    </a>

    <nav class="navbar">
         

        <a href="{{ route('catalogo') }}"> PRODUCTOS </a>

       

        <a href="{{ route('sesion') }}"> SESION </a>
       

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
        <h3> DESMARAÑADOG </h3>
        <p> CONSIENTE A TU PELUDITO AMIGO </p>
        <a href="#" class="btn"> CONOCE MAS  </a>
        
    </div>

</section>


 

<section class="contact" id="contact">

    <h1 class="heading"> <span>ENCUÉNTRANOS </span></h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!4v1700601488806!6m8!1m7!1suSHsZqSJlBEkV-vY2EbzTA!2m2!1d19.39184093838673!2d-99.14366648686803!3f267.0342302264612!4f-8.677658932596756!5f1.52841521987171" width="1400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

</section>

 

<section class="footer">

     

    <div class="links">
        <a href="#home">inicio</a>

        <a href="{{ route('catalogo') }}"> PRODUCTOS </a>

         

        <a href="{{ route('sesion') }}"> SESION </a>
       
     

    </div>

     

</section>

 
<script src="js/script.js"></script>



<script src="js/script.js"></script>

 

</body>
</html>

