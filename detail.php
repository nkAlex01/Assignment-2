<?php 
print_r($_GET);
        // $array = array(
        //     $nameOf = "Alex Lisa",
        //     $nameOf2 = "Prosper Jibunor",
        //     $nameOf3 = "Teddy Amare",
        //     $info = "Alex Lisa likes to hike",
        //     $info2 = "Prosper Watches the Power Rangers", 
        //     $info3 = "Teddy Amare like to be late to class"
        // )

        $students = [["name"=>"Alex Lisa", "picture"=>"Profile.jpg","position"=>"Senior",'email'=>'lisaa1@nku.edu','dream'=>'To go to Comic con','company'=>'Palo Alto' ,'info'=>"I am a senior cybersecurity major with a computer science minor. I am currently interning at Western and Southern Financial Group in their IAM Department. I serve as President of NKU's WiCyS chapter and VP of the COI Ambassadors.", 
      'skill1'=>'Networking', 'skill2'=>'Public Speaking', 'skill3'=>'Security Skills', 'quote'=>'A human being should be able to change a diaper, plan an invasion, butcher a hog, conn a ship, design a building, write a sonnet, balance accounts, build a wall, set a bone, comfort the dying, take orders, give orders, cooperate, act alone, solve equations, analyze a new problem, pitch manure, program a computer, cook a tasty meal, fight efficiently, die gallantly. Specialization is for insects. -Robert A. Heinlein',
    'funfact'=>'I am certified in longsword stage combat.', 'percentage1'=>'77%', 'percentage2'=>'17%', 'percentage3'=>'77%', 'pernum1'=>77, 'pernum2'=>17, 'pernum3'=>77],
        ["name"=>"Tedla Tafari", "picture"=>"https://bootdey.com/img/Content/avatar/avatar7.png","position" => "Senior", 'email'=>'tafarit2@nku.edu','dream' => 'To be cool','company'=>'Cool Kids Inc.' ,'info'=>'How do I begin? I was born in Mozambique, yet raised in Ethiopia. My family is mainly females but I broke the barrier. I love Arsenal and playing Soccer! How about you?', 
      'skill1'=>'Being a Beatles fan', 'skill2'=>'Eating Bahklava', 'skill3'=>'Making Friends', 'quote'=>'I like dogs', 'funfact'=>'I am good with computers.','percentage1'=>'27%', 'percentage2'=>'77%', 'percentage3'=>'100%', 'pernum1'=>27, 'pernum2'=>77, 'pernum3'=>100],
        ["name"=>"Prosper Jibunor", "picture"=>"craig4.jpeg", "position" => "Junior", 'email'=>'jibunorp2@nku.edu','dream'=>'Pastor',
       'company'=>'Wherever God sees best','info'=>'My name is Prosper Jibunor, I am the 4th of 6 children in the Jibunor house. My parents were both born in Nigeria, my dad went to the University of Minnesota while my mother went to University of St. Denis. But they ended up meeting in Minnesota. I am a Christian and I love learning new things, whether about the Bible or anything else that I am interested in. I also am a big fan of the Power Rangers, Teenage Mutant Ninja Turtles, and Craig of the Creek. And even though Tedla Tafari continually tries his best to undermind me I still show heart and resiliency.', 
       'skill1'=>'Power Rangers Fan', 'skill2'=>'Losing in FIFA', 'skill3'=>'Saving seats for my friends',
       'quote'=>'No weapon formed against you shall prosper, and any tongue that rises against you thou shalt condemn. That is the heritage of the servants of the Lord. (Isaiah 54:17)', 
	'funfact'=>'I love Love.', 'percentage1'=>'77%', 'percentage2'=>'17%', 'percentage3'=>'7%', 'pernum1'=>77, 'pernum2'=>17, 'pernum3'=>7]];

        echo $students[$_GET['index']]['name'];
        ?>

<html lang="en">
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

		
	<body>
    <?php $name = "Alex Lisa" ?>
		<link rel="stylesheet" href="assets/detail.css" />
		<title><?php echo "ASE 230 - $name "?></title>
		<div class="container text-center mb-5">
			<h1><?php echo $students[$_GET['index']]['name']; ?></h1>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="<?php echo $students[$_GET['index']]['picture']; ?>" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo $students[$_GET['index']]['name']; ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal"><?php echo "Follow on:" ?></p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream profession:" ?></span>
              <label class="media-body"><?php echo $students[$_GET['index']]['dream']; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream company:" ?> </span>
              <label class="media-body"><?php echo $students[$_GET['index']]['company']; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Email: " ?></span>
              <label class="media-body"><?php echo $students[$_GET['index']]['email']; ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo "Short intro" ?></h5>
        <p><?php echo $students[$_GET['index']]['info']; ?></h1></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><?php echo $students[$_GET['index']]['quote'] ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo "Top skills" ?></h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?php echo $students[$_GET['index']]['pernum1']?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo $students[$_GET['index']]['skill1']; ?></div>
              <span class="progress-bar-number"><?php echo $students[$_GET['index']]['percentage1'] ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?php echo $students[$_GET['index']]['pernum2']?>%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo $students[$_GET['index']]['skill2']; ?></div>
              <span class="progress-bar-number"><?php echo $students[$_GET['index']]['percentage2']?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?php echo $students[$_GET['index']]['pernum3']?>%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo $students[$_GET['index']]['skill3'];?></div>
              <span class="progress-bar-number"><?php echo $students[$_GET['index']]['percentage3']?></span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal"><?php echo "Fun fact" ?></h5>
        <p><?php echo $students[$_GET['index']]['funfact'] ?></p>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-success"><a href="index2.php"><?php echo "Go Back" ?></a></button>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>