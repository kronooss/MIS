<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeSalarySelection */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employee Salary Selections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-salary-selection-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn green-btn']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'fk_emp_id',
            'fk_group_id',
            'fk_pay_stages',
            'fk_allownces_id',
            'basic_salary',
        ],
    ]) ?>

</div>
