<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];

			$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

			$res = $conn->query($sql);

			if($res==true){
				print"<script>alert('Cadastrado com sucesso');</script>";
				print"<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possível cadastrar');</script>";
				print"<script>location.href='?page=listar';</script>";
			}
			break;

			case 'editar':

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];

			$sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print"<script>alert('Editado com sucesso');</script>";
				print"<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possível alterar');</script>";
				print"<script>location.href='?page=listar';</script>";
			}

			break;

			case 'excluir':

				$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

				$res = $conn->query($sql);

				if($res==true){
					print"<script>alert('Exluido com sucesso');</script>";
					print"<script>location.href='?page=listar';</script>";
				}else{
					print"<script>alert('Não foi possível excluir');</script>";
					print"<script>location.href='?page=listar';</script>";
				}

			break;
		
	}
?>