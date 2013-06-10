<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'people'=>array('index'),
	$model->personID,
);

$this->menu=array(
/*	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	 	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personID),'confirm'=>'Are you sure you want to delete this item?')),
       */
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model->personID)),
  array('label'=>'People Search', 'url'=>array('admin')),
);
?>

<h1>View Person #<?php echo $model->personID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	/*	'personID',
		'intstituionAbbr',
		'institutionID',    */
		'Institution',
		'projectID',
		'firstName',
		'lastName',
		'Role',
		'eMailAddress',
		'secondaryRole',
		'email',
		'degreePursuing',
		'ThesisResearchTopic',
		'Department',
		'Supervisor',
		'ExpectedCompletionYear',
		'CompletionsQuarter',
		'SummerInternship',
	),
)); ?>
