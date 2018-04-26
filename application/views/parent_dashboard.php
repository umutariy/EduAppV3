<body style="background-color: #b2ebf2">
  
  <nav>
   <div class="nav-wrapper" style="background-color: #0097a7">
    <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
    
    <ul id = "dropdown" class = "dropdown-content">
      <li><a href="#">Children</a></li>
      <li><a href="#">Assignments</a></li>
      <li><a href="#">Records</a></li>
    </ul>
    <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
      <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>	
      <a href = "logout" style="background-color: transparent;" class="right">Sign Out</a>
    </div>
  </nav>
  <center>
    <div>
      <em><h1>Welcome Parent</h1></em>
    </div>
    <div>
      <img src="../images/pp.png" style="width: 500px; height: 300px">
    </div>
    <div>
    <form method="POST" action="<?php echo base_url().'index.php/children'?>">
      <button class="btn btn-block waves-effect " type="submit" >Take Attendance</button>
    </form>
      
    </div>
  </center>


