<?php
/* @var $this PubController */
/* @var $model Pub */

$this->breadcrumbs=array(
	'Pubs'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Pub', 'url'=>array('index')),
	array('label'=>'Create Pub', 'url'=>array('create')),
	array('label'=>'Update Pub', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Pub', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pub', 'url'=>array('admin')),
);
?>

<h1>View Pub #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Project',
		'Author',
		'authorsStudents',
		'Title',
		'Publication',
		'Year',
		'Volume',
		'Issue',
		'Pages',
		'ISBN',
		'DOI',
		'PublicationType',
		'PublicationStatus',
		'Theme',
		'Keywords',
		'Link',
		'LinkGoMRI',
	),
)); ?>
