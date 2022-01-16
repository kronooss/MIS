<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmplEducationalHistoryInfo */

$this->title = $model->edu_history_id;
$this->params['breadcrumbs'][] = ['label' => 'Empl Educational History Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empl-educational-history-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->edu_history_id], ['class' => 'btn green-btn']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->edu_history_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'edu_history_id',
            'fk_branch_id',
            'degree_name',
            'degree_type_id',
            'Institute_name',
            'institute_type_id',
            'grade',
            'total_marks',
            'start_date',
            'end_date',
            'emp_id',
            'marks_obtained',
        ],
    ]) ?>

</div>
