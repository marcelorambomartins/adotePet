<!DOCTYPE html>
	<head>
		<?php
		$this->load->view('head');
		?>
    <script>
		function concluir() {
			alert("função ainda não implementada");
		}
		</script>

	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
	<div class="container">
  <?php
    if(isset($_SESSION['logado'])) {
       foreach ($dadosCao as $cao){
            if($_SESSION['listaCaesAdotar'] != null){
              if(in_array($cao['id'], $_SESSION['listaCaesAdotar'])){
                echo '<div class="alert alert-success text-center">';
                echo '<p>Sua solicitação foi enviada para os administradores da ONG. Em breve eles entrarão em contato com você!</p></div>';
              }
            }
        }
    }
    
  ?>

		<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav fixed well">
    	<div style="height: 200px">
    	<?php 
        foreach ($dadosCao as $cao){
        echo "<img src='http://localhost/viralate/images/dogs/" . $cao['id'] . "/" . $cao['imagem']."' height='100%' width='100%'>";
        }
      ?>
    	</div>
    	<div class="list-group text-left" >
    	<?php
    		foreach ($dadosCao as $cao) 
    		{
		 	  echo '<a class="list-group-item"><i class="fa fa-paw fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['raca'] . '</a>';
		  	echo '<a class="list-group-item"><i class="fa fa-venus-mars fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['sexo'] . '</a>';
		  	echo '<a class="list-group-item"><i class="fa fa-expand fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['porte'] . '</a>';
          if($cao['vacinado']){
              echo '<a class="list-group-item"><i class="fa fa-heartbeat fa-fw" aria-hidden="true"></i>&nbsp;Vacinado</a>';
          }
          if($cao['castrado']){
            echo '<a class="list-group-item"><i class="fa fa-scissors fa-fw" aria-hidden="true"></i>&nbsp;Castrado</a>';
          }
          
           if(isset($_SESSION['logado'])) {
              if($_SESSION['usertype'] == 1){
                echo '<br><br><button onclick="concluir()" class="btn btn-danger" href="#" style="width:100%"><i class="fa fa-trash fa-fw"></i> Excluir</button>';
              }
          }
			}
      echo '<br>';//Pra não deslocar a coluna da edição pra esquerda.
		?>
		</div>
    </div>
    <div class="col-sm-6 text-left"> 
      <?php
          foreach ($dadosCao as $cao){
            echo form_open_multipart('http://localhost/viralate/caes/alterar/'.$cao['id'].'/'.$cao['imagem']);
            echo form_label('Nome','nome');
            $inputNome = array(
              'name' => 'nome',
              'class' => 'form-control'
            );
            echo form_input($inputNome, $cao['nome']);
            echo '<br>';

            echo form_label('Raça','raca');
            $inputRaca = array(
                  'name' => 'raca',
                  'class' => 'form-control'
            );
            echo form_input($inputRaca, $cao['raca']);
            echo '<br>';

            
            echo form_label('Idade (anos)','idade');
            $inputIdade = array(
                  'name' => 'idade',
                  'class' => 'form-control',
                  'type' => 'number'
            );
            echo form_input($inputIdade, $cao['idade']);
            echo '<br>';

            $opcoesSexo = array(
              '' => 'Selecione',
                      'Fêmea'  => 'Fêmea',
                      'Macho'   => 'Macho',
                       );

            echo form_label('Sexo','sexo');
            echo '<br>';
            echo form_dropdown('sexo', $opcoesSexo, $cao['sexo'],'class="form-control"');
            echo '<br>';

              $opcoesPorte = array(
              ''         => 'Selecione',
                      'Pequeno'  => 'Pequeno',
                      'Médio'    => 'Médio',
                      'Grande'   => 'Grande',
                       );

            echo form_label('Porte','porte');
            echo '<br>';
            echo form_dropdown('porte', $opcoesPorte, $cao['porte'],'class="form-control"');
            echo "<br>";

            $data = array(
                  'name'        => 'descricao',
                  'class'       => 'form-control',
                  'value'       => $cao['descricao'],
                  'rows'        => '5',
                  'cols'        => '30',
               );

            echo form_label(' Escreva algo sobre ele','descricao');
            echo '<br>';
              echo form_textarea($data);    
            echo '<br><br>';

            
            echo "</div>";
            echo "<div class='col-sm-3'>";
            


            echo form_label('Imagem','imagem');
            echo '<input class="form-control-file" type="file" name="imagem" size="1000" accept="image/*"/>';
            echo '<hr><br><br>';

             echo '<h4 class="text-center">Caracteristicas</h4>';
            $checkboxCastrado = array(
                'name'        => 'castrado',
                'value'       => TRUE,
                'checked'     => $cao['castrado'],
                'style'       => 'zoom:2',
              );
            echo form_checkbox($checkboxCastrado);
            echo form_label(' Castrado','castrado');
            echo "<br>";
            

            $checkboxVacinado = array(
                'name'        => 'vacinado',
                'value'       => TRUE,
                'checked'     => $cao['vacinado'],
                'style'       => 'zoom:2',
              );
            echo form_checkbox($checkboxVacinado);
            echo form_label(' Vacinado','vacinado');
            echo "<br>";


            $checkboxAdotado = array(
                'name'        => 'adotado',
                'value'       => TRUE,
                'checked'     => $cao['adotado'],
                'style'       => 'zoom:2',
              );
            echo form_checkbox($checkboxAdotado);
            echo form_label(' Adotado','adotado');
            echo '<br><br>';
                    

            echo '<button class="btn btn-success" type="submit">Alterar</button>';
            echo '<br>&nbsp';
            echo form_close();
          }
       
      ?>
    </div>
  </div>
</div>


		
	</div>

	</body>
</html>
