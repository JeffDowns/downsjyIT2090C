<?php
session_start();
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
    <nav>
        <div class="nav-wrapper">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="assignments.php">Assignments</a></li>
            <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="nav-login">
                <?php
                    if(isset($_SESSION['u_cuid'])){
                    echo '<form action="backend/logout.php" method="POST">
                          <button type="submit" name="submit">Logout</button>
                          </form>' . 'Logged in as: ' . $_SESSION['u_cuid'];
                    }else{
                        echo '<form action="backend/login.php" method="POST">
                        <input type="text" name="cuid" placeholder="Username/Email">
                        <input type="password" name="pass" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                        </form>
                        <div class="signup">
                        <a href="signup.php">Sign Up now!!</a>
                        </div>';
                    
                    }
                        
                ?>         
            </div>
        </div>
    </nav>
    </header>