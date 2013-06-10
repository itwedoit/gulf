<?php

/**
 * This is the model class for table "Publication".
 *
 * The followings are the available columns in table 'Publication':
 * @property integer $ID
 * @property string $Project
 * @property string $Author
 * @property string $authorsStudents
 * @property string $Title
 * @property string $Publication
 * @property double $Year
 * @property double $Volume
 * @property double $Issue
 * @property string $Pages
 * @property string $ISBN
 * @property string $DOI
 * @property string $PublicationType
 * @property string $PublicationStatus
 * @property string $Theme
 * @property string $Keywords
 * @property string $Link
 * @property string $LinkGoMRI
 */
class Pub extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pub the static model class
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
		return 'Publication';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('Year, Volume, Issue', 'numerical'),
			array('Project, Author, authorsStudents, Title, Publication, Pages, ISBN, DOI, PublicationType, PublicationStatus, Theme, Keywords, Link, LinkGoMRI', 'length', 'max'=>2555),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Project, Author, authorsStudents, Title, Publication, Year, Volume, Issue, Pages, ISBN, DOI, PublicationType, PublicationStatus, Theme, Keywords, Link, LinkGoMRI', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'Project' => 'Project',
			'Author' => 'Author',
			'authorsStudents' => 'Authors Students',
			'Title' => 'Title',
			'Publication' => 'Publication',
			'Year' => 'Year',
			'Volume' => 'Volume',
			'Issue' => 'Issue',
			'Pages' => 'Pages',
			'ISBN' => 'Isbn',
			'DOI' => 'Doi',
			'PublicationType' => 'Publication Type',
			'PublicationStatus' => 'Publication Status',
			'Theme' => 'Theme',
			'Keywords' => 'Keywords',
			'Link' => 'Link',
			'LinkGoMRI' => 'Link Go Mri',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Project',$this->Project,true);
		$criteria->compare('Author',$this->Author,true);
		$criteria->compare('authorsStudents',$this->authorsStudents,true);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('Year',$this->Year);
		$criteria->compare('Volume',$this->Volume);
		$criteria->compare('Issue',$this->Issue);
		$criteria->compare('Pages',$this->Pages,true);
		$criteria->compare('ISBN',$this->ISBN,true);
		$criteria->compare('DOI',$this->DOI,true);
		$criteria->compare('PublicationType',$this->PublicationType,true);
		$criteria->compare('PublicationStatus',$this->PublicationStatus,true);
		$criteria->compare('Theme',$this->Theme,true);
		$criteria->compare('Keywords',$this->Keywords,true);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('LinkGoMRI',$this->LinkGoMRI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}