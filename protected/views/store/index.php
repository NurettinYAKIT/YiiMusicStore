<?php
$this->breadcrumbs=array(
	'Store',
);
?>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" />
<h1><em><?php echo CHtml::encode(Yii::app()->name); ?></em></h1>

<!-- Genre menu -->
<?php if( isset($_GET["gid"]) ){
	foreach ($Genres as $Genre){
		echo '<h1>' . $Genre->Name . "</h1><br />";
		$desc = $Genre->Description;
	}
	?>

<div id="gmenu"><?php echo $desc; ?></div>

<!-- Show the albums in genre-->
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
//		echo CHtml::link('<img src="/phpmusicstore'. $Album->AlbumArtUrl . '" /><br />', array('store/details/', 'albid' => $Album->AlbumId, 'aid'=>$aid));
		echo CHtml::link('<img width="80" heigth="80" src="' . Yii::app()->request->baseUrl . $Album->AlbumArtUrl . '" /><br />', array('store/details/', 'albid' => $Album->AlbumId, 'aid'=>$aid));
		//Show The Price
		echo $Album->Title . "<br />" . $Album->Price . "</center></td>";
	}
	//Display pagination
//	$this->widget('CLinkPager',array('pages'=> $pages));
	
	?>
	</tr>
</table>

<!--Render the Album Detail View-->
<?php }
	elseif(isset($_GET["albid"])&&isset($_GET["aid"]) ){
		foreach($Artists as $Artist){
			$aname = $Artist->Name;
			$abio = $Artist->bio;
		}
		foreach ($Albums as $Album){
			$title = $Album-> Title;
			$tracks = $Album->tracks;
			$price = $Album->Price;
			$albid = $Album->AlbumId;
			$aid = $Album->ArtistId;
			$lnotes = $Album->LinerNotes;
			$AlbumArtUrl = $Album->AlbumArtUrl;
			$AlbumThumbUrl = $Album->AlbumThumbUrl;
		} 
//		foreach($Albums as $Album){
//			echo '<img src="'. Yii::app()->request->baseurl . $Album->AlbumThumbUrl .'"/><br/>';
//			echo $Album->Title . "<br/>";
//			echo $Album->Price . "<br/>";
//			echo CHtml::link('Add Cart',array('store/cart/','album'=> $Album->AlbumId))."<br/>";
//			
//		}
?>

<!--	wrap the artist name in a link-->
<!--<h1><?php echo $aname; ?></h1>-->

<h1><?php echo CHtml::link($aname, array('/Store/ArtistDetails/','artistid'=>$aid)); ?></h1>

<table>
  <tr>
    <td valign="top">
	<!-- wrap the thubmnail link   -->
	<?php echo '<img src="'.Yii::app()->request->baseUrl.$AlbumArtUrl.'" /></br>'?>
    </td>
    <td></td>
    <td valign="top"><?php echo "<h4>TRACKS</h4>". $tracks;?></td>
  </tr>
  
  <tr>
    <td valign="top">
    <?php echo $title. "</br>"; 
    	  echo $price. "</br>";
    	  echo CHtml::link('Add to Cart',array('/Cart/create/', 'albid'=>$albid, 'aid'=>$aid ) ). "</br>";
    ?>
    </td>
  </tr>
</table>

	<?php echo '<h3>Liner Notes</h3>' . $lnotes; ?>
		<?php
	} 	
	elseif($_GET['artistid']){
		foreach($Artists as $Artist){
			$aname = $Artist->Name;
			$abio = $Artist->bio;
			$artistArtUrl = $Artist->ArtistArtUrl;
		} ?>
<h1><?php echo $aname; ?></h1>
<?php echo '<img style="float:left; margin: 0 5px 5px 0;" src="' . Yii::app()->request->baseUrl . $artistArtUrl . '"  /><br /></td>'; ?>
<?php echo "<h4>Bio</h4>" . $abio; ?>	

<?php } else {
     echo "<h1>" . $this->id . '/' . $this->action->id . "</h1>";
     echo "<h3>" . $content . "</h3>";
}
?>
