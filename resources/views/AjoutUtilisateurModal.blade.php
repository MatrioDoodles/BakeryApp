<div class="modal fade addUser" id="addUser" tableindex="-1" role="dialog" aria-labelledby="addUser" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"> Ajouter Utilisateur</h4>
      </div>
        <div class="modal-body">
        <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ajouter Utilisateur</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  {!! Form::open(array('url' => 'AddUtilisateur', 'method' => 'post', 'class' => 'form-horizontal form-label-left','files' => 'true')) !!}
                  @inject('role', 'App\role')
                  <div class="form-group">
                    {{ Form::label('nom', 'Nom',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('nom',$nom = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('prenom', 'Prenom',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('prenom',$prenom = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('email', 'E-mail',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('email',$email = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('adresse', 'Adresse',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('adresse',$adresse = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('tel', 'Téléphone',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('tel',$tel = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('password', 'Mot De Passe',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::password('password',$password = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('role_id', "Role",array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::select('role',['A'=>'Administrateur','C'=>'Client'],null,array('class' => 'select2_single form-control' , 'tabindex' => '-1')) }}
                    </div>
                  </div>

                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {{ Form::submit('Ajouter',array('class' => 'btn btn-primary')) }}
                            <button class="btn btn-danger" data-dismiss="modal">Fermer</button>

                      </div>
                    </div>

                    {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>
        </div>
    </div>
  </div>
</div>
