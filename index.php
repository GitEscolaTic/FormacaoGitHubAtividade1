<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<style>
	body {
		background: black;
		color: white;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    position: fixed; 
    overflow: hidden;
    width: 100%;

	}

	.aesgama {
		background: black;
		color: white;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
		object-position: right top;
		position: absolute;
		font-style: italic;
  		top: 8px;
  		right: 16px;
  		font-size: 15px;
	}
	.relogio {
		background: black;
		color: white;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
		object-position: right top;
		position: absolute;
  		top: 60px;
  		right: 16px;
  		font-size: 85px;
	}
	.alunostexto {
  position: absolute;
  top: 0;
  margin-top: 210px;
  left: 425px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 70px;
}	
	.valorsenhas {
  position: absolute;
  top: 0;
  margin-top: 150px;
  left: 325px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 70px;
}	

	.balcaotexto {
  position: absolute;
  top: 0;
  margin-top: 155px;
  left: 670px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 30px;
  color: white;
}	

	.balcaoa {
  position: absolute;
  top: 0;
  margin-top: 210px;
  left: 690px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
  color: black;
}	

	.balcaob {
  position: absolute;
  top: 0;
  margin-top: 310px;
  left: 690px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
  color: black;
}	

	.balcaoc {
  position: absolute;
  top: 0;
  margin-top: 410px;
  left: 690px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
  color: black;
}	

	.balcaod {
  position: absolute;
  top: 0;
  margin-top: 510px;
  left: 690px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
  color: black;
}	
	.sasetexto {
  position: absolute;
  top: 0;
  margin-top: 310px;
  left: 460px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
}	
	.videofinalistas {
  position: absolute;
  top: 0;
  margin-top: 160px;
  left: 950px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
  position: absolute;
}	

	.logo {
content:url(logoescola.png);
max-height: 450px;
max-width: 500px;
}	

	.matriculastexto {
  position: absolute;
  top: 0;
  margin-top: 410px;
  left: 315px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 70px;
}	

	.outrostexto {
  position: absolute;
  top: 0;
  margin-top: 510px;
  left: 160px;
  width: 100%;
  height: 100%;
  z-index: 10;
  font-size: 65px;
}	

.marquee {
  margin-top: 625px;
  overflow: hidden;
  color: white;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
}
	
	.rectanguloalunos {
  height: 100px;
  width: 650px;
  background-color: red;
  position: absolute;
  top: 200px;
  left: 0px;
  		font-size: 100px;
}
	.rectangulosase {
  height: 100px;
  width: 650px;
  background-color: #4eed5e;
  position: absolute;
  top: 300px;
  left: 0px;
  		font-size: 100px;
}
	.rectangulomatricula {
  height: 100px;
  width: 650px;
  background-color: #498de6;
  position: absolute;
  top: 400px;
  left: 0px;
  		font-size: 100px;
}
	.rectangulosoutros {
  height: 100px;
  width: 650px;
  background-color: #f5de0f;
  position: absolute;
  top: 500px;
  left: 0px;
  		font-size: 100px;
}
	.rectangulobalcao {
  height: 400px;
  width: 125px;
  background-color: #ffffff;
  position: absolute;
  top: 200px;
  left: 650px;
  		font-size: 100px;
}

</style>		



</head>
<body>
	<div id="show"></div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('data.php')
			}, 1000);
		});
	</script>
	<div class="relogio" id="relogio"></div>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#relogio').load('relogio.php')
			}, 1000);
		});
	</script>
	
		<div class="som" id="som"></div>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#som').load('darsom.php')
			}, 1000);
		});
	</script>


	<div class="aesgama">www.senhas.aesg.pt</div>	
	<div class="alunostexto">Alunos</div>
	<div class="sasetexto">SASE</div>
	<div class="matriculastexto">Matriculas</div>
	<div class="outrostexto">Outros assuntos</div>

	<div class="balcaotexto">Balcão</div>
	<div class="balcaoa">A</div>
	<div class="balcaob">B</div>
	<div class="balcaoc">C</div>
	<div class="balcaod">D</div>
	<div class="logo"></div>

	<div class="rectanguloalunos"></div>
	<div class="videofinalistas">
<iframe frameborder="0" width="650" height="450" src="https://www.youtube.com/embed?rel=0&autoplay=1&loop=1&mute=1&listType=playlist&list=PLTOQXkwZQdgiz1iztxGJjJGprAqqFMsuk">
</iframe>
	</div>
	<div class="rectangulosase"></div>
	<div class="rectangulomatricula"></div>
	<div class="rectangulosoutros"></div>
	<div class="rectangulobalcao"></div>
	<div class="marquee"><marquee>Escola Secundária Sebastião da Gama - A tolerância de senhas é de 3 números.</marquee></div>

<?php @include 'darsom.php';
    require('functions.php');
error_reporting(0);
?>
</body>
</html>
