<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id
 * @property string $ordercode
 * @property integer $customer_id
 * @property integer $employee_id
 * @property integer $timeall
 * @property integer $timedesign
 * @property integer $timeproduce
 * @property integer $timeworking
 * @property integer $timeship
 * @property integer $progress
 * @property integer $status
 * @property integer $priority_level
 * @property integer $job
 * @property integer $created_time
 * @property integer $employee_discount
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ordercode, customer_id, employee_id, progress, status, created_time', 'required'),
			array('customer_id, employee_id, timeall, timedesign, timeproduce, timeworking, timeship, progress, status, priority_level, job, created_time, employee_discount', 'numerical', 'integerOnly'=>true),
			array('ordercode', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ordercode, customer_id, employee_id, timeall, timedesign, timeproduce, timeworking, timeship, progress, status, priority_level, job, created_time, employee_discount', 'safe', 'on'=>'search'),
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
			'ordercode' => 'Ordercode',
			'customer_id' => 'Customer',
			'employee_id' => 'Employee',
			'timeall' => 'Timeall',
			'timedesign' => 'Timedesign',
			'timeproduce' => 'Timeproduce',
			'timeworking' => 'Timeworking',
			'timeship' => 'Timeship',
			'progress' => 'Progress',
			'status' => 'Status',
			'priority_level' => 'Priority Level',
			'job' => 'Job',
			'created_time' => 'Created Time',
			'employee_discount' => 'Employee Discount',
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
		$criteria->compare('ordercode',$this->ordercode,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('timeall',$this->timeall);
		$criteria->compare('timedesign',$this->timedesign);
		$criteria->compare('timeproduce',$this->timeproduce);
		$criteria->compare('timeworking',$this->timeworking);
		$criteria->compare('timeship',$this->timeship);
		$criteria->compare('progress',$this->progress);
		$criteria->compare('status',$this->status);
		$criteria->compare('priority_level',$this->priority_level);
		$criteria->compare('job',$this->job);
		$criteria->compare('created_time',$this->created_time);
		$criteria->compare('employee_discount',$this->employee_discount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
