<?php

//function fancyHorizontalRule($title, $header = "h2")
//{
//    echo
//    "<div class='row my-3'>
//        <div class='col'><hr></div>
//        <div class='col-auto'>
//            <$header>$title</$header>
//        </div>
//        <div class='col'><hr></div>
//    </div>";
//}

/**
 * Comparison function for dates. This will be used for sorting (via `usort`) to order json items.
 * @param a -- first item for comparison.
 * @param b -- second item for comparison.
 */
function order_by_date($a, $b)
{
    if ($a["date"] === "" && $b["date"] === "") {
        return 1;
    } elseif ($a["date"] === "") {
        return 1;
    } elseif ($b["date"] === "") {
        return -1;
    } else {
        return (strtotime($a["date"]) > strtotime($b["date"]) ? -1 : 1);
    }
}


function printNews($nMostRecent=NULL)
{
    $string = file_get_contents("static/data/news.json");
    $json_p = json_decode($string, true);
    usort($json_p, "order_by_date");

    $i = 0;
    if ($nMostRecent == NULL) {
        $max = INF;
    } else {
        $max = $nMostRecent;
    }
    echo "<ul>";
    while ($i < $max && $i < count($json_p)) {
        $item = $json_p[$i];
        $text = $item["text"];
        try {
            $date = new DateTime($item["date"]);
            $date = $date->format("F d, Y");
            echo "<li class='mb-2'>$text <b>[$date]</b></li>";
            $i++;
        } catch (Exception $e) {
        }
    }
    echo "</ul>";
}