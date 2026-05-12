<div class="card list">
    <div 
        class="img"
        style="background-image: url(<?= esc_url(get_the_post_thumbnail_url()) ?>);"
    >
        <!-- <a href="" class="btn tertiary"><?= the_title() ?></a> -->
        <!-- <?= the_title() ?> -->
    </div>
    <div class="content">
        <h3 class="title"><?= the_title() ?></h3>
        <div class="text"><?= the_excerpt() ?></div>
    </div>
    <!-- <a href="<?= the_permalink() ?>" class="btn secondary" onclick="modal()">Read more</a> -->
    <button 
        class="btn primary" 
        onclick="active_modal(this)"

        data-img="<?= esc_url(get_the_post_thumbnail_url()) ?>"
        data-title="<?= esc_attr(get_the_title()) ?>"
        data-excerpt="<?= esc_attr(get_the_excerpt()) ?>"
        data-content="<?= esc_attr(get_the_content()) ?>"
    >
    </button>
    
</div>