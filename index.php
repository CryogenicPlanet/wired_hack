   <?php
              $servername = "sql6.freemysqlhosting.net";
              $username = "sql6144082";
              $password = "rzFA99rJMe";   
              $link = new mysqli($servername, $username,$password,$username);
              if ($link->connect_error) {
                  die('Could not connect: ' . $link->connect_error);
              }
              $sql = "SELECT Amount FROM Donations";
              $result = $link->query($sql);
                  $dn_amount;
                            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()){
                  $dn_amount = $dn_amount + $row['Amount'];
              }}
         ?>
         <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
         <title Zonne-Solaris</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home</title>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

      	<div class="parallax">
      <div class="parallax"><img src="https://s-media-cache-ak0.pinimg.com/originals/a5/93/1c/a5931c16a3d4f07ddb2caa3c121b9941.jpg"></div>
	   	</div>

      <script type="text/javascript">$(document).ready(function(){
      $('.parallax').parallax();
    });</script>
     
      
        
    <br><br><br>
    <div class="row center"><img src="http://www.clipartkid.com/images/467/half-rising-sun-clip-art-5agf1e-clipart.png" width="300" height="200"></div>
    <br>
    <div align="center">
    <h3 style="color: #eeeeee">Zonne Solaris</h3>
    <h5 style="color: #eeeeee">Solar Projects Crowd Funding Platform!</h5>
    <br><br>
    </div>
    
  <br><br>
    </div>
    <div class="container">
     <div class="row">
      <div class="col s6  offset-s3">
        <div class="card-panel teal">
          <span class="white-text"><center>Current Donations : <?php echo $dn_amount; ?></center>
          </span>
        </div>
      </div>
    </div>
    <div align="center">
      <a href="home.php" class="waves-effect waves-light btn">Home</a>
      <a href="discover.php" class="waves-effect waves-light btn">Discover</a>
      <a href="#know_more" class="waves-effect waves-light btn">Know More</a>
     </div>
    </div>
     <?php 
        for($i;$i<= 15;$i++){
            echo '
             <div class="row">
          </div>
            ';
        }
          ?>
          <div class="row">
          </div><div class="row">
      <div class="col s12" id="know_more">
        <div class="card-panel teal">
          <span class="white-text">We Zonne-solaris are here to provide  you open source solar projects.
And this is the place where you find many solar projects and also you can upload your own solar projects and also you can donate your projects or money here.
This is a opensource with a free of cost.
You can get funding for your own projects.
          </span>
        </div>
      </div>
    </div>
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
