<?php 
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="User Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="password" placeholder="Password">           
            <button type="submit" name="submit">Sign up</button>
        </form>

    </div>
</section>

<?php 
    include_once 'footer.php';
?>
