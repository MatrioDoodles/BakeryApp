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
              <h1 class="text-center" style="color: #A0522D" id="ccc">Catalogue de nos produits</h1>
              <h4 class="text-center" style="font-size: 20px;font-weight: 400;font-family: serif;" style="color:#666D77">Toutes les saveurs est entre vos mains!
             La patisserie Macaron agrémente vos réceptions privées ou professionnelles et vous apporte ses conseils,
              son savoir-faire, son style et sa sensibilité inégalable.
             La patisserie Macaron s’adapte à vos besoins et à vos envies.</h4>
            </div>

            <div class="cat">
            @inject('categorie', 'App\Categorie')
            @foreach($produits as $produit)


<div class="block">
  <div class="top">
    <ul>
    @if(Auth::check() && Auth::user()->produits->isNotEmpty())
    @foreach(Auth::user()->produits as $produser)
    @if($produser->id == $produit->id)
    {!! Form::open(['url' => 'deleteFavoris' ]) !!}
    {{ Form::hidden('id',$produit->id) }}
      <li><button type="submit"><i class="fa fa-star" style="color: #d3b406;" aria-hidden="true"></i></button></li>
    {!! Form::close() !!}
    @else
    {!! Form::open(['url' => 'addFavoris' ]) !!}
    {{ Form::hidden('id',$produit->id) }}
      <li><button type="submit"><i class="fa fa-star-o" aria-hidden="true"></i></button></li>
    {!! Form::close() !!}
    @endif
    @endforeach
    @else
    {!! Form::open(['url' => 'addFavoris' ]) !!}
    {{ Form::hidden('id',$produit->id) }}
      <li><button type="submit"><i class="fa fa-star-o" aria-hidden="true"></i></button></li>
    {!! Form::close() !!}
    @endif
      <li><span id="product-name" class="product">{{$produit->libelle}}</span></li>
  
      <li><button onclick="addPannier('{{$produit->id}}')"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button></li>
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
  document.getElementById('panier').innerHTML=`<input id="nb_article_panier" name="nb_article_panier" type="hidden" value="">`;
};
  // document.getElementById("acceuil").classList.add('active');
   </script>

     <script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
     </script>
     <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
     <script>
            function addPannier(id) {
              var produits =  {!! json_encode($produits->toArray(), JSON_HEX_TAG) !!};
              var prod;
              for (var i = 0; i < produits.length; i++) {
                if(produits[i].id == id){
                prod = produits[i];
              }
              }
              var id_existant = document.getElementById('id_article'+prod.id);
              console.log(id_existant);
              if(id_existant != null)
              {
                alert("Produit deja dans le panier :)")
              }
              else {
                    document.querySelector('#panier').insertAdjacentHTML(
                       'afterbegin',
                      ` <div class="row">
                       <div class='col-8 col-sm-8 col-md-2 text-center'>
                                <img id="img" class='img-responsive' src="" alt='prewiew' width='120' height='80'>
                        </div>
                        <input id="id_article" name="id_article" type="hidden" value="">
                        <div class='col-8 text-sm-center col-sm-8 text-md-left col-md-6'>
                            <h4 class='product-name'><strong id="pd_name"></strong></h4>
                            <h4>
                                <small id="pd_desc"></small>
                            </h4>
                        </div>
                        <div class='col-8 col-sm-8 text-sm-center col-md-4 text-md-right row'>
                            <div class='col-3 col-sm-3 col-md-6 text-md-right' style='padding-top: 5px'>
                                <h6><strong id="pd_price"></strong> <span class="text-muted">DH</span></h6>
                            </div>
                            <div class='col-4 col-sm-4 col-md-4'>
                                <div class='quantity'>
                                    <input type='button' value='+' class='plus'>
                                    <input id ="qte" type='number' step='1' max='99' min='1' value='1' title='Qty' class='qty'
                                           size='4'>
                                    <input type='button' value='-' class='minus'>
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div> `);
                    document.getElementById("img").src = 'images/produits/'+ prod.picture;
                    document.getElementById("pd_name").innerHTML = prod.libelle;
                    document.getElementById("pd_desc").innerHTML = prod.description;
                    document.getElementById("pd_price").innerHTML = prod.prix;
                    document.getElementById("nb_article_panier").value = document.getElementById("nb_article_panier").value + 1;
                    document.getElementById("id_article").id = document.getElementById("id_article").id+prod.id;  
                    document.getElementById("id_article"+prod.id).setAttribute("name", document.getElementById("id_article"+prod.id).id);  
                    document.getElementById("id_article"+prod.id).value = prod.id;
                    document.getElementById("qte").id = document.getElementById("qte").id+prod.id;
                    document.getElementById("qte"+prod.id).setAttribute("name", document.getElementById("qte"+prod.id).id);
                  }
                                 }
      </script>
</body>
</html>
