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
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
			<h3 class="text-center">Crie sua conta</h3>
			<?php
				echo form_open('http://localhost/viralate/pessoas/cadastrar');
				echo form_label('Nome','nome');
				$inputNome = array(
					'name' => 'nome',
					'class' =>'form-control',
				);
				echo form_input($inputNome);
				echo '<br>';

				echo form_label('Email','email');
				$inputEmail = array(
					'name' => 'email',
					'class' => 'form-control',
				);
				echo form_input($inputEmail);
				echo '<br>';	

				echo form_label('Senha','senha');
				$inputSenha = array(
					'name' => 'password',
					'class' => 'form-control',
				);			
				echo form_password($inputSenha);

				echo '<br><br>';
				echo '<button class="btn btn-success" type="submit">Enviar</button>';
				echo form_close();

			?>
			</div>
			<div class="col-sm-4"></div>
		</div>

		<div class="row text-center">
			<?php

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
	</div>
	</body>
</html>