
<!-- Navigation Bar -->
<nav>
 <div class="nav-wrapper" style="background-color: #0097a7">
  <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
  <!-- <i class="material-icons">list</i> -->
  <ul id = "dropdown" class = "dropdown-content">
    <li><a href="getStudent">Students</a></li>
    <li><a href="test">Assignments</a></li>
    <li><a href="message">Message</a></li>
    <li><a href="#">Grades</a></li>
  </ul>
  <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
    <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>	
    <!-- <i class="material-icons">list</i> -->
  </div>
</nav>

<!-- Main Body -->
<center>
  <h4 style="color: #0097a7">Students in your Class</h4>
</center>

<table class="striped">
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
  </tr>
  <?php
  foreach ( $table as &$blog )
  {
    $blog     = get_object_vars($blog);
    ?>
    <tr>
      <td><?php echo $blog['FirstName']?></td>
      <td><?php echo $blog['LastName']?></td>
      <td><?php echo $blog['Email']?></td>
    </tr>
    <?php
  }

  ?>
</table>
