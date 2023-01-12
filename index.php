
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { #$_SERVER est un tableau qui contient des informations comme l'en-têtes, dossiers et chemins du script.

    $task1 = $_POST["task1"];
    $tasks = json_decode(file_get_contents("tasks.json"), true);# le tasks.json entre paranthese permet de le lier au fichier tasks.json
    $tasks[] = $task1;
    file_put_contents("tasks.json", json_encode($tasks)); # Quand l'utilisateur ecris les tâches, le script PHP traite les données et les ajoute au fichier JSON en utilisant les fonctions json_encode() et file_put_contents(). 
}
$tasks = json_decode(file_get_contents("tasks.json"), true); #le script PHP lie les données du fichier tasks.json et les affiche sur le site en utilisant la fonction json_decode().
foreach ($tasks as $task) {
    echo "$task<br>";
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDoList</title>
</head>
<body>
    <form action="" method="post">
    <div>
        <label for="task1">Insérer une tâche:</label>
        <input type="text" id="task1" name="task1">
        
    </div>
    <div class="button">
        <button type="submit">Envoyer !</button>
    </div>
    </form>
</body>
</html>