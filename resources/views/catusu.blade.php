
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATÁLOGO</title>

     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}">

</head> 
<body>
    <form action="post.php"method="post"name="frm"></form>
    

<header class="header">

    <a href="" class="logo">
        <img src="images/log.png" alt="">
    </a>

     

   

</header>



<section class="home" id="home">

    <div class="content">

        <h3> DESMARAÑADOG </h3>

        
        

       
        <a href="{{ route('index') }}" class="btn"> INICIO </a>
        
    </P>
  </section> 


  <section class="about" id="about">


   
</section>




<section class="products" id="products">


    <h1 class="heading"> ¡COMPRA YA ! </h1>

    <div class="box-container">

        <div class="box"> <div class="icons">
            <a href="{{ route('compra') }}" class="fas fa-shopping-cart"></a>
        </div>

        

             
            <div class="image">
                <img src="images/comida.jpeg" alt="">
            </div>
            <div class="content">
                <h3> UN HUESITO PAL FIDO </h3>

                <h1> Comida para perro premium  </h1>
                 
                <div class="price"> $120.00 </div>
            </div>
        </div>



        <div class="box"> <div class="icons">
            <a href="{{ route('compra') }}" class="fas fa-shopping-cart"></a>
        </div>

        

             
            <div class="image">
                <img src="images/medicina.png" alt="">
            </div>
            <div class="content">
                <h3> ANTI-PARACITANTE </h3>
                 
                <div class="price"> $180.00 </div>
            </div>
        </div>




        <div class="box"> <div class="icons">
            <a href="{{ route('compra') }}" class="fas fa-shopping-cart"></a>
        </div>

        

             
            <div class="image">
                <img src="images/shapoo.png" alt="">
            </div>
            <div class="content">
                <h3> SHAMPOO ANTI-PULGAS </h3>
                 
                <div class="price"> $300.00 </div>
            </div>
        </div>



        <div class="box"> <div class="icons">
            <a href="{{ route('compra') }}" class="fas fa-shopping-cart"></a>
        </div>

        

             
            <div class="image">
                <img src="images/pelota.png" alt="">
            </div>
            <div class="content">
                <h3> PELOTA PARA MORDEDURAS </h3>
                 
                <div class="price"> $90.00 </div>
            </div>
        </div>


        <div class="box"> <div class="icons">
            <a href="{{ route('compra') }}" class="fas fa-shopping-cart"></a>
        </div>

        

             
            <div class="image">
                <img src="images/lipiador.png" alt="">
            </div>
            <div class="content">
                <h3> LIMPIADOR DE SUPERFICISS </h3>
                 
                <div class="price"> $220.00 </div>
            </div>
        </div>



        

    </div>

</section>

</body>
</html>

