<?php snippet('header') ?>

<main>

  <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
          <h1 class="page-heading single-col-max mx-auto"><?= $page->headline() ?></h1>
          <div class="page-intro single-col-max mx-auto"><?= $page->text()->kt() ?></div>
          <div class="main-search-box pt-3 d-block mx-auto">
                  <form class="search-form w-100">
                  <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                  <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
              </form>
              </div>
        </div>
      </div><!--//page-header-->

      <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
            <?php foreach($pages->listed() as $childpage): ?>
            <?php snippet('card', ['data' => $childpage]) ?>

            <?php endforeach ?>
            </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->
      
</main>

<?php snippet('footer') ?>
