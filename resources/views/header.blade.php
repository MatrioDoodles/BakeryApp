<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
 <div class="container-fluid">
   <div class="navbar-header">
   <a class="navbar-brand" rel="home" href="#" title="cccc">
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
          <li><i class="fas fa-shopping-cart perso"></i></li>
        </ul>
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
      <ul class="nav navbar-nav navbar-right" style="padding-right: 2%;">
        <li class="dropdown">
        @if(Auth::check())
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour {{Auth::user()->name}} ! <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
            {!! Form::open(['url' => 'logout']) !!}
              {!! Form::button('<span class="glyphicon glyphicon-off"> Se Déconnecter
              </span>',['type' => 'submit','class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
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
