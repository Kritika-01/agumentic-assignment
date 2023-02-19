<?php 

require_once "connect.php";

$sql_nav_menu = "SELECT * FROM `nav_menu`";
$result_nav_menu = mysqli_query($connect, $sql_nav_menu);
$info_nav_menu = mysqli_fetch_all($result_nav_menu, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <div class="header">
        <div class="head-img">
          <img src="images/header3.jpg" alt="header-image" />
        </div>
        <nav>
          <div class="logo">
            <img src="images/logo.png" alt="Logo" />
          </div>
          <p>asatanga</p>
          <ul>
            <?php foreach($info_nav_menu as $nav){ ?>
              <li><a href="<?php echo $nav['nav_menu_link'] ?>"><?php echo $nav['nav_menu_name'] ?></a></li>
            <?php } ?>
          </ul>
        </nav>
        <div class="header-section">
          <div class="heading-title">
            <span>Yoga</span> - a philosophy of life, the creation of a
            <span>healthy body </span>and <span>mind</span>
          </div>
          <p>
            Astanga - we teach yoga in a traditional method known as 'Mysore
            self-practice', which originated in Mysore, South India
          </p>
          <div class="signup-btn"><a href="">Sign up</a></div>
        </div>
      </div>
    </header>
    <section>
      <div class="header1">
        <h1>Why should we <span>start</span> practicing yoga?</h1>
      </div>
      <div class="header1-desc">
        <p>
          Yoga improves strength, balance and flexibility.
          <br />
          <br />
          Slow movements and deep breathing increase blood flow and warm up
          muscles, while holding a pose can build strength. Balance on one foot,
          while holding the other foot to your calf or above the knee (but never
          on the knee) at a right angle.
        </p>
      </div>
      <div class="teachers">
        <h2>Our teachers</h2>

        <p class="teachers-desc">
          All teachers at astanga are highly qualified and experienced.
          <br />
          Each has a current, dedicated astanga practice, has been practising
          daily for many years.
        </p>
        <div class="teachers-profile">
          <div class="profile">
            <div class="profile-img">
              <img src="images/profile1.jpg" alt="" />
            </div>
            <h2>Hamish Hendry</h2>
            <div class="profile-info">
              <p>I started yoga when I was 18, as I couldn't touch my toes.</p>
            </div>
          </div>
          <div class="profile">
            <div class="profile-img">
              <img src="images/profile2.jpg" alt="" />
            </div>
            <h2>Hamish Hendry</h2>
            <div class="profile-info">
              <p>I started yoga when I was 18, as I couldn't touch my toes.</p>
            </div>
          </div>
          <div class="profile">
            <div class="profile-img">
              <img src="images/profile3.jpg" alt="" />
            </div>
            <h2>Hamish Hendry</h2>
            <div class="profile-info">
              <p>I started yoga when I was 18, as I couldn't touch my toes.</p>
            </div>
          </div>
          <div class="profile">
            <div class="profile-img">
              <img src="images/profile4.jpg" alt="" />
            </div>
            <h2>Hamish Hendry</h2>
            <div class="profile-info">
              <p>I started yoga when I was 18, as I couldn't touch my toes.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- signup form -->
      <div class="signup-form">
        <form action="">
          <h1>Sign Up Form</h1>
          <div class="input">
            <p>Name</p>
            <input type="text" placeholder="Your Name" />
          </div>
          <div class="input">
            <p>Email</p>
            <input type="email" placeholder="Your Email" />
          </div>
          <div class="input">
            <p>Contact Number</p>
            <input placeholder="Your Number" />
          </div>
          <div class="signup-btn">
            <a href="#" class="btn">Apply a request</a>
          </div>
        </form>
      </div>
    </section>
    <footer>
      <div class="footer-main">
        <div class="footer-tag">
          <h2>Quick Links</h2>
          <ul>
          <?php foreach($info_nav_menu as $nav){ ?>
              <li><a href="<?php echo $nav['nav_menu_link'] ?>"><?php echo $nav['nav_menu_name'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
        
        <div class="footer-tag">
          <h2>Service Location</h2>
          <p>India</p>
          <p>Indonesia</p>
          <p>Japan</p>
          <p>Sri Lanka</p>
          <p>USA</p>
        </div>
        <div class="footer-tag">
          <h2>Contact</h2>
          <p>+91 9988779944</p>
          <p>+91 9977884455</p>
          <p>contact@agumentic.com</p>
        </div>
        <div class="footer-tag">
          <h2>Follows</h2>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
      </div>
    </footer>
  </body>
</html>
