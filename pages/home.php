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
    <div class="w3-row w3-container w3-card-2 w3-white">
        <!-- Left Column -->
        <div class="w3-third" style="margin-top: 15px">
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
            <span style="display:block; height: 20px;"></span>
        </div>
        <!-- Right Column -->
        <div class="w3-twothird">
            <div class="w3-container w3-margin-bottom w3-animate-bottom">
                <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-user-circle-o fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>About</h2>
                <hr>
                <div class="w3-container" style="text-align: justify; font-size: 1.1em">
                    <?php include "$path_pageText/home-about.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End of About -->


    <span style="display: block; height: <?php echo $gap_section;?>;"></span>


    <!-- Section: Education -->
    <div class="w3-container w3-card-2 w3-white">
        <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>Education</h2>
        <?php
            $myfile  = fopen($path_eduJson, "r") or die("Unable to open file: $path_pubJson!");
            $jsonEdu = fread($myfile,filesize($path_eduJson));
            $arrInst = json_decode($jsonEdu, true);
            $lstCount = count($arrPapers);    // start at +1

            foreach($arrInst as $instt) {
                $inst    = $instt['inst'];
                $instUrl = $instt['instUrl'];
                $start   = $instt['start'];
                $end     = $instt['end'];
                $logo    = $instt['logo'];
                $desc    = implode("\n      ", $instt['desc']);
                
                // write the a row
                echo "\n<hr>\n";
                echo "\n<div class='w3-row'>\n";

                echo "  <div class='w3-col w3-container w3-center  w3-hide-small' style='width:200px'>\n";
                echo "    <img src='$logo' class='w3-image' style=''>\n";
                echo "  </div>\n";

                echo "  <div class='w3-col w3-container w3-center w3-hide-large w3-hide-medium'>\n";
                echo "    <img src='$logo' class='w3-image' style='width:200px'>\n";
                echo "  </div>\n";


                echo "  <div class='w3-col w3-container l9 m9'>\n";
                echo "    <h5 class=''><b>$inst</b>\n";
                echo "    <a href='$instUrl' target='_blank'><i class='fa fa-external-link-square fa-fw w3-margin-right $color_icon'></i></a></h5>\n";
                echo "    <h6 class='$color_icon'><i class='fa fa-calendar fa-fw w3-margin-right'></i>$start - $end</h6>\n";
                echo "    <p>\n";
                echo "      $desc\n";
                echo "    </p>\n";
                echo "  </div>\n";

                echo "</div>\n";
            }
            echo "\n";
        ?>
      <span style="display:block; height: 20px;"></span>
    </div>
    <!-- End of Education -->


    <span style="display: block; height: <?php echo $gap_section;?>;"></span>


    <!-- Section: Publications -->
    <div class="w3-container w3-card-2 w3-white">
        <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-file-text fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>Publications</h2>
        <hr>
        <table class="w3-table w3-striped">
        <!-- Rows -->
        <?php
            $myfile  = fopen($path_pubJson, "r") or die("Unable to open file: $path_pubJson!");
            $jsonPub = fread($myfile,filesize($path_pubJson));
            $arrPapers  = json_decode($jsonPub, true);
            $lstCount = count($arrPapers);    // start at +1

            foreach($arrPapers as $paper) {
                $title  = $paper['title'];
                $author = $paper['author'];
                $book   = $paper['book'];
                $year   = $paper['year'];
                $pdf    = $paper['pdf'];
                $status = $paper['status'];
                $type   = $paper['type'];
                $note   = $paper['note'];
                $slides = $paper['slides'];
                $video  = $paper['video'];
                $ieee   = $paper['ieee'];
                
                // Select difference colors for journal and conference
                if ($type=="journal") {
                    $tcol_index = $color_journalIndex;
                    $tcol_title = $color_journalTitle;
                }
                else {
                    $tcol_index = $color_listIndex;
                    $tcol_title = $color_textHi;
                }
                // write the a row
                echo "\n<tr>\n";
                // write list index
                echo "<td> <span class=\"w3-badge $tcol_index\">$lstCount</span> </td>\n";
                $lstCount--;
                echo "<td style='font-size:1.1em'>\n";
                // Author
                echo "$author, \n";
                // Title
                echo "<b style='font-size:1.1em' class='$tcol_title'>\n";
                echo "$title,\n";
                echo "</b>\n";
                // status
                if ($status == "accepted") echo "($status) ";
                // Book or conference
                echo "$book, ";
                if (is_null($note)) echo "$year.\n";
                else                echo "$year, <b>$note</b>.";
                // External URLs
                echo "<br>\n";
                echo "<b style='font-size:1.1em'>\n";
                if (!is_null($pdf))
                    echo "<a href='$pdf' target='_blank' class='$color_url'>\nPaper<i class='fa fa-external-link-square fa-fw w3-margin-right'></i>\n</a>\n";
                if (!is_null($slides))
                    echo "<a href='$slides' target='_blank' class='$color_url'>\nSlides<i class='fa fa-external-link-square fa-fw w3-margin-right'></i>\n</a>\n";
                if (!is_null($video))
                    echo "<a href='$video' target='_blank' class='$color_url'>\nPresentation<i class='fa fa-external-link-square fa-fw w3-margin-right'></i>\n</a>\n";
                if (!is_null($ieee))
                    echo "<a href='$ieee' target='_blank' class='$color_url'>\nIEEE<i class='fa fa-external-link-square fa-fw w3-margin-right'></i>\n</a>\n";
                echo "</b>\n";
                // end the row
                echo "</td>\n";
                echo "</tr>\n";

            }
        ?>
        </table>
        <br>
    </div>
    <!-- End of Publications -->


    <span style="display: block; height: <?php echo $gap_section;?>;"></span>


    <!-- Section: Professional Experience -->
    <div class="w3-container w3-card-2 w3-white">
        <h2 class="<?php echo $color_icon; ?> w3-padding-16"><i class="fa fa-institution fa-fw w3-margin-right w3-xxlarge <?php echo $color_icon; ?>"></i>Professional Experience</h2>
        <?php
            $counter = 0;
            foreach ($paths_profEx as $sec) {
                if($counter%2==0) {
                    echo "\n<div class='w3-row w3-margin-bottom'> <!-- Row start -->\n\n";
                }
                $counter++;
                echo "<div class='w3-container w3-half'>\n";
                include $sec;
                echo "</div>\n\n";
                if($counter%2==0) {
                    echo "</div> <!-- Row end -->\n\n";
                }
            }
            if($counter%2!=0) {
                echo "</div> <!-- Row end -->\n\n";
            }
        ?>
    </div>
    <!-- End of Professional Experience -->


</div>
<!-- End of Page Container -->

<span style="display: block; height: <?php echo $gap_section;?>;"></span>

<!-- Footer -->
<footer class="w3-container w3-center <?php echo $color_topBar?>">
  <p>Find me on social media.</p>
  <!--a href="https://www.facebook.com/solarcentre" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;&nbsp; -->
  <a href="https://www.youtube.com/channel/UCm_7d9JrO9a4pO0LUpx-sNw" target="_blank"><i class="fa fa-youtube-play w3-hover-opacity"></i></a>
  <span style="display:block; height: 20px;"></span>
</footer>

</body>
</html>

