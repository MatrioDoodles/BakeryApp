<!DOCTYPE html>
<html>
<head>
  <title> Macaron </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css')}}" />
  <link rel="stylesheet" href="{{ secure_asset('css/contact.css')}}" />
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


            <div class="jumbotron jumbotron-sm" >
    <div class="container" >
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" >
                    Contactez Nous <small>Votre avis nous interesse !</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container" id="cont">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer Votre Nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                            Adresse Email </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter Votre Email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choisissez-en un:</option>
                                <option value="service">Service Client Général</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Proposition De Produit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer Le Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Notre Magasin</legend>
            <address>
                <strong>Macaron, Maroc.</strong><br>
                Casablanca, BD Zerktouni 20000<br>
                  <abbr title="Phone">
                    Tél:</abbr>
                (212) 05 22 55 12 55
            </address>
            <address>
                <strong>Soukaina & Khalid</strong><br>
                <a href="mailto:#">macaron@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
<br>  <br>

<footer class="text-center footer">
      @include ('footer')

    </footer>
   <script>
   window.onload = function() {
  document.getElementById('contact').className = 'active';
};
  // document.getElementById("acceuil").classList.add('active');
   </script>
    <!-- detail -->

     <script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
     </script>
     <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
