<body class="img">
    <div class="section"></div>
    <main>
        <center>

            <!-- Header -->
            <h3 style="color: #0097a7">Welcome to EduApp</h3>

            <!-- Form -->
            <?php echo form_open("login"); ?>
            <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
                <div class="section"></div>
                
                <!-- Username -->
                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type="text" name='email' required />
                        <label for='email'>Email</label>
                    </div>
                </div>

                <!-- Password -->
                <div class='row'>
                    <div class='input-field col m12'>
                        <input class='validate' type='password' name='password' id='password' required />
                        <label for='password'>Password</label>
                    </div>
                </div>
                
                <!-- Login button -->
                <div class='row'>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                    <br> 

                    <!-- create an account -->
                    <label>
                        <b style="color: #0097a7;">Don't have an Acount? <a href="signup2">Sign Up</a></b>
                    </label>        
                </div><!-- end of login div -->
            </div><!-- end of the entire div -->
            <?php echo form_close(); ?>
        </center>
    </main>