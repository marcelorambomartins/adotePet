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
				echo form_open('login/logar');
				echo form_label('Email','email');
				echo '<br>';
				echo form_input('email', set_value('email'));
				echo '<br>';				
				echo form_label('Senha','senha');
				echo '<br>';				
				echo form_input('senha', set_value('senha'));
				echo '<br>';				
				echo form_submit('enviar', 'Enviar', array('class'=>'botao'));
				echo form_close();
			?>
		</div>
	</body>
</html>