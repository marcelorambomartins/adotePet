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
				echo form_label('Idade (anos)','idade');
				echo '<br>';
				echo form_input('idade', set_value('idade'));
				echo '<br>';

					$opcoes = array(
				  '' => 'Selecione',
                  'pequeno'  => 'Pequeno',
                  'medio'    => 'Médio',
                  'grande'   => 'Grande',
                   );

				echo form_label('Porte (Kg)','porte');
				echo '<br>';
				echo form_dropdown('porte', $opcoes, 'selecione');
				echo '<br><br>';
				echo '<h3>Caracteristicas</h3>';
				echo '<br>';

				echo form_checkbox('castrado', 'castrado', false);
				echo form_label(' Castrado','castrado');
				echo '<br>';
				echo form_checkbox('vacinado', 'vacinado', false);
				echo form_label(' Vacinado','vacinado');
				echo '<br>';
				echo form_checkbox('adotado', true, false);
				echo form_label(' Adotado','adotado');

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