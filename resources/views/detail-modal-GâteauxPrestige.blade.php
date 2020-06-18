<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"> Gateaux Prestige</h4>
      </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="center-block">
                  <img src="images/pestigeM.png" alt="Ghryba" class="details img-responsive"/>
                </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>La pâtisserie marocaine regroupe l'ensemble des pâtisseries traditionnelles issues de la cuisine marocaine. Ces pâtisseries sont en majeure partie réalisées à base d'amandes et de miel et sont généralement accompagnées par du thé à la menthe.</p>
              </hr>

                <form action="add-cart.php" method="post">
                  <div class="form-group">

                      <label for="comment">Préférence en ingrédient:</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div> <br />

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
