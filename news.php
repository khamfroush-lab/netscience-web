<?php include("php/header.php"); ?>

<main class="container">
    <h1 class="title">News</h1>
    <?php
    $temp = file_get_contents("static/data/news.json");
    $news = json_decode($temp, true);

    echo "<table class='table table-striped'>";
    echo
    "
    <thead>
        <tr>
            <th class='w-25'><b class='title'>Date</b></th>
            <th class='w-75'><b class='title'>News</b></th>
        </tr>
    </thead>
    ";

    foreach ($news as $newsItem) {
        $text = $newsItem["text"];
        try {
            $date = new DateTime($newsItem["date"]);
            $date = $date->format("M d, Y");
            echo "<tr><th>$date</th><td>$text</td></tr>";
        } catch (Exception $e) {
        }
    }
    echo "</table>";
    ?>
</main>

<?php include("php/footer.php"); ?>
