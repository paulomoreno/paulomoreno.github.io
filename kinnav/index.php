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
  <link rel="stylesheet" type="text/css" href="/kinnav/style.css">  

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
          <a href="/#contact">Contato</a>
        </li>
        <li>
          <a href="/#projects">Projetos</a>
        </li>
        <li> 
          <a href="/">Início</a>
        </li>
      </ul>
    </div>
  </section>

  <div class="btm_l1"></div>
  <div class="btm_l2"></div>

  <div class="m_btm">
    <div class="const"><h1>Em Construção!</h1></div>
  </div>
  
  <div class="ftr_l1"></div>
  <div class="ftr_l2"></div>

  <section class="footer">
    <section>
      <ul class="site_map">
        <li>
          <h1><a href="/">Início</a></h1></br>
        </li> 
        <li>
          <h1><a href="/#projects">Projetos</a></h1></br>
          <a href="http://turtlebio.com">TurtleBio</a></br>
          <a href="/bandejao/">Bandejao</a></br>
          <a href="/kinnav/">KINNAV</a></br>
        </li> 
        <li>
          <h1><a href="/#contact">Contato</a></h1></br>
        </li>
      </ul>
    </section>
    <section>
    </section>

    <section>
      <span>"Quotation Marks" por Eakarius da coleção <a href="http://thenounproject.com/">The Noun Project</a>.</span>
    </section>

    <section>
        <p>Desenvolvido por Paulo Moreno - Design por Pedro Moreno</p>
        <p><a class="nav_item" href="/kinnav/">Português (Brasil)</a> | <a href="/en/kinnav/">English</a></span></p>
    </section>

  </section>

</body>
</html>