<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 6/6/16
 * Time: 20:44
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Records</h1>
<ul>
    <?php foreach($list as $key=>$value): ?>
        <li>
            <?= $key ?>:
            <?= $value->title ?>
            <?= $value->keywords ?>
        </li>
    <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination])?>