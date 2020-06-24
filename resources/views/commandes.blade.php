<!DOCTYPE html>
	<html>
		<head>
			<title> Macaron </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="{{ secure_asset('css/main.css')}}"/>
				<link href="{{ secure_asset('css/animate.min.css')}}" rel="stylesheet">
            

            <link href="{{ secure_asset('cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
    <!--<link href="{{ secure_asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">-->
    <!-- Font Awesome -->
	<script src="{{ secure_asset('https://kit.fontawesome.com/5585cd38c5.js')}}" crossorigin="anonymous"></script>
    <!-- NProgress -->
    <link href="{{ secure_asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ secure_asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ secure_asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ secure_asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ secure_asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ secure_asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ secure_asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <!--<link href="{{ secure_asset('build/css/custom.min.css')}}" rel="stylesheet">-->
						<meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no"/>
							<!-- <script src="{{ secure_asset('js/jquery.min.js')}}"> </script>-->
		</head>
						<body>
							@include ('header')
</br>
</br>
</br>
							<div class="right_col" >
          <div class="">
@inject('produit', 'App\Produit')

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Liste des utilisateurs</h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  @if(! empty($erreur))
												<p style="color:red;">{{$erreur}}</p>
                  @endif
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
												
														<thead>
															<tr>
																<th>Id Commande</th>
																<th>Numéro Commande</th>
																<th>Date Commande</th>
																<th>Date Livraison</th>
																<th>Total</th>
                                <th>Status</th>
																<th>Détail Commande</th>
															</tr>
															</thead>
														
															<tbody>
																@foreach($commandes as $commande)
                                @if($commande->user_id == Auth::user()->id || Auth::user()->role_id == 1)
																	<td>{{$commande->id}}</td>
																	<td>{{date('dmY', strtotime($commande->date_commande)).$commande->id}}</td>
																	<td>{{date('d-m-Y', strtotime($commande->date_commande))}}</td>
																	<td>{{date('d-m-Y', strtotime($commande->date_livraison))}}</td>
																	<td>{{$commande->total}} DH</td>
                                  <td>@if(date('d-m-Y', strtotime($commande->date_livraison)) >= date('d-m-Y', strtotime(\Carbon\Carbon::now())) ) 
                                      En cours de traitement
                                      @else
                                      Livré
                                      @endif
                                  </td>
																	<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DetailProd{{$commande->id}}">Détails</button></td>
                                  </tr>
                                  <div class="modal fade DetailProd{{$commande->id}}" id="DetailProd{{$commande->id}}" tableindex="-1" role="dialog" aria-labelledby="DetailProd{{$commande->id}}" data-backdrop="static" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                              <div class="modal-body">
                                              <div class="clearfix"></div>
                                                <div class="row">
                                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="x_panel">
                                                      <div class="x_title">
                                                        <h2>Détail de la commande {{date('dmY', strtotime($commande->date_commande)).$commande->id}}</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                          </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                      </div>
                                                      <div class="x_content">
                                                      @foreach($commande->produits as $produit)
                                                      <div class="row">
                                                          <div class="col-12 col-sm-12 col-md-2 text-center">
                                                                  <img class="img-responsive" src="{{'images/produits/'.$produit->picture}}" alt="prewiew" width="120" height="80">
                                                          </div>
                                                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                                                              <h4 class="product-name"><strong>{{$produit->libelle}}</strong></h4>
                                                              <h4>
                                                                  <small>{{$produit->description}}</small>
                                                              </h4>
                                                          </div>
                                                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                                              <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                                                  <h6><strong>{{$produit->prix}} <span class="text-muted">DH</span></strong></h6>
                                                              </div>
                                                              <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                                                  <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                                                  <h6><strong>{{$produit->pivot->quantite}} <span class="text-muted">Kg</span></strong></h6>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      
                                                      @endforeach
                                                      </br>
                                                      </br>
                                                          <div class="form-group text-center">
                                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                  <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      @endif
																	@endforeach
															</tbody>
													</table>
												</div>

                       
											</div>
										</div>
									</div>
								</div>
              </div>
              </div>
										<footer class="text-center footer">
											@include ('footer')
										</footer>   
										<script src="{{ secure_asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}">
										</script>
										<script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
										 <!-- jQuery 
    <script src="{{ secure_asset('vendors/jquery/dist/jquery.min.js')}}"></script>-->
    <!-- Bootstrap 
   <script src="{{ secure_asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>-->
    <!-- FastClick -->
    <script src="{{ secure_asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ secure_asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ secure_asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{ secure_asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ secure_asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ secure_asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ secure_asset('build/js/custom.min.js')}}"></script>
						</body>
								</html>