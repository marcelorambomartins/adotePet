<!DOCTYPE html>
	<head>
		<?php
		$this->load->view('head');
		?>

    <script type="text/javascript">
      
      function adotar(logado){

        if(logado){
          $(btnAdotar).attr("disabled","disabled");
          $(alertAdotar).show();
        }else{
          $(alertLogar).show();
        }
        
      }

    </script>
	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
	<div class="container">

  <div id="alertAdotar" class="alert alert-success text-center" style="display:none">
    <p>Sua solicitação foi enviada para os administradores da ONG. Em breve eles entraram em contato com você!</p>
  </div>

   <div id="alertLogar" class="alert alert-danger text-center" style="display:none">
    <p>Você deve estar logado para continuar!</p>
  </div>

		<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav fixed well">
    	<div style="height: 200px">
    	<img src='dogdefault.png' height='100%' width='100%'/>
    	</div>
    	<div class="list-group text-left" >
    	<?php
    		foreach ($dadosCao as $cao) 
    		{
		 	  echo '<a class="list-group-item" href="#"><i class="fa fa-paw fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['raca'] . '</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-venus-mars fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['sexo'] . '</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-expand fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['porte'] . '</a>';
          if($cao['vacinado']){
              echo '<a class="list-group-item" href="#"><i class="fa fa-heartbeat fa-fw" aria-hidden="true"></i>&nbsp;Vacinado</a>';
          }
          if($cao['castrado']){
            echo '<a class="list-group-item" href="#"><i class="fa fa-scissors fa-fw" aria-hidden="true"></i>&nbsp;Castrado</a>';
          }
          if($cao['adotado']){
             echo '<a class="list-group-item" href="#"><i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp;Adotado</a>';
          }else{

            echo '<br><button id="btnAdotar" class="btn btn-success" href="#" style="width:100%" onclick="adotar(' . isset($_SESSION['logado']) . ')"><i class="fa fa-heart fa-fw"></i> Adotar</button>';
          }

          if(isset($_SESSION['logado'])) {
            echo '<br><br><button class="btn btn-primary" href="#" style="width:100%"><i class="fa fa-pencil fa-fw"></i> Editar</button>';
          }

           if(isset($_SESSION['logado'])) {
              if($_SESSION['usertype'] == 1){
                echo '<br><br><button class="btn btn-danger" href="#" style="width:100%"><i class="fa fa-trash fa-fw"></i> Excluir</button>';
              }
          }
		  
		  	
			}
		?>
		</div>
    </div>
    <div class="col-sm-8 text-left"> 
      <?php
        foreach ($dadosCao as $cao) 
        {
          echo '<h1>' . $cao['nome'] . '</h1><hr>';
          echo '<p>' . $cao['descricao'] . '</p>';
        }
      ?>
      <hr>
      <h3>Mais Fotos</h3>
      <p>fotos...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


		
	</div>

	<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

	</body>
</html>
