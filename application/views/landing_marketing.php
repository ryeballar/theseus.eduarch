<section class="marketing">
    <section class="content">
        <h4 class="text-center" style="padding: 1em"><?php echo $title ?></h4>

        <ul class="no-bullet" style="padding: 0.2em">
            <?php foreach($items as $item): ?>
            <li class="row">
                <section class="small-2 column"><span class="<?php echo $item['icon'] ?>"></span></section>
                <article class="small-10 column"><?php echo $item['article'] ?></article>
            </li>
            <?php endforeach ?>
        </ul>

        <section class="text-center"><a class="expand button" href="signup">Sign Up</a></section>

    </section>
</section>