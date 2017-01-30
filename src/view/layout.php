<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DOK</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
</head>

<body>
    <div class="container">

      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

        <header>
          <section class="NavSection">
            <section class="topNav">
              <section class="newsdrop">
                <p><span>Vandaag</span><br/> Cosy Cozy zorgt tussen 14u en 19u <br />voor meer dan gezellige dj’s.</p>
              </section>

              <a href="index.php?page=index">
                <img src="assets/img/logo.gif" class="logo" alt="DOK" />
              </a>

              <form class="search">
                <input type="text" name="search" placeholder="Search..">
              </form>

            </section>
          </section>
          </header>

          <!-- <section class="botNav"> -->
            <ul class="navigation">
              <li class="nav-item"><a href="index.php?page=agenda">Agenda</a></li>
              <li class="nav-item"><a href="#">Praktisch</a></li>
              <li class="nav-item"><a href="#">Zone's</a></li>
              <li class="nav-item"><a href="#">Over</a></li>
              <li class="nav-item"><a href="#">Blog</a></li>
              <li class="nav-item"><a href="#">livestream</a></li>
              <li class="nav-item"><a href="#">join Us</a></li>
            </ul>
            <input type="checkbox" id="nav-trigger" class="nav-trigger" />
            <label for="nav-trigger"></label>

          <!-- </section> -->
            <div class="site-wrap">

      <?php echo $content; ?>
    </div>
    <footer>
      <img src="assets/img/flowers.png" class="flowers" alt="flowers">

      <div class="footerTop">
        <section class="Fnewsletter">
          <h5>Nieuwsbrief</h5>

          <p>Wil je op de hoogte blijven van geplande evenementen?<br />Schrijf je dan in voor onze nieuwsbrief</p>

          <form action="action_page.php">
            <input type="email" name="email" placeholder="info@DOKgent.be">
            <input type="submit">
          </form>
        </section>
        <section class="Fsocialmedia">
          <img src="assets/img/facebook.gif" alt="facebook" />
          <img src="assets/img/twitter.gif" alt="twitter" />
          <img src="assets/img/instagram.gif" alt="instagram" />
        </section>
      </div>

      <div class="footerDot"></div>

      <div class="footerMid">
        <h5>Sponsers</h5>
        <div class="sponsersImg">
          <img src="assets/img/sponsers/1.png" alt="sponser1" />
          <img src="assets/img/sponsers/2.png" alt="sponser2" />
          <img src="assets/img/sponsers/3.png" alt="sponser3" />
          <img src="assets/img/sponsers/4.png" alt="sponser4" />
          <img src="assets/img/sponsers/5.png" alt="sponser5" />
          <img src="assets/img/sponsers/6.png" alt="sponser6" />
          <img src="assets/img/sponsers/8.png" alt="sponser8" />
          <img src="assets/img/sponsers/9.png" alt="sponser9" />
          <img src="assets/img/sponsers/10.png" alt="sponser10" />
          <img src="assets/img/sponsers/11.png" alt="sponser11" />
        </div>
      </div>
    </footer>
    </div>
    <?php echo $css;?>
    <?php echo $js;?>
  </body>
</html>
