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
				echo form_open('pessoas/cadastrar');
				echo form_label('Nome','nome');
				echo '<br>';
				echo form_input('nome', set_value('nome'));
				echo '<br>';
				echo form_label('Email','email');
				echo '<br>';
				echo form_input('email', set_value('email'));
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

			
			if($status):
					echo '<div class="alert alert-success">Parabéns seu cadastro foi realizado com sucesso!<br>Para continuar <a href="../login">Clique aqui</a></div>';
			else:
					echo '<p> 
				Já possui cadastro? <a href="../login">Clique aqui</a>
						</p>';
			endif;

			
			?>
		</div>
	</body>
</html>