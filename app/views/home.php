<?php require 'partials/head.php' ?>

<h1> Login </h1>

<form method="GET" action="/userpage">
    <input name="username" id="username" placeholder="Your username">
    <input name="password" id="password" placeholder="Your password">

    <button type="submit">Submit</button>
</form>


<h1> Register </h1>

<form method="GET" action="/register">
    <input name="username" id="username" placeholder="Chose your username">
    <input name="password" id="password" placeholder="Chose your password">
    <input name="password" id="password" placeholder="Verify your password">

    <button type="submit">Submit</button>
</form>

<p> Zie hier de data uit de DB: </p>
<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?php if($user->isArtist):?>
                <p>Artist: &#10003<p>
            <?php else: ?>
                <p>Artist: &#10007<p>
            <?php endif; ?>
    <?php endforeach; ?>
</ul>




<?php require 'partials/footer.php' ?>