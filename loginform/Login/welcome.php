<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Etusivu</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; display: flex; justify-content: center; flex-direction: column; align-items: center;}
    </style>
</head>
<body>
    <h1 class="my-5">Tervetuloa, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b> käyttämään nettikirjastoa.</h1>
    <!-- The sidebar -->
    <div class="sidebar">
        <a href=""><i class="fa fa-fw fa-home"></i> Etusivu</a>
        <a href="../Sivut/kirjat.php"><i class="fa fa-fw fa-wrench"></i> Kirjat</a>
        <a href="../Sivut/meistä.php"><i class="fa fa-fw fa-envelope"></i> Meistä</a>

        <a href="reset-password.php" style="font-size: 15px; margin-top: 75vh; background-color: orange; color: black">Resetoi salasana</a>
        <a href="logout.php" style="font-size: 15px; background-color: red; color: black">Kirjaudu ulos</a>
    </div>
    <div class="text">
        <div class="text2">
        <p>
        Tervetuloa nettikirjastomme - digitaaliseen lukuelämykseen, joka tarjoaa monipuolisen valikoiman kirjoja ja äänikirjoja. 
        Tutustu kirjallisuuden maailmaan missä ja milloin tahansa, sujuvasti verkossa. 
        Käytännöllinen käyttöliittymämme tekee lukemisesta helppoa ja nautinnollista, ja personoidut suositukset auttavat löytämään uusia kiinnostavia teoksia. 
        Liity mukaan uudenlaiseen lukemisen tapaan! 
        </p>
        <br><br>
        <p>Meillä on tarjolla kaikki uusimmat kirjat, sekä kirja valikoimaa päivitetään jatkuvasti</p>
        <p>Kirjat osiosta löydät tällä hetkellä lainattavat kirjat, mikäli sinulla on kysyttävää ota yhteyttä!</p>
        <button onclick="" class="tutustu">Tutustu Valikoimaan</button>
    </div>
    <img class="image" src="../Images/kirjasto.jpg">
    </div>

    <h3 style="margin-top: 50vh; text-decoration: underline">Top 3 uutuudet 2023</h3>
<div class="cardcontainer">
    <div class="card">
  <img src="../Images/yksimeistä.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Yksi meistä katoaa</b></h4> 
    <p>Fiona Barton</p>
    <br>
    <p>
    Jokainen on epäilty
    Fiona Bartonin trilleri Yksi meistä katoaa vie uneliaaseen rantakylään, jossa salaisuudet eivät säily haudattuna pitkään 
    </p>
  </div>
</div>

<div class="card">
  <img src="../Images/kokaiini.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Kokaiini</b></h4> 
    <p>Pascal Engman</p> 
    <br>
    <p>
    Kuinka paljon julmuutta ihminen sietää ennen kuin ryhtyy vastarintaan?
    Neljäs romaani rikostutkija Vanessa Frankista on päivänpolttava trilleri Ruotsin jengiväkivallasta ja huumekaupasta.   
    </p>
  </div>
</div>

<div class="card">
  <img src="../Images/Kuolema.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Kuolema sisäoppilaitoksessa</b></h4> 
    <p>Lucinda Riley</p> 
    <br>
    <p>Synkkiä salaisuuksia taianomaiselta tarinankertojalta.
    Lukijoiden sydämet valloittaneen Lucinda Rileyn postuumisti julkaistava rikosmysteeri Kuolema sisäoppilaitoksessa on täynnä menneisyyden painoa ja taattua brittitunnelmaa.
    </p>
  </div>
</div>
</div>
<br><br>
</body>
</html>