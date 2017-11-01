<!DOCTYPE html>
	<head>
		<?php
		$this->load->view('head');
		?>
	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
			<div class="panel panel-default text-center">
				<h3 >Filtros</h3>
			</div>
			</div>
		</div>

		<div class="container-fluid">

			<div class="row"><!--inicio da row-->

			<?php
				foreach ($listacaes as $cao) {
					echo "<div class='col-sm-3'><!--inicio do bloco-->";
					echo "<div class='panel panel-default'>";
					echo "<div class='panel-body'>";
						echo "<a href='http://localhost/viralate/caes/visualizar/" . $cao['id'] . "'><img src='../images/dogdefault.png' alt='Ver mais fotos' height='100%' width='100%'></a>";
						echo "<p>Nome " . $cao['nome'] . "</p>";
						echo "<p>Porte " . $cao['porte'] . "</p>";
					echo "</div>";
					echo "<div class='panel-footer text-center'>";
						echo "<h5>Adotar</h5>";
					echo "</div></div></div><!--fim do bloco-->";
				}
			?>

			</div> <!-- fim da div row-->

		</div>
		
	</div>

	</body>
</html>
