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
    public $yiiUserNameColumn = 'username';

    public $phpListPrefix = 'phplist_';

    public $formMethod = 'post';
    public $formAction = '/site/addSubscriber';

    public function run()
    {
        $db = Yii::app()->db;
        $subscribedIds = $db->createCommand()->select('yiiuserid')->from($this->phpListPrefix.'user_user')->queryColumn();
        $criteria = new CDbCriteria();
        $criteria->addNotInCondition($this->yiiUsedIdColumn, $subscribedIds);
        $unsubscribedUsers = {$this->yiiUserModel}::model()->find($criteria);

        echo CHtml::form($this->formAction, $this->formMethod);
        echo CHtml::dropDownList('subscribeIds', '', CHtml::listData($unsubscribedUsers, $this->yiiUserIdColumn, $this->yiiUserNameColumn));
        echo CHtml::endForm();
    }
}
