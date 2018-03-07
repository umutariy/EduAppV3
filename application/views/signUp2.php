    <div class="section"></div>
    <main>
        <center>

            <!-- Header -->
            <h3 style="color: #0097a7">Welcome to EduApp</h3>

            <!-- Form -->
            <?php echo form_open("register"); ?>
                <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
                    <div class="section"></div>
                    
                    <!-- first name and last name -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='firstname' required />
                            <label for='firstname'>First Name</label>
                        </div>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='lastname' required />
                            <label for='lastname'>Last Name</label>
                        </div>
                    </div>

                    <!-- phone number and password -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='phonenumber' required />
                            <label for='phonenumber'>Phone Number</label>
                        </div>
                        <div class='input-field col s6'>
                            <input class='validate' type='password' name='password' id='password' required />
                            <label for='password'>Password</label>
                        </div>
                    </div>

                    <!-- email and type of user -->
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input class='validate' type="text" name='email' required />
                            <label for='email'>Email</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="status">
                              <option value="" disabled selected>Select User Type</option>
                              <option value="Administrator">Administrator</option>
                              <option value="Student">Student</option>
                              <option value="Teacher">Teacher</option>
                              <option value="Parent">Parent</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Signup button -->
                    <div class='row'>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
                            <i class="material-icons right">send</i>
                        </button>       
                    </div> <!-- end of signup button -->
                </div> <!-- end of the entire div -->
            </form>
        </center>
    </main>

