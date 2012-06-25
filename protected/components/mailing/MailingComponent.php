<?php
class MailingComponent extends CApplicationComponent
{
    /**
     * @var Prefix for phpList tables
     */
    public $phpListPrefix;

    /**
     * @var bool do we need to validate emails before execute methods
     */
    public $validateEmails = true;

    public function addSubscriber($id, $email, $confirmed=false, $password='')
    {
        $db = Yii::app()->db;
        $exists = $db->createCommand()->select('id')->from($this->phpListPrefix.'user_user')->where('email=:email',array(':email'=>$email))->queryRow();
        if ($exists)
        {
            $db->createCommand()->update(
                $this->phpListPrefix.'user_user',
                array(
                    'confirmed'=>$confirmed?1:0,
                    'password'=>$password,
                    'foreignkey'=>$id,
                    'yiiuserid'=>$id
                ),
                'id=:id',
                array(':id'=>$exists['id'])
            );
            return $exists['id'];
        }

        $count = $db->createCommand()->insert(
            $this->phpListPrefix.'user_user',
            array(
                'email'=>$email,
                'confirmed'=>$confirmed?1:0,
                'entered'=>new CDbExpression('NOW()'),
                'modified'=>new CDbExpression('NOW()'),
                'password'=>$password,
                'passwordchanged'=>new CDbExpression('NOW()'),
                'disabled'=>0,
                'uniqid'=>md5(uniqid(mt_rand())),
                'htmlemail'=>1,
                'foreignkey'=>$id,
                'yiiuserid'=>$id
            )
        );
        if ($count>0)
            $exists = $db->createCommand()->select('id')->from($this->phpListPrefix.'user_user')->where('yiiuserid=:id',array(':id'=>$id))->queryRow();
        else
            return false;
        return $exists['id'];
    }

    public function deleteSubscriber($idOrEmail)
    {
        if (is_int($idOrEmail))
        {
            return $this->deleteSubscriberById($idOrEmail);
        }
        else
        {
            if ($this->validateEmails)
            {
                $validator = new CEmailValidator();
                if (!$validator->validateValue($idOrEmail))
                {
                    throw new CHttpException(500, 'Incorrect email: '.$idOrEmail);
                }
            }
            return $this->deleteSubscriberByEmail($idOrEmail);
        }
    }

    protected function deleteSubscriberById($id)
    {
        $db = Yii::app()->db;
        $db->createCommand()->delete($this->phpListPrefix.'user_user_attribute', 'id=:id', array(':id'=>$id));
        $db->createCommand()->delete($this->phpListPrefix.'user_usermessage', 'id=:id', array(':id'=>$id));
        $db->createCommand()->delete($this->phpListPrefix.'user_message_bounce', 'id=:id', array(':id'=>$id));
        $db->createCommand()->delete($this->phpListPrefix.'user_user', 'id=:id', array(':id'=>$id));
        $db->createCommand()->delete($this->phpListPrefix.'user_history', 'id=:id', array(':id'=>$id));
    }

    protected function deleteSubscriberByEmail($email)
    {
        $db = Yii::app()->db;
        $db->createCommand()->delete($this->phpListPrefix.'user_user_attribute', 'email=:email', array(':email'=>$email));
        $db->createCommand()->delete($this->phpListPrefix.'user_usermessage', 'email=:email', array(':email'=>$email));
        $db->createCommand()->delete($this->phpListPrefix.'user_message_bounce', 'email=:email', array(':email'=>$email));
        $db->createCommand()->delete($this->phpListPrefix.'user_user', 'email=:email', array(':email'=>$email));
        $db->createCommand()->delete($this->phpListPrefix.'user_history', 'email=:email', array(':email'=>$email));
    }
}
