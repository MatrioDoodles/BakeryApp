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
@inject('role', 'App\Role')
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
                  <!--{!! Form::open(array('url' => 'multiDeleteUser' ,  'method' => 'get')) !!}-->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
												
														<thead>
															<tr>
																<th>Nom</th>
																<th>Prenom</th>
																<th>Adresse</th>
																<th>Email</th>
																<th>Téléphone</th>
																<th>Role</th>
																<th>Actions</th>
																<th>
																	<button type="button" class="btn btn-danger btn-xs" id="bulk_delete">
																		<i class="glyphicon glyphicon-remove"></i>
																</th>
															</tr>
															</thead>
														
															<tbody>
																@foreach($users as $user)
																<tr id="{{$user->id}}">
																	<!--{!! Form::close() !!}-->
																	<td>{{$user->name}}</td>
																	<td>{{$user->surname}}</td>
																	<td>{{$user->adress}}</td>
																	<td>{{$user->email}}</td>
																	<td>{{$user->phone}}</td>
																	<td>{{$user->role()->first()->libelle}}</td>
																	<td>
                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModUser{{$user->id}}">Modifier</button>
																		{!! Form::open(['url' => 'DeleteUtilisateur']) !!}
																		{!! Form::hidden('id',$user->id) !!}
																		{!! Form::submit('Supprimer',['class' => 'btn btn-danger']) !!}
																		{!! Form::close() !!}
																	</td>
																	<td>
																		<input value="{{$user->id}}" type="checkbox" class="flat user_checkbox"></td>
                                  </tr>

                                  <div class="modal fade ModUser{{$user->id}}" id="ModUser{{$user->id}}"  role="dialog" aria-labelledby="ModUser{{$user->id}}" data-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <h4 class="modal-title text-center"> Modifier l'Utilisateur "{{$user->surname}}"</h4>
                                                </div>
                                                  <div class="modal-body">
                                                  <div class="clearfix"></div>
                                                    <div class="row">
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="x_panel">
                                                          <div class="x_title">
                                                            <h2>Modifier les Informations :</h2>
                                                            <ul class="nav navbar-right panel_toolbox">
                                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                              </li>
                                                            </ul>
                                                            <div class="clearfix"></div>
                                                          </div>
                                                          <div class="x_content">
                                                            <br />
                                                            {!! Form::open(array('url' => 'ModifUtilisateur', 'method' => 'post', 'class' => 'form-horizontal form-label-left','files' => 'true')) !!}
                                                            @inject('role', 'App\role')
                                                            {!! Form::hidden('id',$user->id) !!}
                                                            <div class="form-group">
                                                              {{ Form::label('nom', 'Nom',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::text('nom',$nom = $user->name, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('prenom', 'Prenom',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::text('prenom',$prenom = $user->surname, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('email', 'E-mail',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::text('email',$email = $user->email, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('adresse', 'Adresse',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::text('adresse',$adresse = $user->adress, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('tel', 'Téléphone',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::text('tel',$tel = $user->phone, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('password', 'Mot De Passe',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::password('password',$password = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>
                                                            <div class="form-group">
                                                              {{ Form::label('role_id', "Role",array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                {{ Form::select('role',['A'=>'Administrateur','C'=>'Client'],null,array('class' => 'select2_single form-control' , 'tabindex' => '-1')) }}
                                                              </div>
                                                            </div>
                                                            </br>
                                                            </br>

                                                              <div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                      {{ Form::submit('Modifier',array('class' => 'btn btn-warning')) }}
                                                                      <button class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                                                </div>
                                                              </div>
                                                              {!! Form::close() !!}
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>

																	@endforeach
															</tbody>
													</table>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Ajouter Un Utilisateur</button>
												</div>

                        <script>
                            window.onload = function() {
                            document.getElementById('users').className = 'active';
                          };
                            // document.getElementById("acceuil").classList.add('active');
                            </script>
														<script>
                            $(document).on('click', '#bulk_delete', function(){
                        var id = [];
                        if(confirm("Are you sure you want to Delete this data?"))
                        {
                            $('.user_checkbox:checked').each(function(){
                                id.push($(this).val());
                            });
                            if(id.length > 0)
                            {
                                $.ajax({
                                    url:"{{ route('massremove')}}",
                                    method:"get",
                                    data:{id:id},
                                    success:function(data)
                                    {
                                        for(var i=0; i<id.length; i++)
                                        {
                                            $('tr#'+id[i]+'').css('background-color', '#ccc');
                                            $('tr#'+id[i]+'').fadeOut('slow');
                                        }
                                    }
                                });
                            }
                            else
                            {
                                alert("Please select atleast one checkbox");
                            }
                        }
                    });
                </script>
											</div>
										</div>
									</div>
								</div>
              </div>
              </div>
										<footer class="text-center footer">
											@include ('footer')
										</footer>
                    @include ('AjoutUtilisateurModal')
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