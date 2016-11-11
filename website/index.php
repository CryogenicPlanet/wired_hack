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
          <span class="white-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
          sed diam nonummy nibh euismod tincidunt ut laoreet dolore
          magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
          quis nostrud exerci tation ullamcorper suscipit lobortis nisl
          ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
          dolor in hendrerit in vulputate velit esse molestie consequat,
          vel illum dolore eu feugiat nulla facilisis at vero eros et
          accumsan et iusto odio dignissim qui blandit praesent luptatum
          zzril delenit augue duis dolore te feugait nulla facilisi.
          Nam liber tempor cum soluta nobis eleifend option congue
          nihil imperdiet doming id quod mazim placerat facer possim
          assum. Typi non habent claritatem insitam; est usus legentis
          in iis qui facit eorum claritatem. Investigationes
          demonstraverunt lectores legere me lius quod ii legunt saepius.
          Claritas est etiam processus dynamicus, qui sequitur mutationem
          consuetudium lectorum. Mirum est notare quam littera gothica,
          quam nunc putamus parum claram, anteposuerit litterarum formas
          humanitatis per seacula quarta decima et quinta decima. Eodem
          modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
          in futurum.
          </span>
        </div>
      </div>
    </div>
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </body>
  </html>
