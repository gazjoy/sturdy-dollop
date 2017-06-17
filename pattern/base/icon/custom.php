<?php
    $icons = array(
        'bag',
        'caravan',
        'wigwam',
        'key'
    );
?>
<ul class="nav nav--inline nav--space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('custom', $icon); ?></li><?php endforeach; ?>
</ul>
