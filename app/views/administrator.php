<?php require 'partials/cmsnav.php' ?>


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