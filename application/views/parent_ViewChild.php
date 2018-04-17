  	<body class="img">
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
      
      <!-- search button -->
      <form method="POST" action="">
        <div class='row'>
          <div class='input-field col s3'>
            <input type="text" class='validate' name="search_name" placeholder="Search For Your Child Name">
          </div>
          <div class='input-field col s3'>
            <input type="text" class='validate' name="search_number" placeholder="Search For Your PhoneNumber">
          </div>
          <div class='input-field col s3'>
            <button type="submit" class="btn waves-effect waves-light" name="search">Search</button>
          </div>
        </div>
      </div>

    </form>
    <table class="striped" bgcolor="grey">
      <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Class</th>
        <th>Teacher</th>
        <th>Attendance</th>
      </tr>
      <?php
      foreach ( $table as $blog )
      {
        ?>
        <tr>
          <td><?php echo $blog->FirstName?></td>
          <td><?php echo $blog->LastName?></td>
          <td><?php echo $blog->Class?></td>
          <td><?php echo $blog->Teacher?></td>
          <td><?php echo $blog->Attendance?></td>
        </tr>
        <?php
      }

      ?>
    </table>

