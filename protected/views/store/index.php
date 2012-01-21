<?php
$this->breadcrumbs=array(
	'Store',
);
?>
<h1><em><?php echo CHtml::encode(Yii::app()->name); ?></em></h1>

<?php if( isset($_GET["gid"]) ){
	foreach ($Genres as $Genre){
		echo '<h1>' . $Genre->Name . "</h1><br />";
		$desc = $Genre->Description;
	}
	?>

<div id="gmenu"><?php echo $desc; ?></div>

<table>
	<tr>
	<?php
	$cntRow = 0;
	foreach ($Albums as $Album)
	{
		$aid = $Album->ArtistId;
		$cntRow++;
		if($cntRow % 2) echo "</tr><tr>";
		foreach ($Artists as $Artist){
			if($Artist->ArtistId === $aid){
				$aname = $Artist->Name . "<br />";
			}
		}
		//wrap the artist name in a link
		echo "<td><center><strong>" . CHtml::link($aname, array('/Store/ArtistDetails/', 'artistid'=>$aid)) . "</strong>";
		//wrap the image in a link
		echo CHtml::link('<img width="80" heigth="80" src="' . Yii::app()->request->baseUrl . $Album->AlbumArtUrl . '" /><br />', array('store/details/', 'albid' => $Album->AlbumId, 'aid'=>$aid));
		//Show The Price
		echo $Album->Title . "<br />" . $Album->Price . "</center></td>";
	}
	?>
	</tr>
</table>

<?php }
	elseif(isset($_GET["albid"]) ){
		foreach($Albums as $Album){
			echo '<img src="'. Yii::app()->request->baseurl . $Album->AlbumThumbUrl .'"/><br/>';
			echo $Album->Title . "<br/>";
			echo $Album->Price . "<br/>";
			echo CHtml::link('Add Cart',array('store/cart/','album'=> $Album->AlbumId))."<br/>";
			
		}
	}
	else {
?>

<h1><?php echo  $this->id . '/' . $this->action->id ;?> </h1>
<h3><?php echo "No index set. Himm... there must be a problem.. Check controllers.. And indexes.." ?></h3>

<?php } ?>
