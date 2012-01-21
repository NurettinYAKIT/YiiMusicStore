<?php
$this->breadcrumbs=array(
	'Artists'=>array('index'),
	$model->Name=>array('view','id'=>$model->ArtistId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artist', 'url'=>array('index')),
	array('label'=>'Create Artist', 'url'=>array('create')),
	array('label'=>'View Artist', 'url'=>array('view', 'id'=>$model->ArtistId)),
	array('label'=>'Manage Artist', 'url'=>array('admin')),
);
?>

<h1>Update Artist <?php echo $model->ArtistId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>