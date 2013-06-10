<?php
/* @var $this InstitutionNewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Institution News',
);

$this->menu=array(
	array('label'=>'Create InstitutionNew', 'url'=>array('create')),
	array('label'=>'Manage InstitutionNew', 'url'=>array('admin')),
);
?>

<h1>Institution News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
