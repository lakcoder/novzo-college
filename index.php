<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <div>
      <h2 style="margin:0px; float:left; cursor:pointer"><span class="smallnav menu openNav" onclick="openNav()">☰</span></h2>
      <input type="search" name="q" class="smallnav nav-input-search mobSearch" placeholder="Search for Books, Posts..." />
    </div>
    <div id="sticky_nav" class="nav-card largenav">
      <ul class="nav-list">
        <li class="novzo-logo">
          <a class="active" href="index.php">
            <img src="img/logos/novzologo.png" alt="novzo-logo" class="novzo-img"/>
          </a>
        </li>
        <li class="about-icon">
          <a class="active" href="about.php">
            <p class="nav-icon-style"><b>About Us</b></p>
          </a>
        </li>
      </ul>
    </div>
    <div id="mobnav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading"><a href="index.php"><img src="img/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a></span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="index.php">Services</a>
        <a href="index.php">Home</a>
        <a href="index.php">Etc</a>
        <a href="index.php">Etc</a>
    </div>

    <?php include("includes/footer.php");?>
    <?php include("includes/scripts.php");?>
  </body>
</html>
