<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <title>Contato | Amaré</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>


<body>
 <div class="foreground-feat">

    <section id="screen1">
    <nav class="navbar">
      <div class="nav-1">
        <a href="index.html"><img class="logo-menu" src="images/studio-logo-menu.png"></a>
      </div>
      <div class="nav-2">
        <ul id="menu-links">
          <li><a href="about.html">Sobre</a></li>
          <li><a href="featured-tropical.html">Estampas</a></li>
          <li><a href="press.html">Na Mídia</a></li>
          <li><a href="services.html">Serviços</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </div>
      <div class="nav-3">
        <div id="social">
          <a href="http://facebook.com/amaredesignbr"><i class="fa fa-facebook fa-fw"></i></a>
          <a href="http://instagram.com/amaredesign"><i class="fa fa-instagram fa-fw"></i></a>
        </div>
        <!-- Use any element to open/show the overlay navigation menu -->
          <span class= "menu-responsive" style="font-size:18px;cursor:pointer" onclick="openNav()">&#9776; menu</span>
      </div>
    </nav>
  </section> 
</div>
   
<!-- menu-responsive open window -->
  <div id="myNav" class="overlay">

    <!-- Button to close menu -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="about.html">Sobre</a>
      <a href="featured-tropical.html">Estampas</a>
      <a href="press.html">Na Mídia</a>
      <a href="services.html">Serviços</a>
      <a href="contact.php">Contato</a>
    </div>
  </div>

<div class="contact">
  <h2>Contato</h2>
  <div class="col-1 contact-content">

      <?php if ($_GET['s'] == 'success') { ?>
        <p>Sua mensagem será respondida em 48 horas. Obrigado!</p>
      <?php } else if ($_GET['s'] == 'error') { ?>
        <p>Erro. Sua mensagem não foi enviada! Verifique todas as informações, incluindo o código de verificação.<a href="contact.php">Clique aqui para tentar novamente</a>. Se erros persistirem, por favor entre em contato com contato@amaredesign.com.br.br</p>
      <?php } else { ?>

      <!-- Contact Form -->
    <form class="contact-1" action="mailer.php" method="post">
      <div class="form-group">
        <label for="fullname">Nome</label>
        <span id="fullname-error" class="error">Deve ser mais do que 2 caracteres.</span>
        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <span id="email-error" class="error">Escreva um email válido.</span>
        <input class="form-control" type="text" id="email" name="email" placeholder="Email para contato">
      </div>
    
      <div class="form-group">      
        <label for="phone">Telefone</label>
        <input class="form-control" type="tel" id="phone" name="phone" placeholder="Telefone (opcional)">
      </div>
    
      <div class="form-group contact-text" >    
        <label for="message">Mensagem</label>
        <span id="message-error" class="error">Escreva a sua mensagem aqui!</span>
        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
      </div>

      <div class="form-verification">
        <input type="text" name="verify" class="verify-box form-control" placeholder="Digite o código ao lado">
        <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </form>

  <?php } ?>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="contact.js"></script>
  </div> 

  <div class="col-2 contact-content clearfix">
    <!-- Contact Info -->
    <div class="contact-2">
      <h2>Fale conosco</h2>
        <p>Entre em contato preenchendo o formulário, <br>ou se preferir mande um email para:</p> 
            <p class="email">
              <i class="fa fa-envelope-o">&nbsp;</i><a href="mailto:contato@amaredesign.com.br">contato@amaredesign.com.br</a><br>
            </p>
            <br>
            <h3>Urgente? Ligue para:</h3>
            <p><i class="fa fa-phone"></i> (85)3401-2000</p>
            <br>
            <!-- <h3>Trabalhe conosco:</h3>
            <p class="email">
              <i class="fa fa-envelope-o">&nbsp;</i><a href="mailto:contato@amaredesign.com.br">jobs@amaredesign.com.br</a><br>
            </p> -->
            
    </div>
  </div>
</div> <!-- .container -->


<section class="home-page" id="tagline">
    <h1>Criar, Estampar, Amar</h1>
    <p>Made with &#9829 in Ceará</p>
    <div class="tagline-symbol">
      <img class="single-symbol" src="images/studio-single-cactus-2.png">
    </div>
</section>

<footer id=footer-wrapper>
  <div class="container">
    <div class="footer-top clearfix border-bottom">
      <img src="images/studio-logo-footer.png">
      <ul id="details">
        <li><a href="about.html">Sobre</a></li>
        <li><a href="services.html">Serviços</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
      <div id="social-footer">
        <a href="http://facebook.com/amaredesignbr"><i class="fa fa-facebook fa-fw"></i></a>
        <a href="http://instagram.com/amaredesign"><i class="fa fa-instagram fa-fw"></i></a>
        <a href="http://behance.net/amaredesign"><i class="fa fa-behance fa-fw"></i></a>
      </div>
    </div><!-- .footer-top -->
    <div class="footer-bottom">
        <p class="copyright">&copy; 2015 Amaré Studio. Todos os direitos reservados. <a href="http://www.pemalex.com.br" target="_blank"><i>Pemalex Indústria Têxtil</i></a></p>
        <!-- <p class="design">Design & Desenvolvimento por <a href="http://estudio.girletc.com.br/" target="_blank"><i>Girl Etc</i></a></p> -->
    </div><!-- .footer-bottom -->
</footer>



<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
<script src="js/contact.js"></script>

</body>
</html>

