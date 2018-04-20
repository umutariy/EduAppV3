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
      			$fname= $blog->FirstName;
      			$lname = $blog->LastName;
      			$cname = $blog->ClassName; 
            $tname = $blog->Teacher_name;
          }
        ?>
        <tr>
            <td><?php echo $fname;?></td>
            <td><?php echo $lname;?></td>
            <td><?php echo $cname;?></td>
            <td><?php echo $tname;?></td>
            <td><form method="POST" action="attendance"><button class="btn waves-effect" type="submit" name="Present">Present</button> | <button class="btn waves-effect waves-light" type="submit" name="Absent">Absent</button></form></td>
        </tr>
    </table>

