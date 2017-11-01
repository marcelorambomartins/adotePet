<!DOCTYPE html>
	<head>

	<meta charset="utf-8">

	<title>Casas</title>

	<link rel="stylesheet" type="text/css" href="estilos2.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


  	<script>

  		var myapp = angular.module('myapp', []);

		myapp.controller('mainController',function($scope,$http,$interval){


  			$scope.refresh = function (){
  				

                $http({

					method: 'POST',
					url: 'controllerProcessador.php',
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: 
					{  
						action: 'refresh'
					}

					}).then(function successCallback(response) {
						console.log(response.data);

						$scope.dados = response.data;

					}, function errorCallback(response) {
						console.log(response);
					});
  				
  			}


  			$scope.escalonador = function (status){
  				

                $http({

					method: 'POST',
					url: 'controllerProcessador.php',
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: 
					{  
						action: 'escalonador',
						status: status
					}

					}).then(function successCallback(response) {
						console.log(response.data);

						$scope.dados = response.data;

					}, function errorCallback(response) {
						console.log(response);
					});
  				
  			}


  			
  			$scope.init = function () {
    			$scope.refresh();
			}


			$interval(function(){$scope.refresh()}, 1000);
			$interval(function(){$scope.escalonador(2)}, 10000);
			$interval(function(){$scope.escalonador(3)}, 20000);

  		});

  		
  	</script>


	</head>
	<body ng-app="myapp">

	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
     			</button>
     			<a class="navbar-brand" href="#">WebSiteName</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#">Home</a></li>
     			<li><a href="#">Page 1</a></li>
      			<li><a href="#">Page 2</a></li>
      			<li><a href="#">Page 3</a></li>
    		</ul>
    		</div>
  		</div>
	</nav>


	




	<div class="container" ng-controller="mainController" ng-init="init()">

		<div id="color" class="jumbotron text-center">
			<h1>Casas</h1>
		</div>

		<div class="container-fluid">
		  
		  <div class="row">
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center" onclick="alert('Hello')">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		   <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading text-center">
		          <h1>Casa1</h1>
		        </div>
		        <div class="panel-body">

			       		<img src="imagens/woods.jpg" height="100%" width="100%">
			       		<p>Nome</p>
			       		<p>Endreço</p>
		        </div>
		        <div class="panel-footer text-center">
		        	<h5>Acessar</h5>
		        </div>
		      </div> 
		    </div>
		  </div> <!--div row-->

		</div>
		
	</div>

	</body>
</html>
