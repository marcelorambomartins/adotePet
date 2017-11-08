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
			<h3 class="text-center">Entrar</h3>			
			<?php
				echo form_open('http://localhost/viralate/pessoas/login');
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
				if($formerror):
					echo '<div class="alert alert-danger text-center">'.$formerror.'</div>';
				endif;

				if(isset($loginfail)){
					if($loginfail){
					echo '<div class="alert alert-danger text-center">Email ou Senha Incorretos</div>';
					}		
				}
					
			?>
			<p class="text-center"> 
				Não possui cadastro? <a href="http://localhost/viralate/pessoas/cadastrar">Clique aqui</a>
			</p>
			</div>
			<div class="col-sm-4"></div>			
		</div>
	</div>
	</body>
</html>