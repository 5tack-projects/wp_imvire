<div class="grid card project summon">
    <div class="img">
        <!-- <a href="" class="btn tertiary"><?= the_title() ?></a> -->
        <?= the_title() ?>
    </div>
    <div class="content">
        <!-- <h3 class="title"><?= the_title() ?></h3> -->
        <p class="text"><?= the_content() ?></p>
        <a href="<?= the_permalink() ?>" class="btn secondary">Read more</a>
    </div>
</div>