<?php include("php/header.php"); ?>

    <main class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="row mb-5">
                <div class="col">
                    <img src="static/images/khamfroush.jpeg" class="img-fluid" alt="Headshot of Dr. Hana Khamfroush">
                </div>
                <div class="col">
                    <h2 id="title">Assistant Professor</h2>
                    <h4>Computer Science Department<br>
                        University of Kentucky</h4>
                    <p>
                        Davis Marksbury Building, <br>
                        329 Rose Street <br>
                        Lexington, KY 40506-0633, USA. <br>
                        Telephone: 1 (859) 218-0795 <br>
                        Email: khamfroush at cs.uky.edu <br>
                        <a href="#">Google Scholar</a> <br>
                    </p>
                </div>
            </div>
            <h4>Research Interests</h4>
            <p>5G &amp; Internet-of-Things, Smart Cities, Edge/Fog/Cloud Computing, Social Networks (online/offline),
                Wireless Networks, Complex Interdependent Networks</p>
            <h4>Short Bio</h4>
            <p>Hana Khamfroush is a senior member of IEEE. She received her Ph.D. degree with honors in
                Telecommunications Engineering from the University of Porto, Portugal in 2014. She was a
                research associate with the department of Computer Science and Engineering, Penn State
                University from 2015 to 2018. She is currently an Assistant Professor with the Department of
                Computer Science, University of Kentucky. She was named a rising star in EECS by MIT and CMU in
                2015 and 2016. She was selected as one of the 200 young researchers for the Heidelberg Laureate
                Forum in Germany.</p>

            <h4>Join Us!</h4>
            <p>We are always looking for motivated undergraduate and graduate students to work with us. The lab is a
                growing and fast paced environment, and there are many interesting and challenging research problems
                to work on across different disciplines. Our research is interdisciplinary, we are working with
                researchers from many diffrent disciplines, including, public health, transporation, electrical
                engineering and social science. I am especially interested to work with students with background in
                machine learning, networking, optimization and algorithms! If you are interested and you feel like
                this can be a good fit for you, please send me an email, include your CV, and describe what aspect of
                my research is interesting to you.</p>

            <h4>Notes for interested undergraduate students.</h4>
            <p>The NET-SCIENCE Lab is always looking for talented and enthusiastic undergraduate students. If you are
                interested in getting involved with our lab, please contact Dr. Hana Khamfroush via email.</p>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-dark bg-light">
                <div class="card-header"><h3>Recent News</h3></div>
                <div class="card-body">
                    <?php printNews(8); ?>
                    <a href="news.php">View all news</a>
                </div>
            </div>
        </div>
    </div>

    </main>


<?php include("php/footer.php"); ?>