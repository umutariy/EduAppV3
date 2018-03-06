    <!-- Navigation Bar -->
    <nav>
      <div class="nav-wrapper" style="background-color: #0097a7">
        <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
        <!-- <i class="material-icons">list</i> -->
        <ul id = "dropdown" class = "dropdown-content">
          <li><a href="#">Students</a></li>
          <li><a href="test">Assignments</a></li>
          <li><a href="message">Message</a></li>
          <li><a href="#">Grades</a></li>
        </ul>
        <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
          <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>  
          <a href = "index.html" style="background-color: transparent;" class="right">Sign Out</a>
        </div>
      </nav>

      <!-- Main Body -->

      <center>
        <h4 style="color: #0097a7">Send Message</h4>
        <fieldset style="width:150" align="center" class="fieldset">
        <form action="send_message" method="POST">
            <div class="row">
              <div class='input-field col s6'>
                <input class='validate' type="text" name='title' required />
                <label for='title'>Title</label>
              </div>
              <div class='input-field col s6'>
                <input class='validate' type="text" name='subject' required />
                <label for='subject'>Subject</label>
              </div>
            </div>
            <div class="row">
              <div class='input-field col s12'>
                <TextArea class='validate' type="text" name='msg' required> </TextArea>
                <label for='msg'>Message</label>
              </div>
            </div>
            <div class="row">
              <div class='input-field col s6'>
                <input class='validate' type="text" name='recipient' required />
                <label for='recipient'>Add Recipient</label>
              </div>
            </div>
            <div class='row'>
              <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Send Message
                <i class="material-icons right">send</i>
              </button>         
            </div>
          </form>
        </fieldset>
      </center>
