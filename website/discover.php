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
              <nav>
                <div class="nav-wrapper">
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
  echo '
 <div class="row">
        <div class="col s8 offset-s2">

  <div class="card blue lighten-1">
    <h4 align="center">'. $row['title'] .'</h4>
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
    </div>
    <div class="card-content blue lighten-1">
      <h5>Location : '. $row['Location'].'</h5>
      <h5>Desired Investment : '. $row['DesiredAmount'].'</h5>
       <div style="float: left;"><p>By Xyz Inc.</p> </div>

        <!-- Modal Trigger -->
  <div align="right"><a class="modal-trigger waves-effect waves-light btn" href="#modal1">More Info</a></div>

 
  <div style="float: right;" id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 align="center">'. $row['title'].'</h4>
      <p>'. $row['Descrption'].'</p><br>
    <div style="float: right;"><a class="waves-effect waves-light btn red">Cancel</a></div>
    <div align="right"><a class="waves-effect waves-light btn blue">Donate</a></div>
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
}

}

$link->close();
?>
