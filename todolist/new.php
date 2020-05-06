<?php
if (isset($_POST['task'])) {
    $texto = $_POST['task'];
  
    $arquivo = fopen('task.txt', 'a');
    fwrite($arquivo, $texto . "\n");
    fclose($arquivo);
}
?>
<?php
$arquivo = 'task.txt';
$fp = fopen($arquivo,'r');
$texto = fread($fp, filesize($arquivo));
$texto = nl2br($texto);
?>
<?php
header('Location: https://n4528.herokuapp.com/');
?>
