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
			<h3>Altere seus dados</h3>
			<?php
				echo form_open('http://localhost/viralate/pessoas/alterar');
				echo form_label('Nome','nome');
				echo '<br>';
				echo form_input('nome', set_value('nome'));
				echo '<br>';
				echo form_label('Senha','senha');
				echo '<br>';				
				echo form_password('password', set_value('password'));
				echo '<br><br>';
				echo form_submit('enviar', 'Enviar');
				echo form_close();
				if($formerror):
					echo '<div class="alert alert-danger">'.$formerror.'</div>';
				endif;
			if(isset($status)){
				if($status == TRUE){
					echo '<div class="alert alert-success">Dados alterados com sucesso!</div>';
				}elseif($status == FALSE){
					echo '<div class="alert alert-danger">Não foi possível alterar seus dados.</div>';
				}
			}
			
			?>
		</div>
	</body>
</html>