<?php
if (isset($_POST['task'])) {
    $texto = $_POST['task'];
  
    $arquivo = fopen('task.txt', 'w');
    fwrite($arquivo, $texto);
    fclose($arquivo);
}
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
    <form method="POST" action="index.php">
        <input type="text" name="task" class="task_input">
        <button type="submit" class="add_bnt" name="submit">Adicionar</button>
    </form> <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefas</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</th>
                <td class= "tarefas">Comprar leite</th>
                <td class="deletar">
                <th><a href="#">X</a></th>
            </tr>
        </tbody>
    </table>
</body>
</html>