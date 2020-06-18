<!DOCTYPE html>
<html>
<head>
  <title> Macaron </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css')}}" />
  <link href="{{ secure_asset('css/animate.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css')}}" />
  <!-- Custom styling plus plugins -->
  <!--<link href="{{ secure_asset('css/custom.css')}}" rel="stylesheet">-->
  <link href="{{ secure_asset('css/icheck/flat/green.css')}}" rel="stylesheet">
  <script src="{{ secure_asset('https://kit.fontawesome.com/5585cd38c5.js')}}" crossorigin="anonymous"></script>

  <link href="{{ secure_asset('js/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ secure_asset('js/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ secure_asset('js/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ secure_asset('js/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ secure_asset('js/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
 <!--  <link rel="stylesheet" href="{{ secure_asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
   <script src="{{ secure_asset('js/jquery.min.js')}}"></script>

</head>
<body>

            @include ('header')
</br>
</br>
    <section class="aboutUs" id="about">
      <div class="container">

        <h1 class="text-center" id="ccc" style="color: #A0522D">Qui sommes-nous ?<h2>
          <br>
        <p style="color: #8B4513">Le pâtissier est un artiste et notre pâtisserie est votre délice.
Passionné de l’artisanat culinaire et unissant à la fois la tradition et la modernité, on a fondé notre boulangerie Macaron, un cocktail magique qui rassemble les classiques de la pâtisserie marocaine reconnus et appréciés à travers le monde entier avec les desserts de la gastronomie européenne.

<br> <br>
En plateaux, en coffrets ou en ballotins de votre choix, nous vous invitons à déguster nos charmants gâteaux à base d'amandes et de miel couronnés de graines de sésame, noisette et pistache qui vont vous présenter tout un monde de parfum et douceur. Une pate croustillante et un cœur moelleux, traitée comme de la dentelle pour vous faire un tour à un voyage gourmand de l’autre côté de la méditerranée.

<br><br>
Quand un client entre dans notre magasin, c’est lui le roi. Un roi commande et nous réalisons, notre objectif primordial est de lui faire satisfaire c’est pour cela nos produits sont préparés en respectant les normes professionnelles dans le but d’être à la hauteur de vos attentes afin que tout se passe dans les meilleures conditions.

<br><br>
Située en plein cœur de Casablanca, vous êtes les bienvenus à Macaron afin d’apprécier le fruit de notre travail. Lors d’un mariage ou pour chaque type d’événement, partagez vos moments heureux avec nous, quelque soit le design de votre gâteau, notre équipe est en mesure de l’accomplir, on s’adapte à vos besoins et à vos envies. Macaron c’est votre maison.
        </p>
          </div>


          <center> <img id="about1" src="images/about.png" alt="image" /> </center>
    </div>
    </section>
    <footer class="text-center footer">
      @include ('footer')

    </footer>
   <script>
   window.onload = function() {
  document.getElementById('apropos').className = 'active';
};
  // document.getElementById("acceuil").classList.add('active');
   </script>
    <!-- detail -->
     

     <script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
     </script>
     <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
