<?php
session_start():
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { 
    header("Location: ../admin.php"); /* If not logged in, kick the user back to login page */
    exit(); /* Stop execution so nothing below is served */
}

?>

<html>
    <head>
        <link rel="stylesheet" href="dash.css" >
        <title>Dashboard</title>
    </head>
    <body>
        <div class = "dashbody">
            <div class = "dashleft">
                <h1 class ="adminname">Admin</h1>
                <ul>
                    <li><a href="">Users</a></li>
                    <li><a href="">Inventory</a></li>
                    <li><a href="">Logs</a></li>
                    <li><a href="">Inbox</a></li>
                    <li><a href="">Settings</a></li>
                    
                </ul>
                <footer>
                    <img src=assets/logout.png>
                    <a href="../logout.php">
                    Log out</a>
                </footer>
            </div>
            <div class = "dashright">

            </div>
        </div>
    </body>

</html>