<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> COMPRA   </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_cita.css') }}">

</head>

<body>

    <section class="main">

        <figure class="main__figure">

            <img src="./images/comp.jpg" class="main__img">
        </figure>

        <div class="main__contact">

            <form action  ="{{route('paypal') }}" method="POST">

                @csrf

                <h3> DETALLES DE LA COMPRA </h3>
                <br>

                NOMBRE :<input type="text" name="nom_masc" id="nom_masc"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                APELLIDO :<input type="text" name="ape" id="ape"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                CALLE :<input type="text" name="calle" id="calle"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>

                COLONIA :<input type="text" name="col" id="col"
                pattern="[A-Z ]+{50}" required>
                <br>
                <br>


                CP :<input type="text" name="cp" id="cp"
                pattern="[A-Z]+{50}" required>
                <br>
                <br>

                NUMERO :<input type="text" name="num" id="num"
                pattern="[A-Z]+{50}" required>
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


                        <button class="btn btn-primary" type="submit"> COMPRAR </button>




               </form>


        </div>

    </section>



</body>

</html>
