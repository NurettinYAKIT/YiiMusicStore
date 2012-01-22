<?php

class StoreController extends Controller
{
	public $message;
	
	public function actionIndex()
	{
		$this->message = "Hello from store.index";
		$this->render('index', array('content' => $this->message));
	}
	
	public function actionBrowse()
	{
		if($_GET["gid"]){
			$genreCriteria = new CDbCriteria();
			$genreCriteria->select = "GenreId, Name, Description";
			$genreCriteria->condition = "genreId = " . $_GET["gid"];
			
			$artistCriteria = new CDbCriteria();
			$artistCriteria->alias = "t1";
			$artistCriteria->select = "DISTINCT `t1`.`Name`, `t1`.`ArtistId`";
			$artistCriteria->join = "LEFT JOIN `tbl_album` ON `tbl_album`.`ArtistId` = `t1`.`ArtistId`";
			$artistCriteria->condition = "`tbl_album`.`GenreId` = " . $_GET["gid"];
			$artistCriteria->order = "`t1`.`ArtistId` ASC";
			
			$albumCriteria = new CDbCriteria();
			$albumCriteria->alias = "t2";
			$albumCriteria->select = "*";
			$albumCriteria->condition = "`GenreId` = " . $_GET["gid"];
			$albumCriteria->order = "`ArtistId` ASC";
			
			$this->render('index', array('Albums' => Album::model()->findAll($albumCriteria),
			                             'Artists'=> Artist::model()->findAll($artistCriteria),
			                             'Genres' => Genre::model()->findAll($genreCriteria)));
		}else{
			$this->message = 'Select a Genre from the Home page or an Artist on the left to see the Albums in our Store.';
			$this->render('index', array('content'=>$this->message));
		}	
	}
	
	public function actionDetails()
	{
		if($_GET["albid"]&&$_GET["aid"]){

			$albumCriteria = new CDbCriteria();
			$albumCriteria->select = "*";
			$albumCriteria->condition = "AlbumId = " . $_GET["albid"];
			
			$artistCriteria = new CDbCriteria();
			$artistCriteria->select = "*";
			$artistCriteria->condition = "`ArtistId` = " . $_GET["aid"];
			
			$this->render('index', array('Albums' => Album::model()->findAll($albumCriteria),'Artists' => Artist::model()->findAll($artistCriteria) ) );
		}
		else{
			$this->message = "Please select an album to view it's details";
			$this->render('index', array('content'=>$this->message,));
		}
	}
	
	public  function actionArtistDetails() {
		
		if($_GET["artistid"])
		{
			$artistCriteria = new CDbCriteria();
			$artistCriteria->select = "*";
			$artistCriteria->condition = "`ArtistId` = " . $_GET["artistid"];
			
			$this->render('index', array('Artists' => Artist::model()->findAll($artistCriteria)
			));
		}
		else{
			$this->message = "Please select an Artist to view their details";
			$this->render('index', array('content'=>$this->message,));
		}
		
	}
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}