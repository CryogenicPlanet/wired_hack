<?php
//namespace Pug;

//$pug = new Pug();
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
              <nav class"teal">
                <div class="nav-wrapper teal">
                  <a href="#" class="brand-logo">Zonne Solaris</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Home</a></li>
                    <li><a href="discover.php">Discover</a></li></ul>
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
 $sql2 = "SELECT CID,title FROM Project WHERE PID='" . $row['PID'] . "'";
  $result2 = $link->query($sql2);
    if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) 
{
  $sql3 = "SELECT Cname FROM Company WHERE CID='" .$row2['CID'] . "'";
    $result3 = $link->query($sql3);
    if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
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
      <p> By '. $row3['Cname'].'</p>
    </div>
    <div class="card-reveal grey darken-2">
      <span class="card-title grey-text text-lighten-3">'. $row2['title'] . '<i class="material-icons right">close</i></span>
      <p class="grey-text text-lighten-3">'. $row['Description'] . '</p>
    </div>
  </div>
  </div>
  </div>
';

}
}
}
}
}
}
$link->close();
?>
</div>
</div>
</div>
<footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <p class="grey-text text-lighten-4"><h5 class="white-text">Have a project? </h5></p>
                <a href=""mailto:rahultarak12345@gmail.com?Subject=New%20Project"> <p class="white-text">Write us an email with your project title, 3 pictures, desired amount and a description. Once your porject has been verfied by our team it will added to our platform</p> </a>
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