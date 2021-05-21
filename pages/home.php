<!DOCTYPE html>
<html>
<title>MD Arafat Kabir</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="<?php echo $color_body?>">

<!--h1>Under Construction</-->

<!-- Header -->
<div class="w3-top">
  <div class="w3-bar w3-padding w3-card-2 w3-center <?php echo $color_topBar?>">
        <h2>MD Arafat Kabir</h2>
  </div>
</div>
<span style="display:block; height: 80px;"></span>


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- Section: About -->
    <!-- The Grid -->
    <div class="w3-row-padding w3-container w3-card-2 w3-white">
        <!-- Left Column -->
        <div class="w3-third" style="margin-top: 20px">
            <div class="w3-display-container">
                <img src="pages/data/pro.jpg" style="width:100%" alt="Avatar">
            </div>
            <div class="w3-container">
                <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>PhD Student, CSCE, University of Arkansas</p>
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>Research Assistant, E3DA Lab, University of Arkansas</p>
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>Former Teaching Assistant, University of Arkansas</p>
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>Former Lecturer, Dept. of EEE, Bangladesh University</p>
                <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>B.Sc.Engg.(EEE), 2017</p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>Fayetteville, Arkansas 72701</p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>Rajshahi, Bangladesh</p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>arafat.sun@gmail.com</p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>makabir@uark.edu</p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>+1 (479) 301 1293</p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large <?php echo $color_icon; ?>"></i>+8801728640025</p>
            </div>
        </div>
        <!-- Right Column -->
        <div class="w3-twothird">
            <div class="w3-container w3-margin-bottom w3-animate-bottom">
                <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-user-circle-o fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>About</h2>
                <div class="w3-container" style="text-align: justify; font-size: 1.1em">
                    <?php include "$path_pageText/home-about.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End of About -->


    <span style="display: block; height: 15px;"></span>


    <!-- Section: Publications -->
    <div class="w3-container w3-card-2 w3-white">
        <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-file-text-o fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>Publications</h2>
        <?php
            $myfile  = fopen($path_pubJson, "r") or die("Unable to open file: $path_pubJson!");
			$jsonPub = fread($myfile,filesize($path_pubJson));
			$arrPapers  = json_decode($jsonPub, true);
            foreach($arrPapers as $paper) {
                $title  = $paper['title'];
                $author = $paper['author'];
                $book   = $paper['book'];
                $year   = $paper['year'];
                $url    = $paper['url'];
                $pdf    = $paper['pdf'];
                $status = $paper['status'];
                
                echo "<p style='font-size:1.1em'>\n";
                // Author
                echo "$author, \n";
                // Title
                echo "<b style='font-size:1.1em'>\n";
                echo "<a href='$url' target='_blank' style='text-decoration: none; color: #3355aa'>\n\"$title\",\n</a>\n";
                echo "</b>\n";
                // Book or conference
                echo "$book, ";
                echo "$year.\n";
                echo "</p>\n\n";

            }
        ?>
    </div>
    <!-- End of Publications -->

</div>
<!-- End of Page Container -->


<!-- Footer -->
<footer class="w3-container w3-center w3-margin-top <?php echo $color_topBar?>">
  <p>Find me on social media.</p>
  <!--a href="https://www.facebook.com/solarcentre" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;&nbsp; -->
  <a href="https://www.youtube.com/channel/UCm_7d9JrO9a4pO0LUpx-sNw" target="_blank"><i class="fa fa-youtube-play w3-hover-opacity"></i></a>
  <span style="display:block; height: 20px;"></span>
</footer>

</body>
</html>

