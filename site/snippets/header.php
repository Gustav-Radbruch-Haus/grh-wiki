<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- FontAwesome JS-->
  <?= js(['/assets/fontawesome/js/all.min.js', '@auto']) ?>
  <?= js(['/assets/plugins/jquery-3.4.1.min.js', '@auto']) ?>
  <?= js(['/assets/plugins/popper.min.js']) ?>
  <?= js(['/assets/plugins/bootstrap/js/bootstrap.min.js', '@auto']) ?> 

  <!-- Theme CSS -->
  <?= css(['/assets/css/theme.css', '@auto']) ?>

</head>
<body>

<header class="header fixed-top">
    <div class="branding docs-branding">
        <div class="container-fluid position-relative py-2">
            <div class="docs-logo-wrapper">
              <div class="site-logo">
                <a class="navbar-brand" href="<?= site()->url() ?>">
                <img class="logo-icon mr-2" src="/assets/images/logo.svg" alt="logo" style="height: 40px" /><span class="logo-text"><?= $site->title() ?></span></a>
              </div>
            </div><!--//docs-logo-wrapper-->
            <?php if($page != page('home')): ?>
            <!-- <div class="docs-top-utilities d-flex justify-content-end align-items-center">
	                <div class="top-search-box d-none d-lg-flex">
		                <form class="search-form">
				            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
				            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
				        </form>
	                </div>
              </div> -->
              <?php endif ?>
              <nav class="languages docs-top-utilities d-flex justify-content-end align-items-center">
                <ul>
                <a href="<?= $page->url($kirby->language()->code()) ?>">
                  <li>
                    <span class="flag-icon flag-icon-<?= strtolower(explode("_", $kirby->language()->locale()[0])[1]) ?>"></span>
                  </li>
                </a>
                <?php foreach($kirby->languages()->filter(function ($language) {
                  return $language != kirby()->language();
                }) as $language): ?>
                <a href="<?= $page->url($language->code())?>"><li>
                    <span class="flag-icon flag-icon-<?= strtolower(explode("_", $language->locale()[0])[1]) ?>"></span>
                  </li></a>
                <?php endforeach ?>
                </ul>
              </nav>
        </div><!--//container-->
    </div><!--//branding-->
</header><!--//header-->

