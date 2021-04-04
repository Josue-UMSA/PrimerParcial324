<div class="row" >
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <h4 class="card-title text-center"><strong>Inicio de Sesion</strong></h4>
                        <div style="height: 5vh"></div>
		            <form class="form" action="../sql/sesion.php" method="post" id="login">
                        <div class="form-label-group">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuaio" required>
                             <label for="usuario">Usuario</label>
                        </div>
                        <div class="form-row">
                        	<div class="col-10">
                        		<div class="form-label-group">
		                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		                            <label for="password">Password</label>
		                        </div>
                        	</div>
                        	<div class="col-1">
                        		 <a id="ShowPassword" class="btn btn-primary rounded-circle" type="button" onclick="mostrarPassword()"> <i class="fa fa-eye-slash icon"></i> </a>
                        	</div>
                       
                        </div>
                        <div id="msgl" style="min-height: 5vh">
                        	
                        </div>
				       <div class="modal-footer">
				        <a type="button" class="btn btn-warning" href="index.php"> Volver </a>
				        <button type="submit" class="btn btn-info" name="btn" value="Guardar"> Ingresar <i class="fas fa-sign-in-alt"></i></button>
				       </div>
				    </form>
    </div>
</div>