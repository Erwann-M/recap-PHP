<?php 
    require "./template/header.php";
?>

    <main>
        <h2>page 1</h2>
        
        <form action="page2.php?title=page2" method="post">
            <label for="nom">Entrez votre nom :</label>
            <input type="text" name="nom">
            <textarea name="texte" id="" cols="30" rows="10"></textarea>
            <button>Envoyer</button>
        </form>
    </main>

<?php
    require "./template/footer.php";
?>