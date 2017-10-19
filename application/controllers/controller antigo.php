<?php
    include_once '/../DB/conexaoDB.php';

    session_start();

	$funcao = $_GET["action"];
    $id = $_SESSION['id'];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];


    if(function_exists($funcao)){
		//chama a funcao
		if($funcao == "login"){
			call_user_func($funcao,$email,$senha);
        }else if($funcao == "cadastrar"){
            call_user_func($funcao,$nome,$email,$senha);
        }else if($funcao == "alterar"){
            call_user_func($funcao,$nome,$email,$senha,$id);
        }else if($funcao == "deletar"){
            call_user_func($funcao,$id);
		}else if($funcao == "logout"){
            call_user_func($funcao);
		}else{
			call_user_func($funcao);
		}
		
	}else{
		echo "<br>funçao não existe";
	}

    function login($email,$senha){
        echo "login";
        global $db;

            $logado = false;

			$r = $db->prepare('SELECT * FROM pessoa where email=?');
			$r->execute(array($email));

			$linhas = $r->fetchAll(PDO::FETCH_ASSOC);

			foreach($linhas as $linha) {
				if($linha['senha'] == $senha){

						 session_start();
						 $_SESSION['id'] = $linha['id'];
						 $_SESSION['nome'] = $linha['nome'];
						 $_SESSION['email'] = $linha['email'];
						 $_SESSION['senha'] = $linha['senha'];

						 $logado = true;
				}
			}

            if($logado){
                header("location: /../projeto1/list.php");
            }else{
                 header("location: /../projeto1/login.html");
            }


    }

    function cadastrar($nome,$email,$senha){
		global $db;
		$inserido = false;
		include_once 'validar_conta.php';
		if($aprovado==true){
			$_SESSION['resposta'] = false;
			$r = $db->prepare('INSERT INTO pessoa(nome,email,senha)
 					VALUES (:nome,:email,:senha)');
			$r->execute(array(
			':nome'=>$nome,
			':email'=>$email,
			':senha'=>$senha
			));
			if($r->rowCount() > 0) {
				$inserido = true;
			}
			header("location: /../projeto1/login.html");		
			return $inserido;
		}else{
			$_SESSION['resposta'] = $resposta;
			header("location: /../projeto1/cadastrar.php");
		}
    }

    function alterar($nome,$email,$senha,$id){
		global $db;
		$inserido = false;	
		$r = $db->prepare('UPDATE pessoa SET nome=:nome, email=:email, senha=:senha WHERE id=:id');
		$r->execute(array(
		':nome'=>$nome,
		':email'=>$email,
		':senha'=>$senha,
		':id'=>$id
		));
		$_SESSION['id'] = $id;
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		if($r->rowCount() > 0) {$inserido = true;}
		header("location: /../projeto1/alterar.php");
		return $inserido;
    }

    function deletar($id){
        echo "Conta deletada!!";
		global $db;
        $r = $db->exec("delete from pessoa where id=$id");
		session_destroy();		
		header("location: /../projeto1/login.html");		
    }
	
    function logout(){
		session_destroy();		
		header("location: /../projeto1/login.html");		
    }	
    
?>