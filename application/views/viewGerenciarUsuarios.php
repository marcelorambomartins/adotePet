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

      <table class="table">

      		<tr>
    			<th>Nome</th>
    			<th>Telefone</th>
    			<th>Email</th>
    			<th>Tipo Usuario</th>
    			<th>Data Cadastro</th>
  			</tr>
      <?php

      	foreach($listaPessoas as $pessoa) {
						echo "<tr>";
						echo "<td>" . $pessoa['nome'] . "</td>";
						echo "<td>" . $pessoa['telefone'] . "</td>";
						echo "<td>" . $pessoa['email'] . "</td>";
						echo "<td>" . $pessoa['userType'] . "</td>";
						echo "<td>" . $pessoa['dataCadastro'] . "</td>";
						//echo "<td><input type='button' value='verTrabalho' class='btn btn-success' onclick='acao(this.value," . $item['trabalhoID'] .")'/></td>";
						//echo "<td><input type='button' value='editarTrabalho' class='btn btn-info' onclick='acao(this.value," . $item['trabalhoID'] .")'/></td>";
						//echo "<td><input type='button' value='excluirTrabalho' class='btn btn-danger' onclick='acao(this.value," . $item['trabalhoID'] .")'/></td>";
						echo "</tr>";
		}

		?>

      </table>
		
	</div>


	</body>
</html>
