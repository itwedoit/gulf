<?php
/* @var $this ExternalSearchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'External Searches',
);

$this->menu=array(
	array('label'=>'Create ExternalSearch', 'url'=>array('create')),
	array('label'=>'Manage ExternalSearch', 'url'=>array('admin')),
);
?>

<h1>External Searches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
