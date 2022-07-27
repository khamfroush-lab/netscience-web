<?php
include("php/header.php");

function echoPublication($number, $publication) {
    $year = $publication["year"];
    $title = $publication["title"];
    $authors = implode(", ", $publication['authors']);
    echo "<tr>";
    echo "<td>$number</td><td>$year</td><td><b>$title</b><br>";
    echo "<i>$authors</i>";
//    if (isset($publication["citation"])) {
//        if ($publication["citation"] != NULL) {
//            echo "<br>";
//            echo "<i class='las la-quote-left'></i> <a href='#' class='link-secondary'>Cite</a>";
//        }
//    }
    echo "</td></tr>";
}

function getPublications($type) {
    $temp = file_get_contents("static/data/publications.json");
    $publications = json_decode($temp, true);
    $numberOfPapers = 0;

    echo "<table class='table table-striped'>";
    echo
    "
    <thead>
        <tr>
            <td><b>#</b></td>
            <td><b>Year</b></td>
            <td><b>Paper</b></td>
        </tr>
    </thead>
    ";

    $i = 1;
    foreach ($publications as $pub) {
        if ($pub["type"] == $type) {
            echoPublication($i, $pub);
            $i++;
        }
    }
    echo "</table>";
}

?>

<main class="container">
    <h1 class="title">Journal Publications</h1>
    <?php getPublications("journal"); ?>

<!--    <hr>-->

    <h1 class="title">Peer-Reviewed Conference &amp; Workshop Publications</h1>
    <?php getPublications("conference"); ?>
</main>

<?php include("php/footer.php") ?>
