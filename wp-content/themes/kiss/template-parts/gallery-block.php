<?php defined( 'ABSPATH' ) || exit; ?>


<?php
    $i = 0;
    foreach (getGallery() as $gallary) :
?>
    <div class="col-md-4 gal-img mb-4">
        <?php if ($gallary['others_img']) : ?>
            <a href="#gal<?php echo $i; ?>">
                <img src="<?php echo $gallary['main_img'] ?>" alt="Галерея" class="img-fluid">
            </a>
        <?php else: ?>
            <img src="<?php echo $gallary['main_img'] ?>" alt="Галерея" class="img-fluid">
        <?php endif; ?>

        <div id="gal<?php echo $i; ?>" class="popup-effect">
            <div class="popup">
                <a class="close" href="#<?php echo $i; ?>">&times;</a>
                <div class="popup-items">
                    <?php foreach ($gallary['others_img'] as $others) : ?>
                        <div class="item">
                            <img src="<?php echo $others['other_img'] ?>"
                                 alt="Popup Image" class="img-fluid"/>
                            <h5 class="text-name-pop mt-4"><?php echo $others['gallary_title'] ?></h5>
                            <p class="mt-3"><?php echo $others['gallary_description'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    $i++;
    endforeach;
?>
