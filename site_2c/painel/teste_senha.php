<?php
    $senha = 1234;

    $data = date("Ymd");

    echo '<br>';

    $total = $senha+$data;;

    $senha_cripto = md5($total);

    echo $senha_cripto;

?>