<?php

/**
 * This is the model class for table "SearchM".
 *
 * The followings are the available columns in table 'SearchM':
 * @property integer $ID
 * @property string $Institution
 * @property string $AmountPerInstitution
 * @property string $ProjectTitle
 * @property string $InstitutionID
 * @property string $State
 * @property string $Type
 * @property integer $FundRec
 * @property string $Theme
 * @property string $startDate
 * @property string $endDate
 * @property string $Publication
 * @property string $DataSet
 * @property string $PrincipalInvestigator
 * @property string $consortia
 * @property string $projectID
 * @property string $personID
 */
class SearchPage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SearchPage the static model class
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
		return 'SearchM';
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
			array('ID, FundRec', 'numerical', 'integerOnly'=>true),
			array('Institution, ProjectTitle, InstitutionID, State, Type, Theme, startDate, Publication, DataSet, PrincipalInvestigator, consortia, projectID, personID', 'length', 'max'=>255),
			array('AmountPerInstitution', 'length', 'max'=>19),
			array('endDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Institution, AmountPerInstitution, ProjectTitle, InstitutionID, State, Type, FundRec, Theme, startDate, endDate, Publication, DataSet, PrincipalInvestigator, consortia, projectID, personID', 'safe', 'on'=>'search'),
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
    public $total;  
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
      'total' => 'total',
			'Institution' => 'Institution',
			'AmountPerInstitution' => 'Amount',
			'ProjectTitle' => 'Keyword',
			'InstitutionID' => 'Researcher',
			'State' => 'State',
			'Type' => 'Type',
			'FundRec' => 'Fund Rec',
			'Theme' => 'Theme',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'Publication' => 'Publication',
			'DataSet' => 'Data Set',
			'PrincipalInvestigator' => 'Principal Investigator',
			'consortia' => 'Project',
			'projectID' => 'Project',
			'personID' => 'Principal Investigator',
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
		$criteria->compare('Institution',$this->Institution,true);
		$criteria->compare('AmountPerInstitution',$this->AmountPerInstitution,true);   
		$criteria->compare('ProjectTitle',$this->ProjectTitle,true);
		$criteria->compare('InstitutionID',$this->InstitutionID,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('FundRec',$this->FundRec);
		$criteria->compare('Theme',$this->Theme,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('Publication',$this->Publication,true);
		$criteria->compare('DataSet',$this->DataSet,true);
		$criteria->compare('PrincipalInvestigator',$this->PrincipalInvestigator,true);
		$criteria->compare('consortia',$this->consortia,true);
		$criteria->compare('projectID',$this->projectID,true);
		$criteria->compare('personID',$this->personID,true);
    $amountCriteria = clone($criteria);
    $amountCriteria->select = 'SUM(AmountPerInstitution) AS total';
    $this->total = SearchPage::model()->find($amountCriteria)->total;   
    
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}