<?php

require __DIR__ . '/functions.php';
addMonstreBDD($_POST['name'],$_POST['strength'],$_POST['life'],$_POST['type']);
// On utilisera la ligne suivante "header('Location :index.php');" pour revenir. Mais j'ai une erreur. On utilise donc la méthode classique.
?>

<?php echo "success" ?> <br>
<a href="index.php"><h2>Comback?</h2>
