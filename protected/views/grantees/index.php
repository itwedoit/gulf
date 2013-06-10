<?php
/* @var $this GranteesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grantees',
);

$this->menu=array(
	array('label'=>'Create Grantees', 'url'=>array('create')),
	array('label'=>'Manage Grantees', 'url'=>array('admin')),
);
?>

<h1>Grantees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
