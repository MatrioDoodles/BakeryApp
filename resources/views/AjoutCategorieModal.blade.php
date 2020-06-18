<div class="modal fade addCat" id="addCat" tableindex="-1" role="dialog" aria-labelledby="addCat" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
        <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ajouter Catégorie</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  {!! Form::open(array('url' => 'AddCategorie', 'method' => 'post', 'class' => 'form-horizontal form-label-left','files' => 'true')) !!}
                  <div class="form-group">
                    {{ Form::label('nom', 'Nom',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('name',$name = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                    </br>
                    </br>
                    </br>
                    <div class="form-group" style="margin: 0 auto;">
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
        </div>
    </div>
  </div>
</div>
