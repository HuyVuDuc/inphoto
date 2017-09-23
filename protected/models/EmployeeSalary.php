<?php

/**
 * This is the model class for table "employee_salary".
 *
 * The followings are the available columns in table 'employee_salary':
 * @property integer $id
 * @property integer $employee_id
 * @property string $basicsalary
 * @property string $bonussale
 * @property string $bonus
 * @property integer $month
 * @property integer $day
 * @property integer $year
 * @property integer $work_days
 * @property integer $status
 * @property integer $create_time
 */
class EmployeeSalary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_salary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, basicsalary, bonussale, bonus, work_days, status, create_time', 'required'),
			array('employee_id, month, day, year, work_days, status, create_time', 'numerical', 'integerOnly'=>true),
			array('basicsalary, bonussale, bonus', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, basicsalary, bonussale, bonus, month, day, year, work_days, status, create_time', 'safe', 'on'=>'search'),
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
			'employee_id' => 'Employee',
			'basicsalary' => 'Basicsalary',
			'bonussale' => 'Bonussale',
			'bonus' => 'Bonus',
			'month' => 'Month',
			'day' => 'Day',
			'year' => 'Year',
			'work_days' => 'Work Days',
			'status' => 'Status',
			'create_time' => 'Create Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('basicsalary',$this->basicsalary,true);
		$criteria->compare('bonussale',$this->bonussale,true);
		$criteria->compare('bonus',$this->bonus,true);
		$criteria->compare('month',$this->month);
		$criteria->compare('day',$this->day);
		$criteria->compare('year',$this->year);
		$criteria->compare('work_days',$this->work_days);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeSalary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
