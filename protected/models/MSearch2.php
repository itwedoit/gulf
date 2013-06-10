<?php

/**
 * This is the model class for table "Projectnew".
 *
 * The followings are the available columns in table 'Projectnew':
 * @property integer $id
 * @property string $Grant
 * @property string $Consortia
 * @property string $Task
 * @property string $ProjectTitle
 * @property string $SubAwards
 * @property string $LastName
 * @property string $FirstName
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Keyword
 * @property string $Publication
 * @property string $InstitutionID
    * @property string $State
 * @property string $DataSet
 * @property string $Award
 */
class MSearch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MSearch the static model class
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
		return 'Projectnew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Grant, Consortia, Task, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Keyword, Publication, State, DataSet, Theme, Type, Award', 'length', 'max'=>4000),
			array('InstitutionID', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Grant, Consortia, Task, ProjectTitle, SubAwards, LastName, FirstName, StartDate, EndDate, Keyword, Publication, InstitutionID, State, DataSet, Theme,Type, Award', 'safe', 'on'=>'search'),
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
			'Grant' => 'Grant',
			'Consortia' => 'Project',
			'Task' => 'Task',
			'ProjectTitle' => 'Project Title',
			'SubAwards' => 'Sub Awards',
			'LastName' => 'Last Name',
			'FirstName' => 'First Name',
			'StartDate' => 'Start Date',
       'Theme' => 'Theme',
        'EndDate' => 'End Date',
			'Keyword' => 'Abstract',
			'Publication' => 'Publication',
			'InstitutionID' => 'Institution',
			'DataSet' => 'Data Set',
			'Award' => 'Award',
       'State' => 'State',
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
		$criteria->compare('Grant',$this->Grant,true);
		$criteria->compare('Consortia',$this->Consortia,true);
		$criteria->compare('Task',$this->Task,true);
		$criteria->compare('ProjectTitle',$this->ProjectTitle,true);
		$criteria->compare('SubAwards',$this->SubAwards,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('StartDate',$this->StartDate,true);
		$criteria->compare('EndDate',$this->EndDate,true);
		$criteria->compare('Keyword',$this->Keyword,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('InstitutionID',$this->InstitutionID,true);
		$criteria->compare('DataSet',$this->DataSet,true);
		$criteria->compare('Award',$this->Award,true);
    $criteria->compare('State',$this->State,true);
     $criteria->compare('Theme',$this->Theme,true);
    
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
 //     $customColumn = customColumn;
    public function customColumn()
{
    return $this->ProjectTitle.'<br/>'.$this->Grant;
}
  
    public static function getTotal($provider) {
        $total = 0;
        $search = MSearch::model()->findAll($provider);
        foreach ($search as $value) {
            $total += $value->Award;
        }
        return $total;
    }

}  