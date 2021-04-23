<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <!-- css reference -->
        <link rel="stylesheet" href="home.css">
    </head>
    <?php
    session_start();
    if(!(isset($_SESSION['name'])))
    {
        header('location: login.php');
    }
    ?>
    <body>
        <div class="main_body">
            <div class="nav">
                <!-- here is the navigation bar -->
                <div class="welcome_text">
                    <p style="font-size: 18px;">Welcome <?php echo $_SESSION['name']; ?> </p>
                </div>
                <div class="logout_button">
                    <p onclick="goLogout();">Logout</p>
                </div>
            </div>

            <div class="row">
                <div class="column left">
                    <div class="list_of_formats">
                        <li>Note 1</li>
                        <li>Note 2</li>
                        <li>Note 3</li>
                        <li>Note 4</li>
                        <li>Note 5</li>
                    </div>

                </div>
                <div class="column right">
                    <div class="editor_tools">
                        <div class="editor_title">
                            Note_name
                            <hr>
                        </div>
                        <div class="editor_input">
                            <textarea placeholder="Write your notes here...."></textarea>
                        </div>
                        <div class="save_button">
                            <button type="submit">SAVE</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="editor_session">

            </div>
        </div>
    </body>
    <script>
        function goLogout()
        {
            window.location.replace("logout.php");
        }
    </script>
</html>
