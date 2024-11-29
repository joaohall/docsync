<h1>Cadastrar prontuário</h1>
<form action="?page=salvar-prontuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Paciente</label>
		<select name="paciente_id_paciente" class="form-control">
			<option>Escolha um paciente</option>
			<?php
				$sql_1 = "SELECT * FROM paciente";

				$res_1 = $conn->query($sql_1);

				if($res_1->num_rows > 0){
					while($row_1 = $res_1->fetch_object()){
						print "<option value='{$row_1->id_paciente}'>{$row_1->nome_paciente}</option>";
					}
				}else{
					print "<option>Não possui pacientes</option>";
				}
			?>
		</select>
	</div>
	
	<div class="mb-3">
		<label>Data</label>
		<input type="date" name="data_prontuario" class="form-control">
	</div>
	<div class="mb-3">
	<div class="mb-3">
		<label>Descrição do prontuário</label>
		<textarea name="descricao" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>