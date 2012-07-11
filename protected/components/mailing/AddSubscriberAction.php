<?php
/**
 * Date: 25.06.12
 * Time: 10:33
 */
class AddSubscriberAction extends CAction
{
    public $yiiUserModel = 'Users';
    public $yiiUsedIdColumn = 'id';
    public $yiiUserEmailColumn = 'email';

    public $method = 'post';
    public $paramName = 'ids';
    public $mailingComponent = 'mailing';

    public $autoConfirm = true;

    public function run()
    {
        $ids = false;
        if ($this->method == 'post')
            $ids = isset($_POST[$this->paramName]) ? $_POST[$this->paramName] : false;
        else if ($this->method == 'get')
            $ids = isset($_GET[$this->paramName]) ? $_GET[$this->paramName] : false;
        if (is_numeric($ids))
            $ids = array($ids);
        if (!is_array($ids))
            return;
        if ($ids)
        {
            $counter = 0;
            foreach ($ids as $id)
            {
                $model = new $this->yiiUserModel;
                $user = $model::model()->findByAttributes(array($this->yiiUsedIdColumn=>$id));
                if ($user)
                {
                    $result = Yii::app()->{$this->mailingComponent}->addSubscriber($id, $user->{$this->yiiUserEmailColumn}, $this->autoConfirm);
                    if ($result!==false)
                        $counter++;
                }
            }
            echo 'Added '.$counter.' subscribers';
        }
    }
}
