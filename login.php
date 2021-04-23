<html>
    <head>
        <!-- reference links will be added here
        if you want a separeate css file, you need to refere thar here -->

        <!-- css reference -->
        <link rel="stylesheet" href="index.css">
        <!-- below a font relation specified -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    </head>
    <?php
    session_start();
    if(isset($_SESSION['name']))
    {
        header('location: index.php');
    }
    ?>
    <body>
        <!-- body tag is main part -->
        <!-- below is a division tag,it is a area which contains
        particular elements such as buttons, text, input field etc. -->
        <div class="main_body">
            <!-- we use class name to apply style properties inside a css file -->
            <!--<div class="intro_text" id="intro_text">
                <p id="intro_ptag">Welcome to SMART SCRIPT <br>
                Screenwriting software that composes your whole production <br> Write, share, and collaborate to create professionally formatted screenplays. </p> -->
            <div class="intro_text" id="intro_text">
                <!-- id="intro_ptag" -->
                <img class="note" src="note.png" alt="note-img">
              <h1><p>
                    NOW NOTES </p></h1>
                    <h4><p class="p2" style="font-size: 29px; text-align: center; margin-top: -90px; letter-spacing: .5px;">
                        Write beautifully <br>  Nownotes is a beautiful, flexible writing app for crafting notes and prose.</p>
                    <p class="p3" style="text-align: center; font-size: 24px; margin-top: -20px; letter-spacing: .5px; margin-bottom: -60px;">
                         Write, share, and collaborate to create <br>  professionally formatted notes. </p>
</h4>
           </div>

            <div class="second_intro" id="second_intro">
                <p id="intro_ptag">NOW NOTES</p>
            </div>
            <div class="start_button">
                <button type="button" id="button_start" onclick="displayLogAndReg();">GO!</button>
            </div>
            <div class="login_and_reg" id="login_and_reg">
                <!-- in this division, we assign our login and registeration form -->
                <div class="loginForm">
                    <form method="post" name="loginform" action="newlogin.php" onsubmit="return proceedLogValidation();">
                        <div class="heading">
                            Login
                            <hr style="margin-top: 15px; color: black;">
                        </div>
                        <div class="email_input">
                            <label>Email</label>
                            <input type="text" id="user" name="user" placeholder="Enter email..."/>
                            <span id="usernameerror"><p></p></span>
                        </div>
                        <div class="password_input">
                            <label>Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter password..."/>
                            <span id="errorLogPass"><p></p></span>
                        </div>
                        <div class="buttom_submitt">
                            <button type="submit">Login</button>
                        </div>
                        <div class="footer">
                            <hr style="margin-bottom: 15px; color: black;">
                            forgot password?
                        </div>
                    </form>
                </div>
                <div class="regForm">
                    <form method="post" name="regiForm" action="newregistration.php" onsubmit="return proceedRegValidation();">
                        <div class="heading">
                            Register
                            <hr style="margin-top: 15px; color: black;">
                        </div>
                        <div class="email_input">
                            <label>Email</label>
                            <input type="text" id="userRegName" name="userRegName" placeholder="Enter email..."/>
                            <span id="errorUsernameReg"><p></p></span>
                        </div>
                        <div class="password_input">
                            <label>Password</label>
                            <input type="password" id="userRegPass" name="userRegPass" placeholder="Enter password..."/>
                            <span id="errorPassReg"><p></p></span>
                        </div>
                        <div class="buttom_submitt">
                            <button type="submit">Register</button>
                        </div>
                        <div class="footer">
                            <hr style="margin-bottom: 15px; color: black;">
                            have an account? login
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- above || here is the end of main_body division -->
    </body>
    <script>
        function displayLogAndReg(){
            var newIntro = "NOW NOTES";
            // document.getElementById("intro_ptag").style.fontSize = "24px";
            document.getElementById("intro_ptag").innerHTML = newIntro;
            document.getElementById("button_start").style.display = "none";
            document.getElementById("intro_text").style.display = "none";
            document.getElementById("second_intro").style.display = "block";
            document.getElementById("login_and_reg").style.display = "block";
            // document.getElementById("intro_text").style.marginTop = "5%";
        }

        function proceedLogValidation(){
        var logName = document.loginform.user.value;
        var logPass = document.loginform.password.value;
        var patternEmail="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
        var patternPass=".{8,}"

        if(logName == ""){
            document.getElementById('usernameerror').innerHTML = "we need a valid email";
            return false;
        }
        else if(!logName.match(patternEmail)){
            document.getElementById('usernameerror').innerHTML = "Not a valid email";
            return false;
        }
        else{
            document.getElementById('usernameerror').innerHTML = "";
        }

        if(logPass == ""){
            document.getElementById('errorLogPass').innerHTML = "we need a valid password";
            return false;
        }
        else if(!logPass.match(patternPass)){
            document.getElementById('errorLogPass').innerHTML = "Password must be more than 8 characters";
            return false;
        }
        else{
            document.getElementById('errorLogPass').innerHTML = "";
            return true;
        }
        // else{
        //     document.getElementById('usernameerror').innerHTML = "";
        //     return true;
        // }


    }
        function proceedRegValidation(){
        var regName = document.regiForm.userRegName.value;
        var regPass = document.regiForm.userRegPass.value;
        var patternEmail="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
        var patternPass=".{8,}"

        if(regName == ""){
            document.getElementById('errorUsernameReg').innerHTML = "we need a valid user name";
            return false;
        }
        else if(!regName.match(patternEmail)){
            document.getElementById('errorUsernameReg').innerHTML = "No a valid email";
            return false;
        }
        else{
            document.getElementById('errorUsernameReg').innerHTML = "";

            if(regPass == ""){
            document.getElementById('errorPassReg').innerHTML = "we need a valid password";
            return false;
        }
        else if(!regPass.match(patternPass)){
            document.getElementById('errorPassReg').innerHTML = "Password must be more than 8 characters";
            return false;
        }
        else{
            document.getElementById('errorPassReg').innerHTML = "";
            return true;
        }
        }

    }
    </script>
</html>
