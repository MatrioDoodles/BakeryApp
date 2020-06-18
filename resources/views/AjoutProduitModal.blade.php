<div class="modal fade addProduit" id="addProduit" tableindex="-1" role="dialog" aria-labelledby="addProduit" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
        <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ajouter Produit</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  {!! Form::open(array('url' => 'AddProduit', 'method' => 'post', 'class' => 'form-horizontal form-label-left','files' => 'true')) !!}
                  @inject('categorie', 'App\Categorie')
                  <div class="form-group">
                    {{ Form::label('libelle', 'Libelle',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('libelle',$libelle = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('description', 'Description',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('description',$description = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                    </div>
                  </div>
                  <div class="form-group">
                     {{ Form::label('id', "Categorie",array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                      <div class="col-md-6 col-sm-6 col-xs-12" style="float:left" >
                     {{ Form::select('categorie',$categorie::pluck('name','id')->toArray(),null,array('class' => 'select2_single form-control' , 'tabindex' => '-1')) }}
                     </div>
                      <button  type="button" class="btn btn-default" data-toggle="modal" data-target="#addCat" style="float:left" onclick="jQuery('#addProduit').modal('toggle');">
                            <i class="fa fa-plus"></i>
                      </button>
                      <button type="button" class="btn btn-default" style="float:left">
                            <i class="fa fa-pencil"></i>
                      </button>
                     
                      <button  type="button" class="btn btn-default" style="float:left">
                            <i class="fa fa-ban"></i>
                      </button>
                      
                    </div>
                  <div class="form-group">
                    {{ Form::label('prix', 'Prix',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                     <div class="col-md-6 col-sm-6 col-xs-12">
                     {{ Form::text('prix',$prix = $produit = null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                      </div>
                  <div class="form-group">
                    {!! Form::label('photo', 'Photo',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {!! Form::file('photo',null, ['class' => 'form-control col-md-7 col-xs-12'] ) !!}
                    </div>
                  </div>
                  </br>
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
        </div>
    </div>
  </div>
</div>
