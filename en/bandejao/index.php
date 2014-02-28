<?php
  $browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    if ($browser == true){
    $browser = 'iphone';
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if($browser == 'iphone'){ ?>
  		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  	<?php } ?>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="/style.css">
  <link rel="stylesheet" type="text/css" href="/main_style.css">
  <link rel="stylesheet" type="text/css" href="/footer_style.css">  
  <link rel="stylesheet" type="text/css" href="/bandejao/style.css">


	<title>Bandejão</title>
</head>
<body>

  <section class="header">
    <div class="h_center">

      <div class="logo">
       <span class="logo_p">P</span>moreno 
      </div>

      <ul class="nav">
        <li>
          <a href="/en/#contact">Contact</a>
        </li>
        <li>
          <a href="/en/#projects">Projects</a>
        </li>
        <li> 
          <a href="/en/">Home</a>
        </li>
      </ul>
    </div>
  </section>

  <section class="feature_top">
  	<div class="b_right b_text_width_hack_because_html_is_stupid">
	    <h1 class="b_heading">Bandejão</h1></br></br>
	    <p>A new and easy way of checking the USP (São Carlos campus) restaurant's menu.</p>
	    <p><a href="#"><img  class="badge" src="/img/Download_on_the_App_Store_Badge_US-UK_135x40.svg"></a></p>
	</div>
    <div class="b_left">
    	<img class="b_img" src="/img/screen0.png">
    </div>

    </div>
  </section>

  <div class="btm_l1"></div>
  <div class="btm_l2"></div>

  <section class="m_btm">

	<section class="feature">
		<div class="feature_ctr">
	        <div class="b_left b_text_width_hack_because_html_is_stupid">
		        <h1 class="b_heading">Days View</h1><br/><br/>
		        <p class="b_text">Simple and intuitive interface.</p><p>You can easily check the next meal or check all the meals from this week.</p>
		    </div>
		    <div class="b_right">
	    		<img class="b_img" src="/img/screen1.png">
	    	</div>
	    </div>
    </section>

    <section class="feature">
    	<div class="feature_ctr">
	    	<div class="b_left"><img class="b_img" src="/img/screen2.png"></div>
	        <div class="b_right b_text_width_hack_because_html_is_stupid">
		        <h1 class="b_heading">Pictures Search<h1><br/><br/>
		        <p class="b_text">You can also search for pictures of a meal. With one click on any meal, you can easily check pictures on Google images without exiting the App.</p>
	      	</div>
      	</h1>
    </section>

    <section class="feature">
      	<div class="feature_ctr">        
	        <div class="b_left b_text_width_hack_because_html_is_stupid">
        		<h1 class="b_heading">Notifications</h1><br/><br/>
        		<p class="b_text">Do you want to receive notifications? Just activate the notifications switch and you will receive a notification 1 hour before each meal.</p>
      		</div>
     		<div class="b_right">
    			<img class="b_img" src="/img/screen3.png">
    		</div>
      	</div>
    </section>

  </section>

  <div class="ftr_l1"></div>
  <div class="ftr_l2"></div>

  <section class="footer">
    <section>
      <ul class="site_map">
        <li>
          <h1><a href="/en/">Home</a></h1></br>
        </li> 
        <li>
          <h1><a href="/#projects">Projects</a></h1></br>
          <a href="http://turtlebio.com">TurtleBio</a></br>
          <a href="/bandejao/">Bandejao</a></br>
          <a href="/kinnav/">KINNAV</a></br>
        </li> 
        <li>
          <h1><a href="/#contact">Contact</a></h1></br>
        </li>
      </ul>
    </section>
    <section>
    </section>

    <section>
      <span>"Quotation Marks" by Eakarius from the <a href="http://thenounproject.com/">The Noun Project</a> collection.</span>
    </section>

    <section>
        <p>Developed by Paulo Moreno - Design by Pedro Moreno</p>
        <p><a class="nav_item" href="/bandejao/">Português (Brasil)</a> | <a href="/en/bandejao/">English</a></span></p>
    </section>

  </section>

</body>
</html>