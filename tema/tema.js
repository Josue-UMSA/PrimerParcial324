
	document.getElementById('temaf').onsubmit = function(e){
		e.preventDefault();
		var r;
		let x = new XMLHttpRequest();
		let datos;
		x.onreadystatechange = function (){
			if (this.readyState == 4 && this.status == 200) 
			{
				console.log(this.responseText);	
			}
		}
		x.open("post","http://localhost/PrimerParcial324/tema/tema.php");
		let fd = new FormData(document.getElementById('temaf'));
		x.send(fd);
		location.reload();
	}