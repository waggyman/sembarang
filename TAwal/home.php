<?php
session_start();
  ?>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=width-device, initial-scale=1">
<body>
  <!-- Header -->
    <div id="head">
      <a href="#"><img src="img/BBT.png" id="logo"/></a>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="comment.php">Guestbook</a></li>

          <?php
          if(!isset($_SESSION['user'])){?>
          <li><a href="login.php">Login</a></li>
        <?php
      }
    else{
      ?>
          <li><a href="logout.php">Logout</a><li>
    <?php
        }?>
        </ul>
      </div>
    </div>
    <div id="preview">
      <!-- <img src="img/PO1.jpg" style="height:300px; margin-top:110px;" /> -->
    </div>
  <!-- Container -->
  <div class="container">
      <div id="content-img">
      <img src="img/1.jpg" />
      </div>
      <div id="content-art">
      <h2>ISS</h2>
      <p>The International Space Station (ISS) is a space station, or a habitable artificial satellite, in low Earth orbit. Its first component launched into orbit in 1998, and the ISS is now the largest artificial body in orbit and can often be seen with the naked eye from Earth. The ISS consists of pressurised modules, external trusses, solar arrays, and other components. ISS components have been launched by Russian Proton and Soyuz rockets, and American Space Shuttles.</p>
      <p>The ISS serves as a microgravity and space environment research laboratory in which crew members conduct experiments in biology, human biology, physics, astronomy, meteorology, and other fields. The station is suited for the testing of spacecraft systems and equipment required for missions to the Moon and Mars. The ISS maintains an orbit with an altitude of between 330 and 435 km (205 and 270 mi) by means of reboost manoeuvres using the engines of the Zvezda module or visiting spacecraft. It completes 15.54 orbits per day.</p>
      </div>
    </div>
    <div id="new-cont">
      <div class="container">
        <div id="img-content">
          <img src="img/2.jpg" />
        </div>
        <div id=cont-art>
          <h2>Astronaut</h2>
          <p>An astronaut or cosmonaut is a person trained by a human spaceflight program to command, pilot, or serve as a crew member of a spacecraft. Although generally reserved for professional space travelers, the terms are sometimes applied to anyone who travels into space, including scientists, politicians, journalists, and tourists.</p>
          <p>Starting in the 1950s up to 2002, astronauts were sponsored and trained exclusively by governments, either by the military or by civilian space agencies. With the suborbital flight of the privately funded SpaceShipOne in 2004, a new category of astronaut was created: the commercial astronaut.</p>
        </div>
      </div>
    </div>
  <!-- Footer -->
    <div id="footer">
      <p style="text-align:center;">Copyright &copy; - 2016 - All Rights Reserved - re-kill.com</p>
    </div>
</body>
</html>

<?php ?>
