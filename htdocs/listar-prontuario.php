<h1>Listar Prontuários</h1>
<?php
	$sql = "SELECT * FROM prontuarios AS c
            INNER JOIN paciente AS p
            ON p.id_paciente = c.paciente_id_paciente
    ";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Data</th>";
		print "<th>Descrição</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_prontuario."</td>";
			print "<td>".$row->nome_paciente."</td>";
			print "<td>".$row->data_prontuario."</td>";
			print "<td class='descricao'><div style='width:30rem; white-space: pre-wrap;  word-wrap: break-word;'>".$row->descricao."</div></td>";
			print "<td style='width:15%'>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-prontuario&id_prontuario=".$row->id_prontuario."';\">Editar</button>
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-prontuario&acao=excluir&id_prontuario=".$row->id_prontuario."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
?>
