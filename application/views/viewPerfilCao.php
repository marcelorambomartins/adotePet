<!DOCTYPE html>
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
          if($cao['adotado']){
             echo '<a class="list-group-item"><i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp;Adotado</a>';

          }else{
            if($_SESSION['listaCaesAdotar'] != null)
            {
                  if(in_array($cao['id'], $_SESSION['listaCaesAdotar'])){

                      $caminho ='http://localhost/viralate/adocoes/cadastrar/' . $_SESSION['idpessoa'] . '/'. $cao['id'];
                    echo '<br><a  id="btnAdotar" href="' . $caminho . '"><button disabled="disabled" class="btn btn-success" style="width:100%"><i class="fa fa-heart fa-fw"></i> Adotar</button></a>';
                  }else{
                    $caminho ='http://localhost/viralate/adocoes/cadastrar/' . $_SESSION['idpessoa'] . '/'. $cao['id'];
                    echo '<br><a  id="btnAdotar" href="' . $caminho . '"><button class="btn btn-success" style="width:100%"><i class="fa fa-heart fa-fw"></i> Adotar</button></a>';
                  }
            }else{
                      $caminho ='http://localhost/viralate/adocoes/cadastrar/' . $_SESSION['idpessoa'] . '/'. $cao['id'];
                    echo '<br><a  id="btnAdotar" href="' . $caminho . '"><button class="btn btn-success" style="width:100%"><i class="fa fa-heart fa-fw"></i> Adotar</button></a>';
            }
              
          }

          if(isset($_SESSION['logado'])) {
            if($_SESSION['usertype'] == 1 or $_SESSION['usertype'] == 2){
              echo '<br><br><a href="http://localhost/viralate/caes/editar/'.$cao['id'].'"<button class="btn btn-primary"  style="width:100%"><i class="fa fa-pencil fa-fw"></i> Editar</button></a>';
            }
          }

           if(isset($_SESSION['logado'])) {
              if($_SESSION['usertype'] == 1){
                echo '<br><br><button class="btn btn-danger" href="#" style="width:100%"><i class="fa fa-trash fa-fw"></i> Excluir</button>';
              }
          }
		  
		  	
			}
      echo '<br>';//Pra não deslocar a coluna da edição pra esquerda.
		?>
		</div>
    </div>
    <div class="col-sm-9 text-left"> 
      <?php
          foreach ($dadosCao as $cao){
            if($cao['idade']==1){
              $anos = "ano";
            }elseif($cao['idade']==0){
              $anos = "anos";
            }elseif($cao['idade']>1){
              $anos = "anos";
            }

            echo '<h1>' . $cao['nome'] . '</h1><hr>';
            echo '<h4>Raça: ' . $cao['raca'] . '</h4>';
            echo '<h4>Idade: ' . $cao['idade'] . ' '.$anos.' </h4>';
            echo '<h4>Sexo: ' . $cao['sexo'] . '</h4>';
            echo '<h4>Porte: ' . $cao['porte'] . '</h4>';
            echo '<br>';
            if($cao['castrado']){
              echo '<h4>Está castrado</h4>';              
            }else{
              echo '<h4>Não está castrado</h4>';                            
            }
            if($cao['vacinado']){
              echo '<h4>Está vacinado</h4>';              
            }else{
              echo '<h4>Não está vacinado</h4>';                            
            } 
            if($cao['adotado']){
              echo '<h4>Já foi adotado</h4>';              
            }else{
              echo '<h4>Ainda não foi adotado</h4>';                            
            }                       
            echo '<br>';            
            echo '<h4>Descrição: ' . $cao['descricao'] . '</h4>';
          }
      ?>
    </div>
  </div>
</div>


		
	</div>

	</body>
</html>
