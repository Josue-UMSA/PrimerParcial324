<div class="row" >
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    	<h4 class="card-title text-center"><strong>Selector de Tema</strong></h4>
		<form class="form" action="../sql/tema.php" method="post" id="temaf">
		  <div class="form-row">
			  <div class="form-group">
			  	<div class="form-check">
				  <input class="form-check-input" type="radio" name="temaOp" id="tema0" value="0" <?=($_SESSION['tema']==0)?'checked':""?>>
				  <label class="form-check-label" for="tema0">Tema 0</label>
				  <span class="badge badge-dark">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				  <span class="badge" style="background-color: #EFE9E9;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				</div>
			    <div class="form-check">
				  <input class="form-check-input" type="radio" name="temaOp" id="tema1" value="1" <?=($_SESSION['tema']==1)?'checked':""?>>
				  <label class="form-check-label" for="tema1">Tema 1</label>
				  <span class="badge badge-primary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				  <span class="badge" style="background-color: #E4D2FF;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="temaOp" id="tema2" value="2" <?=($_SESSION['tema']==2)?'checked':""?>>
				  <label class="form-check-label" for="tema2">Tema 2</label>
				  <span class="badge badge-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				  <span class="badge" style="background-color: #FFE1C1;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="temaOp" id="tema3" value="3" <?=($_SESSION['tema']==3)?'checked':""?>>
				  <label class="form-check-label" for="tema3">Tema 3</label>
				  <span class="badge badge-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				  <span class="badge" style="background-color: #D6FFF4;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
				</div>
			  </div>
			</div>
				<div class="modal-footer">
				    <button type="submit" class="btn btn-info" name="btn" value="Aplicar"> Aplicar Tema <i class="fas fa-palette"></i></button>
				</div>
		</form>
    </div>
</div>