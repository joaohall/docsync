<h1>Seja Bem vindo</h1>
<h5>Suas próximas consultas</h5>
<div class="my-4 bg-secondary" style="height: 1px;"></div>
<section class="d-flex gap-3 flex-wrap">
    <?php
    $sql = "SELECT * FROM consulta AS c
    INNER JOIN paciente AS p
    ON p.id_paciente = c.paciente_id_paciente
    INNER JOIN medico AS m
    ON m.id_medico = c.medico_id_medico";
    $res = $conn->query($sql);

	$qtd = $res->num_rows;
while($row = $res->fetch_object()){
        print "<div style='min-width: 19rem' class='bg-white p-4 rounded border border-secondary'>
            <div class='d-flex col justify-content-between'>
                <div>
                    <h5 class='m-0'>Consulta de:</h5>
                    <h3 class='mb-0'>".$row->nome_paciente."</h3>
                </div>
            </div>
            <div class='my-2 w-100 bg-black' style='height: 1px;'>
            </div>
            <h4 class='text-black'>Data:<span style='font-size: 1rem;'>"." ".$row->data_consuta."</span></h4>
            <h4 class='text-black'>Médico:"." ".$row->nome_medico."</h4>

        </div>
        ";
}
 ?>
</section>