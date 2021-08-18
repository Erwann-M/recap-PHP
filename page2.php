<?php 
    require "./template/header.php";
?>

    <main>
        <h2>page 2</h2>
        <?php
            if(!empty($_POST['nom']) && !empty($_POST['texte'])) {
                echo "<p>Votre nom : " . $_POST['nom'] . "</p>";
                echo "<p>Votre texte : " . $_POST['texte'] . "</p>";
            }
        ?>
    </main>

<?php
    require "./template/footer.php";
?>