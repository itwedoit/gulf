<?php
/* @var $this LevFunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lev Funs',
);

$this->menu=array(
	array('label'=>'Create LevFun', 'url'=>array('create')),
	array('label'=>'Manage LevFun', 'url'=>array('admin')),
);
?>

<h1>Lev Funs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
