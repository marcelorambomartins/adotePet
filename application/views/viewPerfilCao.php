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
            echo '<br><a class="btn btn-success" href="#" style="width:100%"><i class="fa fa-heart fa-fw"></i> Adotar</a>';
          }

           echo '<br><br><a class="btn btn-primary" href="#" style="width:100%"><i class="fa fa-pencil fa-fw"></i> Editar</a>';
		  
		  	
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
