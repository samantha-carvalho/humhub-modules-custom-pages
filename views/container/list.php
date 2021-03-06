<?php

use yii\helpers\Html;
use humhub\modules\custom_pages\models\ContainerPage;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('CustomPagesModule.base', 'Custom Pages'); ?></div>
    <div class="panel-body">

        <?php echo Html::a(Yii::t('CustomPagesModule.base', 'Create new Page'), $container->createUrl('add'), array('class' => 'btn btn-primary')); ?>

        <p />
        <p />

        <?php if (count($pages) != 0): ?>
            <?php
            $types = ContainerPage::getPageTypes();
            ?>
            <table class="table">
                <tr>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Title'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Type'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Sort Order'); ?></th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><i class="fa <?php echo $page->icon; ?>"></i> <?php echo Html::a(Html::encode($page->title), $container->createUrl('edit', ['id' => $page->id])); ?></td>
                        <td><?php echo $types[$page->type]; ?></td>
                        <td><?php echo (int) $page->sort_order; ?></td>
                        <td><?php echo Html::a('Edit', $container->createUrl('edit', ['id' => $page->id]), array('class' => 'btn btn-primary btn-xs pull-right')); ?></td>
                    </tr>

                <?php endforeach; ?>
            </table>

        <?php else: ?>

            <p><?php echo Yii::t('CustomPagesModule.base', 'No custom pages created yet!'); ?></p>


        <?php endif; ?>

    </div>
</div>


