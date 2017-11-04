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
				echo form_open('http://localhost/viralate/caes/cadastrar');
				echo form_label('Nome','nome');
				echo '<br>';
				echo form_input('nome', set_value('nome'));
				echo '<br>';
				echo form_label('Raça','raca');
				echo '<br>';
				echo form_input('raca', set_value('raca'));
				echo '<br>';
				echo form_label('Idade (anos)','idade');
				echo '<br>';
				echo form_input('idade', set_value('idade'));
				echo '<br>';

				$opcoesSexo = array(
				  '' => 'Selecione',
                  'Fêmea'  => 'Fêmea',
                  'Macho'   => 'Macho',
                   );

				echo form_label('Sexo','sexo');
				echo '<br>';
				echo form_dropdown('sexo', $opcoesSexo, 'selecione');
				echo '<br>';

					$opcoesPorte = array(
				  '' => 'Selecione',
                  'Pequeno'  => 'Pequeno',
                  'Médio'    => 'Médio',
                  'Grande'   => 'Grande',
                   );

				echo form_label('Porte (Kg)','porte');
				echo '<br>';
				echo form_dropdown('porte', $opcoesPorte, 'selecione');
				echo '<br><br>';
				echo '<h3>Caracteristicas</h3>';
				echo '<br>';

				echo form_checkbox('castrado', true, false);
				echo form_label(' Castrado','castrado');
				echo '<br>';
				echo form_checkbox('vacinado', true, false);
				echo form_label(' Vacinado','vacinado');
				echo '<br>';
				echo form_checkbox('adotado', true, false);
				echo form_label(' Adotado','adotado');
				echo '<br><br>';

				 $data = array(
        			'name'        => 'descricao',
			        'value'       => set_value('descricao'),
			        'rows'        => '10',
			        'cols'        => '50',
  				 );

				echo form_label(' Escreva algo sobre ele','descricao');
				echo '<br>';
    			echo form_textarea($data);		
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
						echo '<div class="alert alert-success">Parabéns seu cadastro foi realizado com sucesso!</div>';
					endif;
				}
			

			
			?>
		</div>
	</body>
</html>