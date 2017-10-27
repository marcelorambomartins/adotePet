<nav role="navigation" class="navbar navbar-default">
	<div class="navbar-header">
	<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		<span class="sr-only">Navegação Responsiva</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a href="#" class="navbar-brand">Home</a>
	</div>
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#">Animais para adoção</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
			$usertype=0;
			if($usertype==1):
      		echo'<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
      		elseif($usertype==2):
      		echo'<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
      		else:
			echo'<li><a href="cadastrarpessoas"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>';
      		echo'<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
      		endif;
      		?>
		</ul>
	</div>
</nav>