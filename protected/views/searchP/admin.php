<?php
/* @var $this SearchPController */
/* @var $model SearchP */

$this->breadcrumbs = array(
    'Search Page' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Search Page', 'url' => array('index')),
    array('label' => 'Create Search Page', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('search-p-grid1', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Search Page</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>

<div class="search-form" >
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->


<?php
$this->widget('ext.GroupGridView', array(
    'id' => 'search-p-grid1',
    'dataProvider' => $model->search(),
    'mergeColumns' => array('ProjectTitle', 'State',),
    'columns' => array(
        array(
            'header' => 'Project Title',
            'value' => '$data->ProjectTitle . ",". $data->consortia . ",". $data->DataSet',
            'type' => 'raw',
        ),
       'consortia',
//      'projectID',
//        'ProjectTitle',
        'State',
        'PrincipalInvestigator',
        'Institution',
        'AmountPerInstitution',
        'startDate',
        'endDate',
        'Publication',
//        array('class' => 'CLinkColumn'),
      array('class' => 'CButtonColumn'), 
    ),
    'summaryText' => '<div style="text-align:left;"><b>Total Amount Per Institution:</b> ' . ($model->search()->itemCount === 0 ? 0 : '$' . number_format($model->getTotal($model->search()->criteria), 2)) . '</div> <b>Displaying:</b> {start} to {end} from {count}',
));
?>
