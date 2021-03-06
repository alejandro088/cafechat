<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CafeChat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
	<style>
		body, html {
            height: 100%;
        }
		#wrapper {
			background-image: url("img/bgimage.png");
			background-repeat: no-repeat;
			background-size:cover;
			height: 100%;
		}
		.cinfo {background-color: rgba(255, 255, 255, 0.6);}

		.navbar {background-color: rgba(0, 0, 0, 0.6);}
	</style>
</head>
<body>
	<div id="wrapper" class="p-3">
    <div class="container-fluid">
    	<nav class="navbar">
  			<div>
    			<img src="img/taza.png" alt="" width="250px">
    		</div>
    		<div>
    			<a class="m-2 btn btn-primary" href="/radio" target="_blank"><i class="fas fa-headphones-alt"></i> Radio en vivo!</a> 
    			<a class="btn btn-primary" href="https://facebook.com/www.cafechat.com.ar"><i class="fab fa-facebook-square" style="size: 5px;"></i> </a>
			<a class="btn btn-warning" href="https://www.instagram.com/irc.cafechat.com.ar/"><i class="fab fa-instagram" style="size: 5px;"></i></a>
    			<a class="btn btn-danger" href="https://www.youtube.com/channel/UC5rusGbiKbutcnD6f941OEQ"><i class="fab fa-youtube" style="size: 5px;"></i></a>
    		</div>
		</nav>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col">
				
            </div>
			
            <div class="col-md-6 col-sm-12 cinfo p-3 shadow-lg rounded-lg">
            	<h3>Un cafe y buenas compañias.</h3>
            	<h4> Te esperamos en #CafeChat para compartir buenos momentos.</h4>

            	<div class="links m-3">

						<input type="text" id="nick" name="nick" class="form-control m-2" placeholder="Ingresá tu nick..." />
            		
            		    <a id="cafe" class="m-2 btn btn-primary btn-block" href="http://irc.cafechat.com.ar/#Cafe">Chatea en #Cafe!</a>

           		    <a id="cafegitano" class="m-2 btn btn-primary btn-block" href="http://irc.cafechat.com.ar/#CafeGitano">Chatea en #CafeGitano!</a>
           
            	</div>

            </div>
        </div>
    </div>
    </div>
    <div id="footer" class="container-fluid p-3 text-white bg-primary">Cortesía de Alejandro Cayssials | <a class="text-white" href="https://webxander.com">webxander.com</a></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>

    	$(document).ready(function() {

    	$("#nick").change(function(){

    	let nick = $("#nick").val()

    	$("#cafe").attr("href", `http://irc.cafechat.com.ar/?nick=${nick}#Cafe`)

    	$("#cafegitano").attr("href", `http://irc.cafechat.com.ar/?nick=${nick}#CafeGitano`)

        });

    	});
    </script>
</body>
</html>
