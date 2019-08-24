<div class="col-12 col-lg-4 py-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-3">
                <span class="theme-icon-holder card-icon-holder mr-2">
                    <i class="fas fa-map-signs"></i>
                </span><!--//card-icon-holder-->
                <span class="card-title-text"><?= $data->title() ?></span>
            </h5>
            <div class="card-text">
                <?= $data->description()->kt() ?>
            </div>
            <a class="card-link-mask" href="articles#<?= $data->uid() ?>"></a>
        </div><!--//card-body-->
    </div><!--//card-->
</div><!--//col-->