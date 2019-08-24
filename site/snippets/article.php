<article class="docs-article" id="<?= $data->uid() ?>">
        <header class="docs-header">
            <h1 class="docs-heading"><?= $data->title() ?> <span class="docs-time">Last updated: <?= $data->modified('Y-m-d') ?></span></h1>
            <?= $data->text()->kt() ?>            
        </header>
        <?php foreach($data->children()->listed() as $childpage): ?>
            <?php snippet('section', ['data' => $childpage]) ?>
        <?php endforeach ?>
</article>