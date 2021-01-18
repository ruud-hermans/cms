<?php require 'partials/head.php' ?>

<script src="public/js/login.js"></script>

<h1> Login </h1>

<form method="POST" action="/login">
    <input name="username" id="username" placeholder="Your username">
    <!-- <input name="useremail" id="useremail" placeholder="Your e-mail"> -->
    <input name="password" id="password" placeholder="Your password">
    <input type="checkbox" onclick="hidePassword()">Show Password 

    <button type="submit" >Submit</button>
</form>


<h1> Register </h1>

<form method="POST" action="/register">
    <input name="username" id="username" placeholder="Chose your username">
    <input name="useremail" id="useremail" placeholder="Your e-mail">
    <!-- <input name="password" id="password" placeholder="Your password"> -->
    <!-- <input name="username" id="username" placeholder="Are you an artist?"> -->

    <!-- <input name="password" id="password" placeholder="Chose your password">
    <input name="password" id="password" placeholder="Verify your password"> -->

    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php' ?>