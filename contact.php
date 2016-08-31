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
 <!--  <header>
    <div id="background-overlay">
    </div>
    <div id="background">
    </div>
    <div id="logo">
      <img class="main-logo" src="images/studio-logo-main.png">
    </div>
  </header>  -->

  <section id="screen1">
    <nav class="navbar navbar-other">
      <div class="nav-1">
        <a href="index.html"><img class="logo-menu" src="images/studio-logo-menu.png"></a>
      </div>
      <div class="nav-2">
        <a class="menu-close"><i class="fa fa-times"></i></a>
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
        <a class="menu-icon"><i class="fa fa-bars"></i></a>
      </div>
    </nav>
  </section> 

 <div class="contact">
    <h1>Contato</h1>
    <div class="col-1 contact-content">

      <?php if ($_GET['s'] == 'success') { ?>
        <p>Sua mensagem será respondida em 48 horas. Obrigado!</p>
      <?php } else if ($_GET['s'] == 'error') { ?>
        <p>Erro. Sua mensagem não foi enviada! Verifique todas as informações, incluindo o código de verificação.<a href="contact.php">Clique aqui para tentar novamente</a>. Se erros persistirem, por favor entre em contato com contato@amaredesign.com.br.br</p>
      <?php } else { ?>


    <!-- Contact Form -->
    <!-- 
     <form class="contact-1" action="mailer.php" method="post">
        <div class="form-group">
          <label for="exampleInputName1">Nome</label>
          <input type="name" class="form-control" id="exampleInputName1" placeholder="Nome">
        </div>
        <div class="form-group">
          <label for="exampleInputCompany1">Empresa (opcional)</label>
          <input type="company" class="form-control" id="exampleInputCompany1" placeholder="Empresa">
        </div>
          <div class="form-group">
          <label for="exampleInputPhone1">Telefone (opcional)</label>
          <input type="phone" class="form-control" id="exampleInputPhone1" placeholder="XX-XXXX-XXXX">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group contact-text">
          <p>Mensagem</p>
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-verification">
          <input type="text" name="verify" class="verify-box form-control" placeholder="Digite o código ao lado">
          <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
          
          <button type="submit" class="btn btn-default">Enviar</button>
        </div>
      </form>-->

      <!-- Contact Form -->
  <form class="contact-1" action="mailer.php" method="post">
    <div class="form-group">
      <label for="fullname">Nome</label>
      <span id="fullname-error" class="error">Deve ser mais do que 2 caracteres.</span>
      <input type="text" id="fullname" name="fullname" placeholder="your name">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <span id="email-error" class="error">Escreva um email válido.</span>
      <input type="text" id="email" name="email" placeholder="your email">
    </div>
    
    <div class="form-group">      
      <label for="phone">Telefone</label>
      <input type="tel" id="phone" name="phone" placeholder="your phone (optional)">
    </div>
    
    <div class="form-group">    
      <label for="message">Menssagem</label>
      <span id="message-error" class="error">Escreva a sua mensagem aqui!</span>
      <textarea id="message" name="message" rows="8"></textarea>
    </div>

    <input type="text" name="verify" class="verify-box" placeholder="verify you're human">
    <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
          
    <input type="submit" value="send">
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
              <i class="fa fa-envelope-o">&nbsp;</i><a href="mailto:contato@amaredesign.com.br">jobs@amaredesign.com.br</a><br> -->
            </p>
    </div>
</div>
</div> <!-- .container -->

<!-- <form>
  <div id="contact_fields">
    <h3 class="form_section_heading">PLEASE ENTER YOUR CONTACT DETAILS</h3>
    <input id="inquiry_company_name" type="text" placeholder="Company name" name="inquiry[company_name]">
    <input id="inquiry_contact_phone" class="omega" type="text" placeholder="Contact phone (optional)" name="inquiry[contact_phone]">
    <input id="inquiry_contact_name" type="text" placeholder="Contact name" name="inquiry[contact_name]">
    <input id="inquiry_company_url" class="omega" type="text" placeholder="Company url (optional)" name="inquiry[company_url]">
    <input id="inquiry_email_address" type="text" placeholder="Email address" name="inquiry[email_address]">
  </div>
  <div id="company_fields">
    <h3 class="form_section_heading">TELL US ABOUT YOUR COMPANY</h3>
    <textarea id="inquiry_company_description" placeholder="A brief description of your company" name="inquiry[company_description]"></textarea>
    <input id="inquiry_budget_estimate" class="omega" type="text" placeholder="Budget estimated for design services" name="inquiry[budget_estimate]">
  </div>
  <div id="comments_container">
    <textarea id="inquiry_comments" placeholder="Please include any comments/questions about your design needs..." name="inquiry[comments]"></textarea>
  </div>
  <div id="submit_container">
    <input class="button pointer borders" type="submit" value="SUBMIT INFO" name="commit" data-disable-with="SUBMITTING...">
    <h4 style="display:none;">Thank you for your inquiry. We will be in touch!</h4>
  </div>
</form> -->



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
        <p class="design">Design & Desenvolvimento por <a href="http://estudio.girletc.com.br/" target="_blank"><i>Girl Etc</i></a></p>
    </div><!-- .footer-bottom -->
</footer>



<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
<script src="js/contact.js"></script>

</body>
</html>

