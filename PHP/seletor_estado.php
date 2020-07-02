<?php
    include 'estados.php';

    $html_model = '<option value="%s">%s</option>';

    foreach ($estadosBrasileiros as $UF => $estado){
        printf($html_model, $UF, $estado);
    }
?>