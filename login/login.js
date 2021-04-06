function mostrarPassword(){
		var cambio = document.getElementById("password");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	document.getElementById('login').onsubmit = function(e){
		e.preventDefault();
		var r;
		let x = new XMLHttpRequest();
		let datos;
		x.onreadystatechange = function (){
			if (this.readyState == 4 && this.status == 200) 
			{
				datos = JSON.parse(this.responseText);
				var res=document.getElementById('msgl');
				r=datos[1];
				res.innerHTML=datos[0];
				if(r){
					open("http://localhost/PrimerParcial324/index.php","_self");
				}else{
					document.getElementById('login').reset();
				}
				
			}
		}
		x.open("post","http://localhost/PrimerParcial324/login/sesion.php");
		let fd = new FormData(document.getElementById('login'));
		fd.append('login',1);
		x.send(fd);
		document.getElementById('login').reset();
	}