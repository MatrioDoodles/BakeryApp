<div class="modal fade details-4" id="details-4" tableindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"> Chebbakia</h4>
      </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="center-block">
                  <img src="images/ChebakiaM.png" alt="Ghryba" class="details img-responsive"/>
                </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>Souvent confondus avec les Chebbakia, les Griouch ou Mkharka, sont des gâteaux traditionnels marocains au miel, préparés à base d’une pâte composée de farine, de grains de sésame, d’anis, de beurre, d’huile, d’œufs et d’eau de fleur d’oranger. Ces gâteaux sont façonnés en forme de fleur, puis frits et trempés dans du miel. Ils sont préparés pour le mois Sacré du Ramadan et présentés avec la Harira pour la rupture du jeûne.</p>
              </hr>
                <form action="add-cart.php" method="post">
                  <div class="form-group">

                      <label for="comment">Préférence en ingrédient:</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                  
                  </div>
                    <div class="form-group">
                      <label for="size">KG :</label>
                      <select name="size" id="size" class="form-control">
                        <option value=""></option>
                        <option value="0.5">0.5</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>

              </div>
            </div>
          </form>
        </div>
          </div>
        </div>

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </button>
    </div>
    </div>
  </div>
</div>
