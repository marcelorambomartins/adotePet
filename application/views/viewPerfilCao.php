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
    	<img src='/../images/dogdefault.png' height='100%' width='100%'/>
    	</div>
    	<div class="list-group text-left" >
    	<?php
    		foreach ($dadosCao as $cao) 
    		{
		 	echo ' <a class="list-group-item" href="#"><i class="fa fa-paw fa-fw" aria-hidden="true"></i>&nbsp; Pastor Alemão</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-venus-mars fa-fw" aria-hidden="true"></i>&nbsp; Macho</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-expand fa-fw" aria-hidden="true"></i>&nbsp;' . $cao['porte'] . '</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-heartbeat fa-fw" aria-hidden="true"></i>&nbsp; Vacinado</a>';
		  	echo '<a class="list-group-item" href="#"><i class="fa fa-scissors fa-fw" aria-hidden="true"></i>&nbsp; Castrado</a>';
			}
		?>
		</div>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
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
