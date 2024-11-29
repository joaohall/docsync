<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Controle Clínico</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body style="background-color:rgba(0, 0, 0, .1)">
<div class="position-fixed z-3 bottom-0">
    <button id="toggle-button" class="btn btn-outline-danger">
        Toggle Navigation
    </button>
</div>
	<div id="navbar" class=" essa-e-a-barra-de-navegacao-chatgpt flex-shrink-0 p-3 position-fixed h-100 bg-white position-fixed" style="width: 280px;">
		<a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
			<span class="fs-5 fw-semibold">MedSync</span>
		</a>
		<ul class="list-unstyled ps-0">
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
					Médicos
				</button>
				<div class="collapse " id="dashboard-collapse" style="padding-inline:1.5rem">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						<li><a href="?page=cadastrar-medico" class="text-decoration-none text-dark rounded">Cadastrar</a></li>
						<li><a href="?page=listar-medico" class="text-decoration-none text-dark rounded">Listar</a></li>
					</ul>
				</div>
			</li>
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
					Pacientes
				</button>
				<div class="collapse" id="orders-collapse" style="padding-inline:1.5rem">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						<li><a href="?page=cadastrar-paciente" class="link-dark text-decoration-none text-dark rounded">Cadastrar</a></li>
						<li><a href="?page=listar-paciente" class="link-dark text-decoration-none text-dark rounded">Listar</a></li>
					</ul>
				</div>
			</li>
			<li class="mb-1">
				<button class="hover btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#consultas-collapse" aria-expanded="true">
					Consultas
				</button>
				<div class="collapse" id="consultas-collapse" style="padding-inline:1.5rem">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						<li><a href="?page=cadastrar-consulta" class="text-decoration-none text-dark rounded">Cadastrar</a></li>
						<li><a href="?page=listar-consulta" class="text-decoration-none text-dark rounded">Listar</a></li>
					</ul>
				</div>
			</li>
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#prontuario-collapse" aria-expanded="false">
					Registrar Prontuários
				</button>
				<div style="padding-inline:1.5rem" class="collapse" id="prontuario-collapse">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						<li><a href="?page=cadastrar-prontuario" class="link-dark rounded">Novo Prontuário</a></li>
						<li><a href="?page=listar-prontuario" class="link-dark rounded">Ver prontuários</a></li>
					</ul>
				</div>
			</li>
			<li class="border-top my-3"></li>
			
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
				Sua conta
			</button>
				<div style="padding-inline:1.5rem" class="collapse" id="account-collapse">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						<li><a href="#" class="link-dark rounded">Sair</a></li>
						<li><a href="#" class="link-dark rounded">Configurações da conta</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="row">
			<div class="col p-4">
				<?php
				//conexao com o banco de dados
				include("config.php");

				switch (@$_REQUEST["page"]) {
					case 'cadastrar-medico':
						include('cadastrar-medico.php');
						break;
					case 'editar-medico':
						include('editar-medico.php');
						break;
					case 'listar-medico':
						include('listar-medico.php');
						break;
					case 'salvar-medico':
						include('salvar-medico.php');
						break;

					case 'cadastrar-paciente':
						include('cadastrar-paciente.php');
						break;
					case 'editar-paciente':
						include('editar-paciente.php');
						break;
					case 'listar-paciente':
						include('listar-paciente.php');
						break;
					case 'salvar-paciente':
						include('salvar-paciente.php');
						break;

					case 'cadastrar-consulta':
						include('cadastrar-consulta.php');
						break;
					case 'editar-consulta':
						include('editar-consulta.php');
						break;
					case 'listar-consulta':
						include('listar-consulta.php');
						break;
					case 'salvar-consulta':
						include('salvar-consulta.php');
						break;
					case 'cadastrar-prontuario':
						include('cadastrar-prontuario.php');
						break;
					case 'listar-prontuario':
						include('listar-prontuario.php');
						break;
					case 'salvar-prontuario':
						include('salvar-prontuario.php');
						break;	

					default:
						include("home.php");
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script>
    // Aguarda o carregamento do DOM
    document.addEventListener("DOMContentLoaded", function () {
        // Seleciona o botão e a navbar
        const toggleButton = document.getElementById("toggle-button");
        const navbar = document.getElementById("navbar");

        // Adiciona o evento de clique para alternar a classe
        toggleButton.addEventListener("click", function () {
            // Alterna a classe 'd-none' (esconde/mostra a navbar)
            navbar.classList.toggle("d-none");
        });
    });
</script>

</body>

</html>