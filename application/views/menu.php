<nav role="navigation" class="navbar navbar-default">
	<div class="navbar-header">
	<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		<span class="sr-only">Navegação Responsiva</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	</div>
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://localhost/viralate/home"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="http://localhost/viralate/caes/listar"><span class="fa fa-paw"></span> Animais para adoção</a></li>
			<li><a href="http://localhost/viralate/caes/cadastrar"><span class="fa fa-paw"></span> Cadastrar Caes</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
			$usertype=0;
			if($usertype==1):
      		echo'<li><a href="http://localhost/viralate/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
      		elseif($usertype==2):
      		echo'<li><a href="http://localhost/viralate/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
      		else:
			echo'<li><a href="http://localhost/viralate/pessoas/cadastrar"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>';
      		echo'<li><a href="http://localhost/viralate/pessoas/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';

      		endif;
      		?>
		</ul>
	</div>
</nav>