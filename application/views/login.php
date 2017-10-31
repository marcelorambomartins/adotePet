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
				echo form_open('login');
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

				if(isset($loginfail)){
					if($loginfail){
					echo '<div class="alert alert-danger">Email ou Senha Incorretos</div>';
					}		
				}
					
			?>
			<p> 
				Não possui cadastro? <a href="Cadastrarpessoas">Clique aqui</a>
			</p>			
		</div>
	</body>
</html>