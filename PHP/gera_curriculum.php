<?php

$nome = $_POST['nome'];

$nacionalidade = $_POST['nacionalidade'];

$idade = $_POST['idade'];

$sexo = $_POST['sexo'];

$estadoCivil = $_POST['estado-civil'];

$estado = $_POST['estados'];

$cidade = $_POST['cidade'];

$endereco = $_POST['endereco'];

$telefone = $_POST['telefone'];

$email = $_POST['email'];

$objetivo = $_POST['objetivo'];

foreach ($_POST['curso'] as $curso) {
    $cursos[] = $curso;
}

foreach ($_POST['instituicao'] as $instituicao) {
    $instituicoes[] = $instituicao;
}

foreach ($_POST['conclusao'] as $conclusao) {
    $conclusoes[] = $conclusao;
}

foreach ($_POST['ano'] as $ano) {
    $anos[] = $ano;
}

foreach ($_POST['empresa'] as $empresa) {
    $empresas[] = $empresa;
}

foreach ($_POST['ano-entrada'] as $anoEntrada) {
    $anosEntrada[] = $anoEntrada;
}

foreach ($_POST['ano-saida'] as $anoSaida) {
    $anosSaida[] = $anoSaida;
}

foreach ($_POST['cargo'] as $cargo) {
    $cargos[] = $cargo;
}

foreach ($_POST['atividade-cargo'] as $atividadeCargo) {
    $atividadeCargos[] = $atividadeCargo;
}

foreach ($_POST['qualificacao'] as $qualificacao) {
    $qualificacoes[] = $qualificacao;
}

foreach ($_POST['informacoes-adicionais'] as $informacoesAdicionais) {
    $informacoesAdicionaiss[] = $informacoesAdicionais;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style_curriculumPage.css">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <title>Curriculum</title>

    <script src="../js/hidePrintButton.js"></script>
</head>

<body>
    <h1><?php echo $nome ?></h1>
    </br>
    <p><?php echo $nacionalidade ?>, <?php echo $estadoCivil ?>, <?php echo $idade ?> anos
    </br><?php echo $endereco ?></br><?php echo $cidade ?>, <?php echo $estado ?></br>
    <?php echo $telefone ?>, <?php echo $email ?></p></br>

    <h2>OBJETIVO</h2>
    <hr>
    <p><?php echo $objetivo ?></p>

    <h2>FORMAÇÃO</h2>
    <hr>
    <?php 
        $html_model_formacao = '<p> - %s. %s, %s %s</p>';
        for($i = 0; $i < count($cursos); $i++){
            printf($html_model_formacao, $cursos[$i], $instituicoes[$i], $conclusoes[$i], $anos[$i]);
        }
    ?>

    <h2>EXPERIÊNCIA PROFISSIONAL</h2>
    <hr>
    <?php 
        $html_model_experiencia = '<p>- %s</br>Cargo: %s</br>Principais atividades: %s</br>Data de entrada: %s,  Data de saída: %s</p></br>';
        for($i = 0; $i < count($cargos); $i++){
            printf($html_model_experiencia, $empresas[$i], $cargos[$i], $atividadeCargos[$i], $anosEntrada[$i], $anosSaida[$i]);
        }
    ?>

    <h2>QUALIFICAÇÕES E ATIVIDADES COMPLEMENTARES</h2>
    <hr>
    <?php 
        $html_model_qualificacoes = '<p>- %s</p>';
        for($i = 0; $i < count($qualificacoes); $i++){
            printf($html_model_qualificacoes, $qualificacoes[$i]);
        }
    ?>

    <h2>INFORMAÇÕES ADICIONAIS</h2>
    <hr>
    <?php
        $html_model_informacoes_adicionais = '<p>- %s</p>';
        for($i = 0; $i < count($informacoesAdicionaiss); $i++){
            printf($html_model_qualificacoes, $informacoesAdicionaiss[$i]);
        }
    ?>

    <button onclick="printpage()" id="print_button">Salvar</button>

</body>

</html>