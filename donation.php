<?php
$pid = $_GET['pid'];
$donation = $_POST['donation'];
$PID = $_POST['PID'];
?>
 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
 <title Zonne-Solaris-Donations</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <?php 
        if($donation == null){
        echo '
        <div class="container">
                <div class="row">
                    <form class="col s12" action="donation.php" method="post">
                      <div class="row">
                        <div class="input-field col s6">
                          <input  id="first_name" type="text" class="validate">
                          <label for="first_name">Name On Card</label>
                        </div>
                         </div>
                         <div class="row">
                        <div class="input-field col s6">
                          <input id="card_no" type="number" class="validate length="16"">
                          <label for="last_name">Card Number</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s3">
                          <input id="password" type="password" class="validate" length="3">
                          <label for="password">Cvv</label>
                        </div>
                        </div>
                         <div class="row">
                        <div class="input-field col s6">
                          <input name="donation" type="number" class="validate length="16"">
                          <label for="last_name">Amount To Donate(in Rupees)</label>
                        </div>
                        <input name="PID" type="hidden" value=" ' . $pid . ' ">
                      </div>
                        <div class="row">
                      <div class="col s3 offset-s1">
                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
                    </form>
                  </div>
                  </div>
                   </div>
                    </div>
                  ';
        } else {
            $servername = "sql6.freemysqlhosting.net";
$username = "sql6144082";
$password = "rzFA99rJMe";   
$link = new mysqli($servername, $username,$password,$username);
if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
$sql = "INSERT INTO Donations (PID,Amount)
VALUES ('". $PID ."','" . $donation ."')";
if ($link->query($sql) === TRUE) {
         echo '
                <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel teal">
                        <div class="card-content white-text">
          <span class="white-text"><h3 class="white-text"> Thank You for donating ' . $donation . ' ruppes  </h3>
          </span>
        </div>
        <div class="card-action">
              <a href="index.php">Go Back Home </a>
             
            </div>
      </div>
    </div>
            
         ';
    
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();
        }
        ?>
    </body>
  </html>