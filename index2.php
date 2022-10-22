<?php 
        // $array = array(
        //     $nameOf = "Alex Lisa",
        //     $nameOf2 = "Prosper Jibunor",
        //     $nameOf3 = "Teddy Amare",
        //     $info = "Alex Lisa likes to hike",
        //     $info2 = "Prosper Watches the Power Rangers", 
        //     $info3 = "Teddy Amare like to be late to class"
        // )

        $students = [["name"=>"Alex", "picture"=>"Profile.jpg","position"=>"Senior"],
        ["name"=>"Tedla", "picture"=>"https://bootdey.com/img/Content/avatar/avatar7.png", "position" => "Senior" ],
        ["name"=>"Prosper", "picture"=>"craig4.jpeg", "position" => "Junior"],
        ];
        ?>
<!doctype html>
<html lang="en">
    <head>
<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <title><?php echo "ASE 230 - class of Spring/Fall/Summer 2022" ?></title>
    </head>
    <body>
        
      
        <div class="container text-center">
            <h1><?php echo "This is ASE 230 - class of Fall 2022" ?></h1>
        </div>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-lg-6">
    <!-- Section Heading-->
    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <h3><?php echo "Our Creative" ?><span> team</span></h3>
    <p><?php echo "Appland is completely creative, lightweight, clean & super responsive app landing page." ?></p>
    <div class="line"></div>
    </div>
    </div>
    </div>
    <div class="row"> 
    <?php
$index = 0;
        foreach($students as $student){

            ?>
    
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <!-- Team Thumb-->
        <div class="advisor_thumb"><a href="detail.php?index=<?=$index?>"><img src="<?php echo $student['picture'] ?>" alt=""></a>
        <!-- Social Info-->
        <div class="social-info"><a href="detail.php"><i class="fa fa-facebook"></i></a><a href="detail.html"><i class="fa fa-twitter"></i></a><a href="detail.html"><i class="fa fa-linkedin"></i></a></div>
        </div>
        <!-- Team Details-->
        <div class="single_advisor_details_info">
        <h6><?= $student['name'] ?> </h6>
        <p class="designation"> <?= $student['position']?></p>
            <div>
        <?php

        if ( $student['position'] == "Freshman"){
            echo '<img src = "star-png.webp" alt="" width="20" height="25">';
        }elseif ( $student['position'] == "Sophomore"){
            echo '<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">';
        }elseif ( $student['position'] == "Junior"){
            echo '<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">';
        }else{
            echo '<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">'.'<img src = "star-png.webp" alt="" width="20" height="25">';
        }


            ?>
        </div>
        </div>
        </div>
        </div>
<?php
$index++;
        }

    ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>