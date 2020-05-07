<?php
    if (isset($_GET['new'])) {
        require_once '.' .$_GET['new'].'.php';
    }
?>

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

<!DOCTYPE html>
<html>
<head>
    <title> Lista PHP </title>
</head>
<body>
    <div class="heading">   
        <h2> Minha Lista </h2>
    </div> 
    <form method="POST" action="new.php">
        <input type="text" name="task" class="task_input">
        <button href="new" type="submit" class="add_bnt" name="submit">Adicionar</button>
    </form> <br>
    <table>
        <thead>
            <tr>
                <th>Tarefas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class= "task"><p class="teste"> <? echo mb_strtolower( $texto, 'UTF-8' ); ?> </p></th>
            </tr>
        </tbody>
    </table>
</body>
</html>