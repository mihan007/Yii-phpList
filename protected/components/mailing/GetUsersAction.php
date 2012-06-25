<?php
/**
 * User: Kuklin Mikhail (kuklin@voyanga.com)
 * Company: Easytrip LLC
 * Date: 25.06.12
 * Time: 10:33
 */
class GetUsersAction extends CAction
{
    public $yiiUserModel = 'Users';
    public $yiiUserIdColumn = 'id';
    public $yiiUserEmailColumn = 'email';
    public $yiiUserSortColumn = 'email';
    public $yiiUserNameColumn = 'username';
    public $paramName = 'subscriberIds'; //имя параметра для сабмита

    public $phpListPrefix = 'phplist_';

    public $formMethod = 'post';
    public $formAction = '/site/addSubscriber';

    public function run()
    {
        $db = Yii::app()->db;
        $subscribedIds = $db->createCommand()->select('yiiuserid')->from($this->phpListPrefix.'user_user')->queryColumn();
        $criteria = new CDbCriteria();
        $criteria->addNotInCondition($this->yiiUserIdColumn, $subscribedIds);
        $criteria->addCondition(new CDbExpression('LENGTH('.$this->yiiUserEmailColumn.')>0'));
        $criteria->order = $this->yiiUserSortColumn;
        $model = new $this->yiiUserModel;
        $unsubscribedUsers = $model::model()->findAll($criteria);

        echo CHtml::form($this->formAction, $this->formMethod);
        echo 'Add a subscriber:';
        echo CHtml::dropDownList($this->paramName, '', CHtml::listData($unsubscribedUsers, $this->yiiUserIdColumn, $this->yiiUserNameColumn));
        echo CHtml::submitButton('add', array('id'=>'yii-add-subscriber-button'));
        echo CHtml::button('reload list', array('id'=>'yii-reload-subscriber-button'));
        echo CHtml::endForm();
    }
}
