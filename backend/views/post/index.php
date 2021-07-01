<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(['id' => 'prl-pjax'])?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post',
            ['create'],
            ['class' => 'btn btn-success', 'id' => 'create-button']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'created_at',
            'updated_at',
            //'type',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model){
                        return Html::a(
                            '<span class="glyphicon glyphicon-edit"></span>',
                            $url, ['class'  => 'update-pline']);
                    },
                ],
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>

</div>

<?php
Modal::begin([
'header' => '<h2>Sarlavha</h2>',
'id' => 'myModal',
'size' => 'modal-lg',
]);

echo "<div id='modalContent'>Mazmuni</div>";

Modal::end();
