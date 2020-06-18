<!DOCTYPE html>
<html>
<head>
  <title> Macaron </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css')}}" />
  <link href="{{ secure_asset('css/animate.min.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <!--<link href="{{ secure_asset('css/custom.css')}}" rel="stylesheet">-->
  <link href="{{ secure_asset('css/icheck/flat/green.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
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

    <!-- insertion des images -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
 <div class="item active">
   <img src="images/macc1.png" alt="Los Angeles"  id="background-image">
   <div class="carousel-caption">
        <!--<h3>DES MEILLEURS INGRÉDIENTS VOUS GARANTIR UNE DÉGUSTATION EXCEPTIONNELLE</h3>-->
        <p></p>
      </div>
 </div>
 <div class="item">
     <img src="images/macc.png" alt="Chicago" id="background-image">
     <div class="carousel-caption">
        <!--<h3>UNE BONNE PÂTE EST POUR NOUS LA BASE ESSENTIELLE D’UN BON GOÛT</h3>-->
        <p></p>
      </div>
   </div>

   <div class="item">
     <img src="images/macc3.png" alt="New York"  id="background-image">

   <div class="carousel-caption">
        <!--<h3>LE GOÛT DES PLATS EST MEILLEUR QUE L'ODEUR</h3>-->
        <p></p>
      </div>
 </div>
</div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>
    <!-- remove spaace and center products -->
    <div class="col-md-2">

    </div>
  <!-- contenu des produits -->
  <div class="col-md-8 contenu ">
    <div class="row">
      <h2 class="text-center" id="ccc" style="color: #A0522D;">Les gâteaux favoris</h2> <br /> <br />
      <div class="col-md-3">
          <h4 id="ff" >Gâteaux Prestige</h4>
          <img src="images/cac.png" alt="Ghryba" id="images"/>
          <p class="price">Prix/Kg: 60 Dhs</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Detail</button>
        </div>

        <div class="col-md-3">
            <h4 id="ff">Corne de Gazelle</h4>
            <img src="images/CorneM.png" alt="Gazelle" id="images"/>
            <p class="price">Prix/Kg: 90 Dhs</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Detail</button>
          </div>

          <div class="col-md-3">
              <h4 id="ff">Fakkas</h4>
              <img src="images/fekkasM.png" alt="Fakkas" id="images"/>
              <p class="price">Prix/Kg: 45 Dhs Dhs</p>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Detail</button>
            </div>
            <div class="col-md-3">
                <h4 id="ff">Chebakia</h4>
                <img src="images/ChebakiaM.png" alt="Ghryba" id="images"/>
                <p class="price">Prix/Kg: 50 Dhs Dhs</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Detail</button>
              </div>

              <div class="col-md-3">
                  <h4 id="ff">Briouate</h4>
                  <img src="images/BriouatM.png" alt="Ghryba" id="images"/>
                  <p class="price">Prix/Kg: 90 Dhs</p>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Detail</button>
                </div>
                <div class="col-md-3">
                    <h4 id="ff">Mhancha</h4>
                    <img src="images/MhanchaM.png" alt="Ghryba" id="images"/>
                    <p class="price">Prix/Kg: 40 Dhs</p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Detail</button>
                  </div>
                  <div class="col-md-3">
                      <h4 id="ff">Ghryba</h4>
                      <img src="images/GhribaM.png" alt="Ghryba" id="images"/>
                      <p class="price">Prix/Kg: 35 Dhs</p>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Detail</button>
                    </div>
                    <div class="col-md-3">
                        <h4 id="ff">Bassboussa</h4>
                        <img src="images/basboussaM.png" alt="Ghryba" id="images"/>
                        <p class="price">Prix/Kg: 30 Dhs</p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Detail</button>
                      </div>

    </div>
    </div>
</br>
    <footer class="text-center footer">
      @include ('footer')

    </footer>
   <script>
   window.onload = function() {
  document.getElementById('acceuil').className = 'active';
};
  // document.getElementById("acceuil").classList.add('active');
   </script>
    <!-- detail -->
    
    @include ('detail-modal-GâteauxPrestige')
    @include ('detail-modal-CorneGazelle')
    @include ('detail-modal-Fakkas')
    @include ('detail-modal-Chebakia')
    @include ('detail-modal-Briouate')
    @include ('detail-modal-Mhancha')
    @include ('detail-modal-Ghryba')
    @include ('detail-modal-Bassboussa')
     

     <script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
     </script>
     <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
