<?php
//namespace Pug;

//$pug = new Pug();
$title[] = array();
$pid[] = array();
$desp[] = array();
$pic_loc[] = array();
//$output = $pug->render('file', array(
  //  'title' => 'Hello World'
//));
$servername = "sql6.freemysqlhosting.net";
$username = "sql6144082";
$password = "rzFA99rJMe";   
$link = new mysqli($servername, $username,$password,$username);
if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
//echo 'Connected successfully';
$sql = 'SELECT * FROM Updates';

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
                    <li><a href="#">Home</a></li>
                    <li><a href="discover.html">Discover</a></li></ul>
                </div>
              </nav>
          </div>
        </div>

  
  <!-- <center>
  <div class="card small" >
      <div class="row">
        <div class="col s6 offset-s3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  </center> -->

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
    //  $pid[] = $row['PID'];
    //  $title[]= $row['Title'];
    //  $desp = $row['Description'];
   //   $pic_loc[] = $row['pic1'];

echo '
<div class="row">
        <div class="col s6 offset-s3">

  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src ="' . $row['pic1'] . '">
    </div>
    <div class="card-content teal darken-1">
      <span class="card-title activator grey-text text-darken-4">'. $row['Title'] . '<i class="material-icons right">more_vert</i></span>
      <p>By Xyz Inc.</p>
    </div>
    <div class="card-reveal grey darken-2">
      <span class="card-title grey-text text-lighten-3">'. $row['Title'] . '<i class="material-icons right">close</i></span>
      <p class="grey-text text-lighten-3">'. $row['Description'] . '</p>
    </div>
  </div>
  </div>
  </div>
';

}
}
$link->close();
?>
</div>
</div>
</div>
</body>
</html>