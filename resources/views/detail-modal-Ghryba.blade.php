<div class="modal fade details-7" id="details-7" tableindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"> Ghryba</h4>
      </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="center-block">
                  <img src="images/GhribaM.png" alt="Ghryba" class="details img-responsive"/>
                </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>Les « ghriba » ou « ghryba » sont en fait des macarons marocains façonnés à la main. Leur composition et texture varie selon les recettes ; à base de farine, de semoule, d’amandes, de noix ou grains de sésame, d’une texture moelleuse, sablée ou biscuitée ; autant de recettes que vous propose Le Sésame Des Saveurs dans un récapitulatif ! </p>
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
