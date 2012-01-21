<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtistId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ArtistId), array('view', 'id'=>$data->ArtistId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bio')); ?>:</b>
	<?php echo CHtml::encode($data->bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtistArtUrl')); ?>:</b>
	<?php echo CHtml::encode($data->ArtistArtUrl); ?>
	<br />


</div>