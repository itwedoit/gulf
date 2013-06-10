<?php
/* @var $this OutreachController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outreaches',
);

$this->menu=array(
	array('label'=>'Create Outreach', 'url'=>array('create')),
	array('label'=>'Manage Outreach', 'url'=>array('admin')),
);
?>

<h1>Outreaches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
