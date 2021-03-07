<?php 
    $limitePag = 5;
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        $inicio = ($pg * $limitePag)-$limitePag;
        $sql = mysql_query("select * from postagem order by datapost asc LIMIT $inicio,$limitePag");
        while($linha = mysql_fetch_array($sql)){
        $id = $linha['id'];
            $Titulo = $linha['titulopost'];
            $bloco1 = $linha['bloco1'];
            $bloco2 = $linha['bloco2'];
            $datapost = $linha['datapost'];
    ?>