<?php

use frontend\models\NewsCategory;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel app\models\Product */

$this->title = 'Danh sách logs';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$viewMsg = 'Xem';
$updateMsg = 'Cập nhật';
$deleteMsg = 'Xóa';
$scrollingTop = 10;
?>

<!-- Page -->
<div class="page">
    <?php echo $this->render("//element/breadcrumb"); ?>
    <div class="page-content css__table ">
        <div class="panel">
            <div class="panel-body">
                <?php echo $this->render("//element/message"); ?>
                <?php
                $gridColumns = [
                     ['class' => 'kartik\grid\CheckboxColumn'],
                    [
                        'attribute' => 'name',
                    ],
                    [
                        'attribute' => 'action',
                    ],
                    [
                        'label' => 'Thành viên',
                        'attribute' => 'username',
                        'width'=>'200px',
                        'value' => 'member.username',
                    ],
                    [
                        'attribute' => 'IP',
                    ],

                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'width' => '100px',
                        'updateOptions' => ['title' => 'Cập nhật', 'data-toggle' => 'tooltip'],
                        'deleteOptions' => ['title' => 'Xóa', 'data-toggle' => 'tooltip','data-style' => 'top:100px' ],
                        'headerOptions' => ['class' => 'kartik-sheet-style'],
                        'template' => '{update} {delete}',
                        'buttons' => [
                            'delete' => function ($url, $model, $key) {
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>',$url,
                                    [
                                        'title' => Yii::t('app', 'Xóa'),
                                        'data-pjax' => '1',
                                        'data' => [
                                            'method' => 'post',
                                            'confirm' => Yii::t('app', 'Bạn chắc chắn thực hiện thao tác này?'),
                                            'pjax' => 1,],
                                    ]
                                );
                            },
                        ]
                    ],
                ];
                ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' =>$gridColumns,
                    'showPageSummary' => false,
                    'striped' => false,
                    'hover' => true,
                    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
                    'toolbar' =>  [
                        ['content'=> ' '  ],
                    ],
                    'filterModel' => $searchModel,
                    'containerOptions' => ['style' => 'overflow: auto', 'class' => 'aa'], // only set when $responsive = false
                    'responsive' => true,
                    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
                    'pjax' => true, // pjax is set to always true for this demo
                    'persistResize' => false,
                    'toggleDataOptions' => ['minCount' => 10],
                    'itemLabelSingle' => 'tin tức',
                    'itemLabelPlural' => 'Danh sách tin tức'
                ]); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->