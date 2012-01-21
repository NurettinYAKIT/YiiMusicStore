<?php
$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->Title=>array('view','id'=>$model->AlbumId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'View Album', 'url'=>array('view', 'id'=>$model->AlbumId)),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>Update Album <?php echo $model->AlbumId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>