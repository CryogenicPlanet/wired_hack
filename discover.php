<?php 
$servername = "sql6.freemysqlhosting.net";
$username = "sql6144082";
$password = "rzFA99rJMe";   
$link = new mysqli($servername, $username,$password,$username);
if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
$sql = 'SELECT * FROM Project';
$result = $link->query($sql);
?>
<html>
    <head>
      <title> Zonne-Solaris-Discover</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
         <div class="navbar-fixed">
              <nav class="teal">
                <div class="nav-wrapper teal">
                  <a href="#" class="brand-logo">Zonne Solaris</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Discover</a></li></ul>
                </div>
              </nav>
          </div>
        </div>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
  $pid = $row['PID'];
 // echo $pid;
  
  $sql_donation  = "SELECT Amount FROM Donations WHERE PID ='" . $pid ."'";
  $result_dn = $link->query($sql_donation);
 // echo $sql_donation;
  
    $cid = $row['CID'];
    $sql_c = "SELECT Cname FROM Company WHERE CID ='". $cid ."'";
    $result_c = $link->query($sql_c);
    $cname ;
  $modal_desp = $row['Descrption'];
    $i =1;
    //  echo $dn_amount;
    
  echo '
 <div class="row">
        <div class="col s8 offset-s2">

  <div class="card teal">
    <h4 align="center" class="white-text">'; $title =$row['title']; echo $title; echo '</h4>
      <div class="slider">
    <ul class="slides">
      <li>
        <img src="'. $row['pic1'].'"> <!-- random image -->
      </li>
      <li>
        <img src="'. $row['pic2'].'"> <!-- random image -->
       
      </li>
      <li>
        <img src="'. $row['pic3'].'"> <!-- random image -->
        
      </li>
    </ul>
  </div>
    <span class="white-text">
      <h5>Location : '. $row['Location'].'</h5>
      <h5>Desired Investment : '. $row['DesiredAmount'].'</h5>
      <h5> Donated Amount : ' ;  if ($result_dn->num_rows > 0) {
    // output data of each row
    while($row_dn = $result_dn->fetch_assoc()) {
      $dn_amount = $dn_amount + $row_dn['Amount'];
    //  echo $dn_amount;
    }
    echo $dn_amount;
    $dn_amount = 0;
    } echo ' </h5>
      
       <div style="float: left;"><p>By ';  if ($result_c->num_rows > 0) {
    // output data of each row
    while($row_c = $result_c->fetch_assoc()) { 
    echo $row_c["Cname"]; }} echo '</p> </div>
</span>
        <!-- Modal Trigger -->
  <div align="right"><a class="modal-trigger waves-effect waves-light btn" href="#modal'.$id.'">More Info</a></div>

 
  <div style="float: right;" id="modal'. $id.'" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 align="center">'. $title .'</h4>
      <p>'. $modal_desp .'</p><br>
   <!-- <div style="float: right;"><a class="waves-effect waves-light btn red">Cancel</a></div> -->
    <div align="right"><a class="waves-effect waves-light btn blue" href="donation.php?pid='. $pid . '"> Donate</a></div>
    </div> 
    <script type="text/javascript">$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $(".modal").modal();
  });
   $(document).ready(function(){
      $(".slider").slider({full_width: true});
    });
  
  </script>
  </div>
    </div>
  </div>

</div>

</div>

' ;
$id++;
}
}

function printPid($x){
  echo $x;
}
$link->close();
?>
<footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <p class="grey-text text-lighten-4"><h5 class="white-text">Have a project? </h5></p>
                <a href=""mailto:rahultarak12345@gmail.com?Subject=New%20Project"> <p class="white-text">Write us an email with your project title, 3 pictures, desired amount and a description. Once your porject has been verfied by our team it will added to our platform<</p> </a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="mailto:rahultarak12345@gmail.com"><i class="material-icons">email</i>Email</a></li>
                  <li><a class="grey-text text-lighten-3" href="tel:8143418605"><i class="material-icons">phone</i>Phone</a></li>
                   <li><a class="grey-text text-lighten-3" href="updates.php"><i class="material-icons">present_to_all</i>Add Updates</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Zonne Solaris 2016
            </div>
          </div>
        </footer>
        </body>
        </html>
