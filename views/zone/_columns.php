<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    /*[
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],*/
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
   
     [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'title',
         'vAlign'=>'middle',
        'format'=>'raw',
        'value'=>function($model, $key, $index){
            return Html::a($model->title,['/route','id'=>$key],['title'=>'Add '.$model->title.' Route(s)']);
        }
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'template'=>'{update} {delete} {createRoute} ',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
       /* 'buttons'=>[
        'createRoute'=>function($url, $model, $key){
                return Html::a('<span class="glyphicon glyphicon-plus toltip" data-placement="bottom" width="20"  title="Add '.$model->title.'Route"></span>', ['/route','id'=>$key]);
            },
        ],*/
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   