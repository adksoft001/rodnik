<?php

/*
 * 27.03.2020
 * File: google_schema.php
 * Encoding: UTF-8
 * Project: tokyogarage-yii2.loc
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use yii\helpers\Url;

$symbos = [
    1 => '►', // Стрелка
    2 => '✅', // Галка (зеленая)
    3 => '🚘', // Машинка
    4 => '🛠', // Молот ключ
    5 => '✅', // Галка (зеленая)
    6 => '✅', // Галка (зеленая)
    7 => '✅', // Галка (зеленая)
    8 => '✅'   // Галка (зеленая)
];
$ctr = 1;
?>
<script type="application/ld+json">
{
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
                {
                        "@type": "ListItem",
                        "position": <?= $ctr; ?>,
                        "item": {
                                "@id": "<?= Url::base(true); ?>",
                                "name": "<?= $symbos[$ctr]; ?> МигАвтосервис"
                        }
                },
<?php if (isset($breadcrumbs) AND ! empty($breadcrumbs)) : ?>
    <?php foreach ($breadcrumbs as $data) : ?>
        <?php $ctr++;
        if (isset($data['url'])) :
                    ?>
    {
                        "@type": "ListItem",
                        "position": <?= $ctr; ?>,
                        "item": {
                                "@id": "<?= Url::base(true); ?><?= $data['url'] ?>",
                                "name": "<?= $symbos[$ctr]; ?> <?= $data['label']; ?>"
                        }
                },
    <?php else: ?>
{
                        "@type": "ListItem",
                        "position": <?= $ctr; ?>,
                        "item": {
                                "@id": "<?= Url::base(true); ?><?= Yii::$app->request->url; ?>",
                                "name": "<?= $symbos[$ctr]; ?> <?= $data; ?>"
                        }
                }
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>    
        ]
}
</script>
