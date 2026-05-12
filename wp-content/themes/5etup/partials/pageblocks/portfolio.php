<section class="portfolio">
    <div class="frame">
        <div class="block-full title">
            <h2>Portfolio</h2>
        </div>
        <div class="grid-container">
            <?= wp_loop('projects', '8', 'portfolio') ?>
        </div>
        <div class="block-full buttons">
            <a href="/projects" class="btn secondary">Full portfolio</a>
        </div>
    </div>
</section>