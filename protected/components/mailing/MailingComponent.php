<?php
class MailingComponent extends CApplicationComponent
{
    /**
     * @var bool do we need to validate emails before execute methods
     */
    public $validateEmails = true;

    public function addSubscriber($id, $email)
    {

    }

    public function deleteSubscriber($idOrEmail)
    {
        if (is_int($idOrEmail))
        {
            $this->deleteSubscriberById($idOrEmail);
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
            $this->deleteSubscriberByEmail($idOrEmail);
        }
    }

    protected function deleteSubscriberById($id)
    {

    }

    protected function deleteSubscriberByEmail($email)
    {

    }
}
