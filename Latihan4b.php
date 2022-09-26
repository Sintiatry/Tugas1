<?php

$Negaraawal = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
$Negarabaru = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4b</title>
</head>
<body>
        <h3>Daftar Negara ASEAN awal :</h3>
        <?php
        
        for ($i = 0; $i < count($Negaraawal); $i++){
            echo "<li>$Negaraawal[$i]";
        }
        ?>

        <br>
        <h3>Daftar Negara ASEAN baru :</h3>
        <?php
        
        for ($i = 0; $i < count($Negarabaru); $i++){
            echo "<li>$Negarabaru[$i]";
        }
        ?>
</body>
</html>