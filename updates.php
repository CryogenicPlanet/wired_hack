<?php 
$key =$_POST['key'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$pic_loc = $_POST['pic_loc'];

     $servername = "sql6.freemysqlhosting.net";
$username = "sql6144082";
$password = "rzFA99rJMe";   
$link = new mysqli($servername, $username,$password,$username);
if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
$cid;
?>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
         <title Zonne-Solaris-Update</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<?php
if($key==null){
    
echo '
 
            <div class="row">
    <form class="col s12" action="updates.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="title" type="text" class="validate">
          <label for="first_name">Title</label>
        </div>
       
      
        <div class="input-field col s6">
          <input name="key" type="password" class="validate" length="8">
          <label for="password">Company Key</label>
        </div>
        <div class="row">
         <div class="input-field col s12">
          <input name="desp" type="text" class="validate">
          <label for="last_name">Description</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="pic_loc" type="text" class="validate">
          <label for="pic_loc">Url to Picture (Https)</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  ';
} else {
    $sql_check ="SELECT CID FROM Company WHERE Token=". $key ;
 $result = $link->query($sql_check);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cid = $row['CID'];
    }} else {
        echo "Not valid Key";
    }
    $pid ;
$sql_pid = "SELECT PID FROM Project WHERE CID='". $cid ."'";
 $result3 = $link->query($sql_pid);
    if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
        $pid = $row3['PID'];
    }}
$sql = "INSERT INTO Updates (PID,Title,Description,pic1)
VALUES ('". $pid ."','" . $title  ."','" . $desp . "','" .$pic_loc. "')";
if ($link->query($sql) === TRUE) {
    echo ' <div class="row">
        <div class="col s6 offset-s3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Update Has Been Added</span>
              <p>Thank You for adding an Update</p>
            </div>
            <div class="card-action">
              <a href="index.php">Go Back Home</a>           
              </div>
          </div>
        </div>
      </div>
            ';
}
}
?>

    </body>
  </html>