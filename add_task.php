<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/database.php';
include 'inc/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);

        $result = $pdo->prepare("INSERT INTO tasks (title) VALUES (?)");
        $result->execute([$title]); //rajout du title pour le ciblée
        header("Location:tasks.php"); //rediriger vers le fichier task.php pour afficher le changement 
        exit();
   
}
?>

<h2>Ajouter une tâche</h2>
 <form action="" method="POST"> <!--enlever l action sinon ca redirige vers une pasge not founds -->
    <input type="text" name="title" placeholder="Nouvelle tâche">
    <button type="submit">Ajouter</button>
</form>

<?php include 'inc/footer.php'; ?>
