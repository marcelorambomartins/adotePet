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
				<div class="panel panel-default text-left">			
					<?php
						if (isset($castrado)){
							$castrado = TRUE;
						}else{
							$castrado = FALSE;
						}
						if (isset($vacinado)){
							$vacinado = TRUE;
						}else{
							$vacinado = FALSE;
						}
						if (isset($adotado)){
							$adotado = TRUE;
						}else{
							$adotado = FALSE;
						}

						$atributos = array('id' => 'filtros');
						echo form_open('http://localhost/viralate/caes/filtrar',$atributos);
						echo form_checkbox('castrado', 'sim', $castrado, 'style=zoom:2');
						echo form_label('Castrado', 'castrado')."&nbsp&nbsp&nbsp&nbsp";
						echo form_checkbox('vacinado', 'sim', $vacinado, 'style=zoom:2');
						echo form_label('Vacinado', 'vacinado')."&nbsp&nbsp&nbsp&nbsp";			
						echo form_checkbox('adotado', 'sim', $adotado, 'style=zoom:2');
						echo form_label('Adotado', 'adotado')."&nbsp&nbsp&nbsp&nbsp";				
						

						echo '<button type="submit"><span class="glyphicon glyphicon-search"></span><span class="submit-text"></span></button>';


						echo form_close();			
					?>
				</div>
			</div>
		</div>

		<div class="container-fluid">

			<div class="row"><!--inicio da row-->

			<div class="alert alert-info text-center">
				<?php
					if($listacaes == null){
						echo "Sem Resultados";
					}else if($castrado == false and $vacinado == false and $adotado == false){
						echo "Todos os Resultados";
					}else{
						echo "Resultados para a busca";
					}
  				
  				?>
			</div>


			<?php
				foreach ($listacaes as $cao) {
					echo "<div class='col-sm-3'><!--inicio do bloco-->";
					echo "<div class='panel panel-default'>";
					echo "<div class='panel-body'>";
						echo "<a href='http://localhost/viralate/caes/visualizar/" . $cao['id'] . "'><img src='http://localhost/viralate/images/dogs/" . $cao['id'] . "/". $cao['imagem']."' alt='Ver mais fotos' height='100%' width='100%'></a>";
						echo "<p>Nome " . $cao['nome'] . "</p>";
						echo "<p>Porte " . $cao['porte'] . "</p>";
					echo "</div>";
					echo "<div class='panel-footer text-center'>";
						echo "<h5>Conhecer</h5>";
					echo "</div></div></div><!--fim do bloco-->";
				}
			?>

			</div> <!-- fim da div row-->

		</div>
		
	</div>

	</body>
</html>
