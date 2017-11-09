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
				<?php
					if(isset($_SESSION['logado'])){
						if($_SESSION['usertype'] == 1 or $_SESSION['usertype'] == 2){
							echo '<li><a href="http://localhost/viralate/caes/cadastrar"><span class="fa fa-paw"></span> Cadastrar Caes</a></li>';
						}
					}
				?>
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
			if(isset($_SESSION['logado'])) {
				echo'<div class="btn-link">';
				echo'<button style="text-decoration:none" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['nomepessoa'].'</button>';
				echo'<ul class="dropdown-menu" role="menu">';
				echo'<li><a href="http://localhost/viralate/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
				echo'<li><a href="http://localhost/viralate/pessoas/alterar"><span class="glyphicon glyphicon-list-alt"></span> Editar Cadastro</a></li>';
					if($_SESSION['usertype'] == 1){
						echo'<li><a href="http://localhost/viralate/pessoas/gerenciar"><span class="glyphicon glyphicon-list-alt"></span> Gerenciar Usuários</a></li>';
						echo'<li><a href="http://localhost/viralate/adocoes/listar"><span class="glyphicon glyphicon-list-alt"></span> Gerenciar Adoções</a></li>';
					}
					if($_SESSION['usertype'] == 2){
						echo'<li><a href="http://localhost/viralate/adocoes/listar"><span class="glyphicon glyphicon-list-alt"></span> Gerenciar Adoções</a></li>';
					}

				echo'</ul></div>';
			}else{
				echo'<li><a href="http://localhost/viralate/pessoas/cadastrar"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>';
      			echo'<li><a href="http://localhost/viralate/pessoas/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
			}

      		?>
		</ul>
	</div>
</nav>