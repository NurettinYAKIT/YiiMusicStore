<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'AlbumId'); ?>
		<?php echo $form->textField($model,'AlbumId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GenreId'); ?>
		<?php echo $form->textField($model,'GenreId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArtistId'); ?>
		<?php echo $form->textField($model,'ArtistId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>160)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Price'); ?>
		<?php echo $form->textField($model,'Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AlbumThumbUrl'); ?>
		<?php echo $form->textField($model,'AlbumThumbUrl',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AlbumArtUrl'); ?>
		<?php echo $form->textField($model,'AlbumArtUrl',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tracks'); ?>
		<?php echo $form->textArea($model,'tracks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LinerNotes'); ?>
		<?php echo $form->textArea($model,'LinerNotes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->