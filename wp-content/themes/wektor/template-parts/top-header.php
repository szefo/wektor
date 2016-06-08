<?php $title = get_field('title') ?>
<?php $image = get_field('image') ?>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-8 left">
                <?php if (!empty($title)): ?>
                <h2><?= $title ?></h2>
                <?php endif; ?>
            </div>
            <div class="col-xl-14 col-lg-16 right">
                <div style="background-image: url(<?= $image['url'] ?>);">

                </div>
            </div>
        </div>
    </div>
</div>