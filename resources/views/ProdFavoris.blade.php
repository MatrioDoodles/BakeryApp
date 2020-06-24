<!DOCTYPE html>
<html>
<head>
  <title> Macaron </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css')}}" />
  <link href="{{ secure_asset('css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ secure_asset('css/catalogue.css')}}" rel="stylesheet">

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

            @include ('header')<br><br>
            <div class="container">
              <h1 class="text-center" style="color: #A0522D" id="ccc">Vos Produits Favoris</h1>
              <h4 class="text-center" style="font-size: 20px;font-weight: 400;font-family: serif;" style="color:#666D77">Toutes les saveurs est entre vos mains!
             La patisserie Macaron agrémente vos réceptions privées ou professionnelles et vous apporte ses conseils,
              son savoir-faire, son style et sa sensibilité inégalable.
             La patisserie Macaron s’adapte à vos besoins et à vos envies.</h4>
            </div>

            <div class="cat">
            @inject('categorie', 'App\Categorie')
            @foreach(Auth::user()->produits as $produit)


<div class="block">
  <div class="top">
    <ul>
    {!! Form::open(['url' => 'deleteFavoris' ]) !!}
    {{ Form::hidden('id',$produit->id) }}
      <li><button type="submit"><i class="fa fa-star" style="color: #d3b406;" aria-hidden="true"></i></button></li>
    {!! Form::close() !!}
      <li><span class="product">{{$produit->libelle}}</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>

  <div class="middle">
    <img src="{{'images/produits/'.$produit->picture}}" alt="pic" />
  </div>

  <div class="bottom">
  <div class="heading">{{$produit->categorie()->first()->name}}</div>
    <div class="info">{{$produit->description}}</div>
    <!--div class="style">Color: Red / Style: M9621C</div-->
    <div class="price">{{$produit->prix}} Dh/Kg <span class="old-price">{{$produit->prix}} Dh/Unité</span></div>
  </div>

</div>
@endforeach
</div>

            <footer class="text-center footer">
      @include ('footer')

    </footer>
   <script>
   window.onload = function() {
  document.getElementById('nosprod').className = 'active';
};
  // document.getElementById("acceuil").classList.add('active');
   </script>

     <script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
     </script>
     <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
