<?php

/**
 * This is the model class for table "Quotes".
 *
 * The followings are the available columns in table 'Quotes':
 * @property double $id
 * @property string $Project
 * @property string $Author
 * @property string $TitleHeadline
 * @property string $Publication
 * @property string $IssueEdition
 * @property string $Link
 * @property string $Notes
 * @property string $Copy
 * @property string $projectID
 * @property string $personID
 */
class Quotes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Quotes the static model class
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
		return 'Quotes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical'),
			array('Project, Author, TitleHeadline, Publication, IssueEdition, Link, Copy, projectID, personID', 'length', 'max'=>255),
			array('Notes', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Project, Author, TitleHeadline, Publication, IssueEdition, Link, Notes, Copy, projectID, personID', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Project' => 'Project',
			'Author' => 'Author',
			'TitleHeadline' => 'Title Headline',
			'Publication' => 'Publication',
			'IssueEdition' => 'Issue Edition',
			'Link' => 'Link',
			'Notes' => 'Notes',
			'Copy' => 'Copy',
			'projectID' => 'Project',
			'personID' => 'Person',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Project',$this->Project,true);
		$criteria->compare('Author',$this->Author,true);
		$criteria->compare('TitleHeadline',$this->TitleHeadline,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('IssueEdition',$this->IssueEdition,true);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('Notes',$this->Notes,true);
		$criteria->compare('Copy',$this->Copy,true);
		$criteria->compare('projectID',$this->projectID,true);
		$criteria->compare('personID',$this->personID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}