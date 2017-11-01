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
				echo form_open('http://localhost/viralate/pessoas/cadastrar');
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
			if(isset($status)){
				if($status == 1){

					echo '<div class="alert alert-success">Parabéns seu cadastro foi realizado com sucesso!<br>Para continuar <a href="http://localhost/viralate/pessoas/login">Clique aqui</a></div>';
				}elseif($status == 0){
					echo '<div class="alert alert-danger">E-mail já existente, por favor, escolha outro e-mail.</div>';
				}
			}
			
			?>
		</div>
	</body>
</html>