<?php require 'partials/head.php' ?>


<p> User overview </p>


<table>
    <tr>
        <th>Username</th>
        <th>E-mail</th>
        <th>Artist</th>
    </tr>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user->username?></td>
        <td><?php echo $user->useremail?></td>
        <td>
            <?php if($user->isArtist):?>
                <p>&#10003<p>
            <?php else: ?>
                <p>&#10007<p>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<h1> Update email </h1>

<form method="POST" action="/updateUserEmail">
    <input name="username" id="username" placeholder="Chose your username">
    <input name="useremail" id="useremail" placeholder="Your e-mail">


    <button type="submit">Submit</button>
</form>





<!-- <button type="submit">Delete user</button> -->