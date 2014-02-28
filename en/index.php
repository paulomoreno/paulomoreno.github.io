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

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="/style.css">
  <link rel="stylesheet" type="text/css" href="/main_style.css">
  <link rel="stylesheet" type="text/css" href="/projects_style.css">
  <link rel="stylesheet" type="text/css" href="/contact_style.css">
  <link rel="stylesheet" type="text/css" href="/footer_style.css">


	<title>Paulo Moreno</title>
  <script type="text/javascript"> 
  function hgsubmit() 
  { 
  if (/\S+/.test(document.hgmailer.name.value) == false) alert ("Please provide your name."); 
  else if (/^\S+@[a-z0-9_.-]+\.[a-z]{2,6}$/i.test(document.hgmailer.email.value) == false) alert ("A valid email address is required."); 
   else if (/\S+/.test(document.hgmailer.comment.value) == false) alert ("Your email content is needed."); 
    else { 
         document.hgmailer.submit(); 
         alert ('Thank you!\nYour email is sent.'); 
         } 
  } 
  </script> 
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

  <section class="center_ctr">
    <div class="center">
      <img class="center_img" src="/img/me.jpg">
      <span class="center_text_big">Paulo Moreno<br/></span>
      <span class="center_text_small"><br/>Estudante em Ciências da Computação.<br/>
      Apaixonado por tecnologia e por novas idéias.<br/></span>
    </div>
  </section>

  <div class="btm_l1"></div>
  <div class="btm_l2"></div>

  <section class="m_btm">
    <div class="m_btm_ctr">
      <div class="m_btm_left">
        <span class="quote">
          <p>
			<quote>
	          <img class="quote_ii" src="/img/icon_19279.png"><br/>
	          Inspirado por desafios, focado e perfeccionista.
	          São algumas palavras que podem descrever o meu método de trabalho.
	          <br/>
	          <img class="quote_ii" src="/img/icon_19279.png"><br/>
          	</quote>
          </p>
        </span>
      </div>
      <div class="m_btm_right">
        <p>
          <span class="m_subtitle">Área de Atuação</span><br/><br/>
          <span class="m_text">
          Atualmente trabalho com desenvolvimento Web.<br/>
          Também tenho conhecimento em desenvolvimento para iOS e Visão Computacional para navegação autônoma.
          </span>
          <br/>
          <span> 
      </div>
    </div>
  </section>


  <section class="projects" id="projects">
    <div class="p_ctr">
      <div class="p_title_box">
        <div class="p_title">PROJECTS</div>
      </div>
      
      <a href="http://www.turtlebio.com/">
      <div class="p_item">
	    <img src="/img/turtlebio_logo_128x128.png" class="img_web">

	    <div class="p_item_title">TurtleBio</div>
  	    <p class="p_item_text">Developed TurtleBio's website.</p>

      </div>
      </a>

      <a href="/en/bandejao/">
	  <div class="p_item">
		<img src="/img/bandejao_icon.png" class="img_bandejao">
	    <div class="p_item_title">Bandejão</div>
	    <p class="p_item_text">iPhone App to check the USP - São Carlos University's restaurant menu.</p>
	  </div>
	  </a>

	  <a href="/en/kinnav/">
	  <div class="p_item">
	    <img src="/img/kinnav_logo.png" class="img_kinnav">
	    <div class="p_item_title">KINNAV</div>
	    <p class="p_item_text">Autonomous Navigation and Intruder Deteccion project developed with the use of the Kinect sensor.</p>
	  </div>
	  </a>

	</div>
  </section>

    </div>
  </section>

  <section class="contact" id="contact">
    <span class="c_title">Contact</span>

    <div class="c_ctr">
      <div class="c_info">
        <img class="c_img" src="/img/me.jpg">
        <p class="c_name">Paulo Moreno</p>
        <p><a class="c_subtitle" href="mailto:pmoreno@usp.br">pmoreno@usp.br</a></p>
      </div>

      <div class="c_form">
	    <form name="contactform" method="post" action="send_email.php">
	      <p>*Name:<br/><input  type="text" name="first_name" maxlength="50" size="40%"></p><br/>
	      <p>*Email:<br/><input  type="text" name="email" maxlength="80" size="40%"></p><br/>
	      <p>Phone Number:<br/><input  type="text" name="telephone" maxlength="30" size="40%"></p><br/>
	      <p>Subject:<br/><input  type="text" name="subject" maxlength="50" size="40%"></p><br/>
	      <p>*Message:<br/><textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea></p><br/>
        <p><input type="button" value="Send" onclick="alert('Error 501: Not implemented.');"></p>
	    </form>
	  </div>
	</div>
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
        <p><a class="nav_item" href="/">Português (Brasil)</a> | <a href="/en/">English</a></span></p>
    </section>

  </section>

</body>
</html>