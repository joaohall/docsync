<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$paciente = $_POST['paciente_id_paciente'];
			$medico = $_POST['medico_id_medico'];
			$data = $_POST['data_consulta'];
			$hora = $_POST['hora_consulta'];
			$descricao = $_POST['descricao_consulta'];

			$sql = "INSERT INTO consulta (paciente_id_paciente,medico_id_medico, data_consuta, hora_consuta,descricao_consuta) VALUES ('{$paciente}', '{$medico}', '{$data}', '{$hora}', '{$descricao}')";

			$res = $conn->query(query: $sql);

		switch ($res) {
			case true:
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
			default:
				print "<script>alert('Deu errado!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
				break;
		}
			break;
		
		case 'editar':
			$paciente = $_POST['paciente_id_paciente'];
			$medico = $_POST['medico_id_medico'];
			$data = $_POST['data_consuta'];
			$hora = $_POST['hora_consulta'];
			$descricao = $_POST['descricao_consulta'];

			$sql = "UPDATE consulta SET 
						paciente_id_paciente='{$paciente}',
						medico_id_medico='{$medico}', 
						data_consuta='{$data}', 
						hora_consuta='{$hora}',
						descricao_consulta='{$descricao}'
					WHERE id_consulta=".$_REQUEST['id_consulta'];

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
			$sql = "DELETE FROM consulta
					WHERE id_consulta=".$_REQUEST['id_consulta'];

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