<?php defined( 'ABSPATH' ) || exit; ?>

<div class="contacts">
    <?php foreach (getContacts() as $contacts) : ?>
        <div class="contact">
            <i class="fas fa-map-marker-alt"></i>
            <p><?php echo $contacts['address']; ?></p>
            <?php foreach ($contacts['phones'] as $phone) : ?>
                <a href="tel:<?php echo $phone['phone']; ?>"><?php echo $phone['phone']; ?></a><br/>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
