	</head>
	<body>
	
		<nav class="navbar navbar-expand-lg <?=($t==0)?'navbar-dark bg-dark':(($t==1)?'navbar-dark bg-primary':(($t==2)?'navbar-dark bg-warning':'navbar-light bg-light'))?>">
		  <a class="navbar-brand" href="http://localhost/PrimerParcial324/"><i class="fas fa-home"></i> </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
			<?php if ($_SESSION['rol']=='R01'){ ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="http://localhost/PrimerParcial324/notasGeneralPHP/">Notas General PHP <i class="fas fa-clipboard"></i></a>
		      </li>

		      <li class="nav-item active">
		        <a class="nav-link" href="http://localhost/PrimerParcial324/notasGeneralSQL/">Notas General SQL <i class="fas fa-clipboard"></i></a>
		      </li>
		    <?php } ?>
		    </ul>

		    <ul class="navbar-nav">
		    	<?php if (isset($_SESSION['usr'])){ ?>
		    		 <li class="nav-item dropdown active">
				        <a class="nav-link dropdown-toggle" href="#" id="adm" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          <?=$_SESSION['usr']?> <i class="fas fa-user-circle"></i>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="adm">
				          <a class="dropdown-item" href="http://localhost/PrimerParcial324/tema">Cambiar Tema <i class="fas fa-palette"></i></a>
				          <?php if ($_SESSION['rol']=='R02'){ ?>
				          <a class="dropdown-item" href="http://localhost/PrimerParcial324/notas">Notas <i class="fas fa-clipboard"></i></a>
				      	  <?php } ?>
				          <a class="dropdown-item" href="#" onclick="logout()">Salir <i class="fas fa-sign-out-alt"></i></a>
				        </div>
				      </li>
		    	<?php }else{ ?>
			      <li class="nav-item">
			       <a class="nav-link btn btn-dark" href="http://localhost/PrimerParcial324/login/">
					  Login <i class="fas fa-sign-in-alt"></i>
					</a>
			      </li>
				<?php } ?>
		    	<li class="nav-item" style="width: 80px"></li>
		    </ul>
		  </div>
		</nav>
	<main class="container" style="background-color: rgba(255,255,255,0);">
		<div class="container" style="background-color: rgba(255,255,255,0);">
		  <div class="card border-0 shadow my-5" style="background-color: rgba(255,255,255,0.0);">
		    <div class="card-body p-5" style="background-color: rgba(255,255,255,0.5);">
		    	<h1 style="text-align: center;">Facultad de Ciencias Puras y Naturales</h1>