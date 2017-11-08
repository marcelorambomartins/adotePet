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
		<div id='alert' class="row text-center"><!--Div dos Alert-->
			<?php

				if(isset($formerror)){
					if($formerror):
						echo '<div class="alert alert-danger">'.$formerror.'</div>';
					endif;
				}

				if(isset($status)){
					if($status):
						echo '<div class="alert alert-success">Parabéns o cadastro foi realizado com sucesso!</div>';
					endif;
				}
			?>
			<h3 class="text-center">Cadastrar Cães</h3>	
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
			<?php
			echo form_open_multipart('http://localhost/viralate/caes/cadastrar');
				echo form_label('Nome','nome');
				$inputNome = array(
					'name' => 'nome',
					'class' => 'form-control'
				);
				echo form_input($inputNome);


				echo form_label('Raça','raca');
				$inputRaca = array(
  						'name' => 'raca',
  						'class' => 'form-control'
				);
				echo form_input($inputRaca);


				
				echo form_label('Idade (anos)','idade');
				$inputIdade = array(
  						'name' => 'idade',
  						'class' => 'form-control',
  						'type' => 'number'
				);
				echo form_input($inputIdade);


				$opcoesSexo = array(
				  '' => 'Selecione',
                  'Fêmea'  => 'Fêmea',
                  'Macho'   => 'Macho',
                   );

				echo form_label('Sexo','sexo');
				echo '<br>';
				echo form_dropdown('sexo', $opcoesSexo, 'selecione','class="form-control"');
				echo '<br>';

					$opcoesPorte = array(
				  ''         => 'Selecione',
                  'Pequeno'  => 'Pequeno',
                  'Médio'    => 'Médio',
                  'Grande'   => 'Grande',
                   );

				echo form_label('Porte (Kg)','porte');
				echo '<br>';
				echo form_dropdown('porte', $opcoesPorte, 'selecione','class="form-control"');
				echo "<br><hr>";

				echo '<h4 class="text-center">Caracteristicas</h4>';
				$checkboxCastrado = array(
    				'name'        => 'castrado',
    				'value'       => TRUE,
    				'checked'     => FALSE,
    				'style'       => 'zoom:2',
    			);
				echo form_checkbox($checkboxCastrado);
				echo form_label(' Castrado','castrado');
				echo "<br>";
				

				$checkboxVacinado = array(
    				'name'        => 'vacinado',
    				'value'       => TRUE,
    				'checked'     => FALSE,
    				'style'       => 'zoom:2',
    			);
				echo form_checkbox($checkboxVacinado);
				echo form_label(' Vacinado','vacinado');
				echo "<br>";


				$checkboxAdotado = array(
    				'name'        => 'adotado',
    				'value'       => TRUE,
    				'checked'     => FALSE,
    				'style'       => 'zoom:2',
    			);
				echo form_checkbox($checkboxAdotado);
				echo form_label(' Adotado','adotado');
				echo '<br><br>';
				
				
				echo "</div>";
				echo "<div class='col-sm-2'></div>";
				echo "<div class='col-sm-4'>";
				


				echo form_label('Imagem','imagem');
				echo '<input class="form-control-file" type="file" name="imagem" size="1000" accept="image/*"/>';
				echo '<hr><br><br>';

				 $data = array(
        			'name'        => 'descricao',
        			'class'       => 'form-control',
			        'value'       => set_value('descricao'),
			        'rows'        => '10',
			        'cols'        => '30',
  				 );

				echo form_label(' Escreva algo sobre ele','descricao');
				echo '<br>';
    			echo form_textarea($data);		
				echo '<br><br>';
								

				echo '<button class="btn btn-success" type="submit">Enviar</button>';
				echo form_close();

			?>
			
			</div>
			<div class="col-sm-1"></div>
		</div>

		

	</div>
	</body>
</html>