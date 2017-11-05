<?php
    include_once 'templates/header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form action="backend/signup.php" class="signup-page-wrapper"
            method="POST">
                <input type="text" name="firstName" placeholder="Firstname">
                <input type="text" name="lastName" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="cuid" placeholder="Usernsme">
                <input type="text" name="pass" placeholder="Password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </section>

<?php 
    include_once 'templates/footer.php';
?>