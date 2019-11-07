<?php
$this->breadcrumbs=array(
	'Merek'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tag',
	'title'=>'Merek',
	'subtitle'=>'Data Merek',
);

$this->menu=array(
	array('label'=>'List Merek', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Merek', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Merek', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc, 'modelImage'=>$modelImage)); ?>
