<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
 <div class="container-fluid">
   <div class="navbar-header">
   <a class="navbar-brand" rel="home" href="index" title="cccc">
       <img style="max-width:200px; margin-top: -88px;" src="images/loo.png" class="pull-left"> </a>
   </div>
    <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav">
          <li id="acceuil"><a href="index">Accueil</a></li>
          @if(Auth::check() && Auth::user()->role_id == 1)<li id="users"><a href="ReadUtilisateur">Utilisateurs</a></li>@endif
          @if(Auth::check() && Auth::user()->role_id == 1)<li id="produits"><a href="ReadProduit">Produits</a></li>@endif
          <li id="nosprod"><a href="Nosprods">Nos Produits</a></li>
          <li id="contact"><a href="contact">Contactez-nous</a></li>
          <li id="apropos"><a href="apropos">A propos de nous</a></li>
          <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart perso"></i><span class="caret"></span></a>
           <ul id="cart-dp" class="dropdown-menu dropdown-menu-center" >
              <li>
            <div class="row text-center" >
            <h4><strong>Panier</strong></h4>
            <form action="{!! action('CommandeController@commander_func') !!}" accept-charset="UTF-8" method="POST">
            @csrf
            <div id = "panier" class="col-md-12" style="padding:10px;" >
            <input id="id_article0" name="id_article0" type="hidden" value="0">
            </div>
            <div class="bottom text-center">
            <button class="btn btn-primary btn-block" style="padding:10px;" type="submit">Commander  <i class="fas fa-shopping-cart"></i></button>
            </form>
            <button onclick="DelPanier()" class="btn btn-primary btn-block" style="padding:10px;" href="cmdUser" role="button">Vider Panier <i class="fas fa-trash-alt"></i></button>
            <script>
            function DelPanier() {
        document.getElementById("panier").innerHTML = " Votre Panier Est vide";
                                 }
            </script>
            </div>
              </div>
              </li>
            </ul>
            </li>
        {!! Form::open(['url' => 'Search', 'class' => 'navbar-form navbar-left' ]) !!}
        <div class="form-group">
        <div class="input-group">
        {!! Form::text('mot',old('mot'), ['class' => 'form-control' , 'placeholder' => 'Chercher un produit...'] ) !!}
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
              </span>
          </div>
          </div>
        {!! Form::close() !!}
      <ul class="nav navbar-nav navbar-right" >
        <li class="dropdown">
        @if(Auth::check())
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour {{Auth::user()->name}} ! <span class="caret"></span></a>
        <ul id="login-dp" class="dropdown-menu dropdown-menu-cente" >
          <li>
            <div class="row" >
            <div class="col-md-12" style="padding:10px;" >
            <a class="btn btn-custom btn-block" style="padding:10px;" href="favorisCat" role="button">Mes Produits Favoris  <i class="fas fa-star"></i></a>
            </div>
            <div class="col-md-12" style="padding:10px;" >
            <a class="btn btn-custom btn-block" style="padding:10px;" href="ReadCommande" role="button">Mes Commandes  <i class="fas fa-shopping-cart"></i></a>
            </div>
           
           
            <div class="bottom text-center">
            {!! Form::open(['url' => 'logout']) !!}
              {!! Form::button('<span class="glyphicon glyphicon-off"> Se Déconnecter
              </span>',['type' => 'submit','class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
              </div>
              </div>
              </li>
            </ul>
        @else
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Se Connecter/S'Enregister <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
            <div class="row">
							<div class="col-md-12">
              {!! Form::open(['url' => 'log', 'class' => 'navbar-form navbar-left' ]) !!}
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    {!! Form::text('email',old('email'), ['class' => 'form-control' , 'required','autofocus','placeholder' => 'Votre Email','aria-describedby' => 'basic-addon1'] ) !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    {!! Form::password('passwd', ['class' => 'form-control' , 'required','autofocus','aria-describedby' => 'basic-addon1'] ) !!}
                  </div>
                </div>
                {!! Form::submit('Se Connecter',['class' => 'btn btn-primary btn-block']) !!}
                  {!! Form::close() !!}
             </div>
              <div class="bottom text-center">
                  Nouveau ici ? <a href="register"><b>Rejoignez-nous</b></a>
              </div>
            </div>
            </li>
          </ul>
        @endif
        </li>
      </ul>
    </div>
  </div>
 </nav>
