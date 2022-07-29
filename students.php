<?php include("php/header.php"); ?>

<main class="container">

    <div id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <?php
            $i = 0;
            $directory = "static/images/carousel";
            $images = glob($directory . "/*");
            foreach ($images as $image) {
                $class = ($i == 0) ? "carousel-item active" : "carousel-item";
                echo "
                <div class='$class student-carousel-parent'>
                    <div class='student-carousel-bg' style=\"background-image: url('$image');\"></div>
                    <div class='student-carousel-content'>
                        <img class='img-fluid student-carousel-img' src='$image' alt='Carousel item.'>
                    </div>
                </div>
                ";
                $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ********************************************************************************************** -->
    <!-- ********************************************************************************************** -->

    <h1 class="title">Current Students</h1>

    <h4 class="title">Ph.D. Students</h4>
    <ul>
        <li class="mb-3">
            <a href="http://cs.uky.edu/~mho357" target="_blank">Minoo Hosseinzadeh</a> (since Fall 2019)
        </li>
        <li class="mb-3">
            Afsaneh Mahanipour (since Fall 2021)
        </li>
    </ul>

    <!-- <h4 class="title">Undergraduate Students</h4>
    <ul>
        <li class="mb-3">
            Zachary Gilbert (since Fall 2021)
        </li>
    </ul> -->


    <!-- ********************************************************************************************** -->
    <!-- ********************************************************************************************** -->

    <hr>
    <h1 class="title">Alumni</h1>
    <ul>
        <li class="mb-3">
            <a href="https://nathaniel-hudson.github.io/" target="_blank">Nathaniel Hudson</a> - Graduated in Spring 2022 <br>
            Dissertation: <i>Smart Decision-Making via Edge Intelligence for Smart Cities</i><br>
            Doctor of Philosophy, University of Kentucky
        </li>
        <li class="mb-3">
            Matthew Turner - Graduated in Spring 2020 <br>
            Project: <i>Meeting QoS of Users in an Edge to Cloud Platform via Optimally Placing Services and Scheduling Tasks</i><br>
            Master of Science, University of Kentucky
        </li>
        <li class="mb-3">
            Susana Moser
        </li>
        <li class="mb-3">
            Zachary Gilbert - Graduated with B.S. in Spring 2022 <br>
        </li>
        <li class="mb-3">
            Andrew Wachal - Graduated with B.S. in Spring 2021 <br>
        </li>
        <li class="mb-3">
            Emory Hufbaeur - Graduated with B.S. in Spring 2020
        </li>
        <li class="mb-3">
            Jack Jaquish - Graduated with B.S. in Spring 2019
        </li>
        <li class="mb-3">
            Diego Andrade - Graduated with B.S. in Spring 2019
        </li>
        <li class="mb-3">
            Samuel Iloo - Graduated with B.S. in Spring 2019
        </li>
    </ul>


</main>

<?php include("php/footer.php"); ?>
