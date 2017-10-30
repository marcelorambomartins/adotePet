<html>
	<head>
		<?php
		$this->load->view('head');
		?>
	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>

		<div class="coluna col7 login text-center">
			<?php
				echo form_open('caes/cadastrar');
				echo form_label('Nome','nome');
				echo '<br>';
				echo form_input('nome', set_value('nome'));
				echo '<br>';
				echo form_label('Idade','idade');
				echo '<br>';
				echo form_input('idade', set_value('idade'));
				echo '<br>';				
				echo form_label('Porte','porte');
				echo '<br>';				
				echo form_input('porte', set_value('porte'));
				echo '<br><br>';				
				echo form_submit('enviar', 'Enviar');
				echo form_close();
				if(isset($formerror)){
					if($formerror):
						echo '<div class="alert alert-danger">'.$formerror.'</div>';
					endif;
				}
				

				if(isset($status)){
					if($status):
						echo '<div class="alert alert-success">Parabéns seu cadastro foi realizado com sucesso!<br>Para continuar <a href="login">Clique aqui</a></div>';
					endif;
				}
			

			
			?>
		</div>
	</body>
</html>