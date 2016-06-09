<?php require("parte_topo.php"); ?>
<body onload="galeria();">
		
		<script type="text/javascript">
			function galeria(){
				var contador = 1;
				
				if(contador = 1){
					document.getElementById('img01').className="img_galeria_on";
					document.getElementById('img02').className="img_galeria_off";
					document.getElementById('img03').className="img_galeria_off";
					contador = contador + 1;
				}
				if(contador = 2){
					document.getElementById('img01').className="img_galeria_off";
					document.getElementById('img02').className="img_galeria_on";
					document.getElementById('img03').className="img_galeria_off";
					contador = contador + 1;
				}
				if(contador = 3){
					document.getElementById('img01').className="img_galeria_off";
					document.getElementById('img02').className="img_galeria_off";
					document.getElementById('img03').className="img_galeria_on";
					contador = contador + 1;
				}
				timer();
			}
			function timer(){
				setInterval('galeria()', 3000);
			}
		</script>
	
		<div class="galeria">
				<img src="galeria_01.jpg" class="img_galeria_on" id="img01">
				<img src="galeria_02.jpg" class="img_galeria_off" id="img02">
				<img src="galeria_03.jpg" class="img_galeria_off" id="img03">
		</div>
</body>
</html>
