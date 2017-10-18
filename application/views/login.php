<html>
	<head>
		<?php
			include_once 'head.php';
		?>
	</head>
	<body>
		<?php
			include_once 'menu.php';
		?>
		<form class="formulario2" action="php/controller.php" method="GET">
            <input type="hidden" name="action" value="login"/>
            <input type="hidden" name="nome" value=""/>
            <p>
            <label>Email</label>
            <input type="email" name="email">
            </p>
            <p>
            <label>Senha</label>
            <input type="password" name="senha">
            </p>
            <input type="submit" value="Logar">
		</form>
		<form class="formulario2" action="cadastrar.php">
			<input type="submit" value="Cadastre-se aqui" />
		</form>
	
	

	
	
	
	</body>
</html>