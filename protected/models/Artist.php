<?php

/**
 * This is the model class for table "tbl_artist".
 *
 * The followings are the available columns in table 'tbl_artist':
 * @property integer $ArtistId
 * @property string $Name
 * @property string $bio
 * @property string $ArtistArtUrl
 */
class Artist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Artist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_artist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'length', 'max'=>120),
			array('ArtistArtUrl', 'length', 'max'=>1000),
			array('bio', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ArtistId, Name, bio, ArtistArtUrl', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ArtistId' => 'Artist',
			'Name' => 'Name',
			'bio' => 'Bio',
			'ArtistArtUrl' => 'Artist Art Url',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ArtistId',$this->ArtistId);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('ArtistArtUrl',$this->ArtistArtUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}