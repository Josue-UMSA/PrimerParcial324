function logout(){
				let x = new XMLHttpRequest();
				x.onreadystatechange = function (){
					if (this.readyState == 4 && this.status == 200) 
					{
						location.reload();
					}
				}
				x.open("post","http://localhost/PrimerParcial324/login/logout.php");
				let fd = new FormData();
				fd.append("op","logout");
				x.send(fd);
				open("http://localhost/PrimerParcial324/index.php","_self");
			}	