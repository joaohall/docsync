<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$paciente = $_POST['paciente_id_paciente'];
			$data = $_POST['data_prontuario'];
			$descricao = $_POST['descricao'];

			$sql = "INSERT INTO prontuarios (paciente_id_paciente, data_prontuario, descricao) VALUES ('{$paciente}', '{$data}', '{$descricao}')";

			$res = $conn->query(query: $sql);

		switch ($res) {
			case true:
				print "<script>alert('Prontuário registrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
			default:
				print "<script>alert('Algo deu errado!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
		}
			break;
		
		case 'editar':
			$paciente = $_POST['paciente_id_paciente'];
			$data = $_POST['data_prontuario'];
			$descricao = $_POST['descricao'];


			$sql = "UPDATE prontuarios SET 
						paciente_id_paciente='{$paciente}',
						data_prontuario='{$data}', 
						descricao='{$descricao}'
					WHERE id_prontuario=".$_REQUEST['id_prontuario'];

			$res = $conn->query($sql);

		switch ($res) {
			case true:
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
			default:
				print "<script>alert('Deu errado!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
		}
			break;

		case 'excluir':
			$sql = "DELETE FROM prontuarios
					WHERE id_prontuario=".$_REQUEST['id_prontuario'];

			$res = $conn->query($sql);

		switch ($res) {
			case true:
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
			default:
				print "<script>alert('Deu errado!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
		}
			break;
	}
?>