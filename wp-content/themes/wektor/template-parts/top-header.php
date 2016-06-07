<?php $title = get_field('title') ?>
<?php $image = get_field('image') ?>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10 left">
                <?php if (!empty($title)): ?>
                <h2><?= $title ?></h2>
                <?php endif; ?>
            </div>
            <div class="col-md-14 no-gutters right"
                 style="background: url(<?= $image['url'] ?>) center no-repeat;">
            </div>
        </div>
    </div>
</div>