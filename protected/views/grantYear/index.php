<?php
/* @var $this GrantYearController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grant Years',
);

$this->menu=array(
	array('label'=>'Create GrantYear', 'url'=>array('create')),
	array('label'=>'Manage GrantYear', 'url'=>array('admin')),
);
?>

<h1>Grant Years</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
