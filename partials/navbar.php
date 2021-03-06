<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><img style="max-height:30px;margin-top:-4px" src="assets/img/syn_logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="active" href="news.php">News</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="community.php">Community</a></li>
        <?php
        if(isset($_SESSION['u_id'])){
          echo '<li><a href="newarticle.php" data-toggle="tooltip" data-placement="bottom" title="Upload"><span class="glyphicon glyphicon-cloud-upload"></span></a></li>';
        }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
        if(isset($_SESSION['u_id'])){
          echo '<li><a href="user.php?user='.$_SESSION['u_uid'].'">'.$_SESSION['u_uid'].'</a></li>';
          echo '<li><a href="" data-toggle="tooltip" data-placement="bottom" title="Your Olwycoins"><img style="margin-top:-5px;height:16px;width:16px;" src="assets/img/icons/owlcoin.png"> 0</a></li>';
          echo '<li><a href="" data-toggle="tooltip" data-placement="bottom" title="Notifications"><span class="glyphicon glyphicon-envelope"></span> 0</a></li>';
          echo '<li><a href="" data-toggle="tooltip" data-placement="bottom" title="Settings"><span class="glyphicon glyphicon-cog"></span></a></li>';

        } else {
          echo '<li><form action="signup.php">
                       <button type="submit" style="margin-left:10px;" class="btn btn-info navbar-btn" name="submit">Signup</button>
                    </form></li>';
          echo '  ';
          echo '<li><form action="login.php">
                       <button type="submit" style="margin-left:10px;" class="btn btn-success navbar-btn" name="submit">Login</button>
                    </form></li>';
        }
      ?>
      </ul>
    </div>
  </div>
</nav>

<!-- TOOLTIP SCRIPT -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>