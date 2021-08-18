<?php 
    require "./template/header.php";
    require "./data/data.php";
?>

    <main>
        <h2>Les articles</h2>
        <?php
        foreach($articles as $datas) {
            echo "<h3>" . $datas[0] . "</h3>";
            echo "<p>" . $datas[1] . "</p>";
        }?>

        <?php foreach($articles as $datas): ?>
            <h3><?= $datas[0] ?></h3>
            <p><?= $datas[1] ?></p>
        <?php endforeach ?>

        <?php for($index = 0; $index < count($articles); $index++) :?>
            <h3><?= $articles[$index][0] ?></h3>
            <p><?= $articles[$index][1] ?></p>
        <?php endfor ?>

        <?php 
        for($index = 0; $index < count($articles); $index++) {
            echo "<h3>" . $articles[$index][0] . "</h3>";
            echo "<p>" . $articles[$index][1] . "</p>";
        
        } ?>

        <?php 
            $index = 0;
            while($index < count($articles)) {
                echo "<h3>" . $articles[$index][0] . "</h3>";
                echo "<p>" . $articles[$index][1] . "</p>";
                $index ++;
            }

            boucle($articles);

            function boucle($tableau) {
                $index = 0;
                while($index < count($tableau)) {
                    displayTitle($tableau[$index][0]);
                    echo "<p>" . $tableau[$index][1] . "</p>";
                    $index ++;
                }
            }

            function displayTitle($content) {
                echo "<h3>" . $content . "</h3>";
            }
        ?>
    </main>

<?php
    require "./template/footer.php";
?>