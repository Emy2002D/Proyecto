<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>

     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_registro.css') }}">

</head>

<body>

    <section class="main">

        <figure class="main__figure">
          
            <img src="./images/perry.png" class="main__img">
        </figure>

        <div class="main__contact">
            <form action  ="{{route('UsuarioBlade') }}" method="POST">
            @csrf

        
                NOMBRE :<input type="text" name="nombre"id="nombre"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                APELLIDO PATERNO :<input type="text" name="ape_pate"id="ape_pate"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                APELLIDO MATERNO :<input type="text" name="ape_mate"id="ape_mate"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                CORREO <input type="email"name="correo" id="correo"pattern="[A-Z]-[@-.]{50}" required>
                <br>
                <br>

                PASSWORD<input type="text" name="pass"id="pass"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                
                TELEFONO :<input type="text"name="telefono"id="telefono"pattern="[0-9]{10}" required>
                <br>
                <br>

            
              <p> SEXO :</p>
              <br>

                  HOMBRE : <input type="radio" id="hombre" name="sexo" value="ERES HOMBRE"><br>   
                  MUJER  : <input type="radio" id="mujer" name="sexo"  value="ERES MUJER"><br>   
                  OTROS  : <input type="radio" id="raro" name="sexo"  value="NO SABES QUE PEDO CONTIGO"><br>  
                  <br>
                  
                   
                
                <input type="submit" name="registrar"id="registrar" value=" REGISTRAR "/>

                <br>
                <br>

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

                          
                        
        
            </form>
        

        </div>

    </section>



</body>

</html>