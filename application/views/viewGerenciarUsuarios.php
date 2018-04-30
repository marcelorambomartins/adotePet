<!DOCTYPE html>
	<head>
		<?php
		$this->load->view('head');
		?>

		<script>
		function concluir() {
			alert("função ainda não implementada");
		}
		</script>

	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
	<div class="container">

		<?php
			if($listaPessoas == null){
				echo '<div class="alert alert-info text-center">';
				echo 'Sem Resultados';
				echo '</div>';
			}else{
				echo '<table class="table">';
				echo '<tr>';
				echo '<th>Nome</th>';
    			echo '<th>Telefone</th>';
    			echo '<th>Email</th>';
    			echo '<th>Data Cadastro</th>';
    			echo '<th></th><th></th><th></th>';
  				echo '</tr>';


  				foreach($listaPessoas as $pessoa) {
					echo "<tr>";
					echo "<td>" . $pessoa['nome'] . "</td>";
					echo "<td>" . $pessoa['telefone'] . "</td>";
					echo "<td>" . $pessoa['email'] . "</td>";
					//echo "<td>" . $pessoa['userType'] . "</td>";
					echo "<td>" . $pessoa['dataCadastro'] . "</td>";
					$caminhoAlterarPapel ='http://localhost/viralate/pessoas/alterarPapel/' . $pessoa['id'];
		            echo '<td onclick="concluir()"><a  id="btnAdotar" href="#"><button class="btn btn-success" style="width:100%"><i class="fa fa-pencil fa-fw"></i> Tornar Moderador</button></a></td>';
		            $caminhoBloquear ='http://localhost/viralate/pessoas/bloquear/' . $pessoa['id'];
		            echo '<td onclick="concluir()"><a  id="btnAdotar" href="#"><button class="btn btn-warning" style="width:100%"><i class="fa fa-ban fa-fw"></i> Bloquear</button></a></td>';
		            $caminhoDeletar ='http://localhost/viralate/pessoas/deletar/' . $pessoa['id'];
		            echo '<td onclick="concluir()"><a  id="btnAdotar" href="#"><button class="btn btn-danger" style="width:100%"><i class="fa fa-trash fa-fw"></i> Deletar</button></a></td>';
					echo "</tr>";
				}
			}
		?>

      </table>
		
	</div>


	</body>
</html>
