<?php snippet('header') ?>
<div class="docs-wrapper">
<?php snippet('sidenav',['data' => page('home')]) ?>
  <main class="docs-content">
    <div class="container">
    <?php foreach(page('home')->children()->listed() as $childpage): ?>
      <?php snippet('article',['data' => $childpage]) ?>
    <?php endforeach ?>
    </div>
  </main>
</div><!--//docs-wrapper-->

<!-- Page Specific JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
<?= js(['assets/js/highlight-custom.js', '@auto']) ?>
<?= js(['assets/plugins/jquery.scrollTo.min.js', '@auto']) ?>
<?= js(['assets/plugins/lightbox/dist/ekko-lightbox.min.js', '@auto']) ?>
<?= js(['assets/js/docs.js', '@auto']) ?>

<?php snippet('footer') ?>
