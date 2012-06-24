<?php
class MailingCommand extends CConsoleCommand
{
    public $cronUserName = 'cron';
    public $cronUserPassword = 'sjdfh12e12nr23r5@#$!@fd';
    public $phpListPath = null;

    public function run($args)
    {
        if (!isset($args[0]))
        {
            $this->runMailing();
        }
        else
        {
            if ($args[0]=='installDev')
            {
                $this->installDev();
            }
            if (($args[0]=='install') and (isset($args[1])))
            {
                $this->install($args[1]);
            }
        }
    }

    public function runMailing()
    {
        if ($this->phpListPath==null)
            throw new CException('phpListPath is incorrect. Please enter correct path to phpList installation e.g. http://site.name/lists/ inside console.php config');
        $this->phpListPath = rtrim($this->phpListPath, '/');
        $url = $this->phpListPath.'/admin/index.php?page=processqueue&login='.$this->cronUserName.'&password='.$this->cronUserPassword;
        file_get_contents($url);
    }

    public function install($prefix)
    {
        /*
         * @var CDbConnection
         */
        $db = Yii::app()->db;
        $tableName = $prefix.'user_user';
        $db->createCommand()->addColumn($tableName, 'yiiuserid', 'integer');
        $db->createCommand()->insert($prefix.'admin', array(
            'loginname' => $this->cronUserName,
            'namelc' => $this->cronUserName,
            'email' => '',
            'created' => new CDbExpression('NOW()'),
            'password' => $this->cronUserPassword,
            'superuser' => 1
        ));
        echo 'Installation successfull';
    }

    public function installDev()
    {
        $db = Yii::app()->db;
        $sql = "
              CREATE TABLE IF NOT EXISTS `users` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `username` varchar(20) NOT NULL,
              `password` varchar(128) NOT NULL,
              `first_name` varchar(255) NOT NULL,
              `last_name` varchar(255) NOT NULL,
              `company_name` varchar(255) NOT NULL,
              `active` enum('Y','N') NOT NULL DEFAULT 'Y',
              `activationKey` varchar(128) NOT NULL DEFAULT '',
              `createtime` int(10) NOT NULL DEFAULT '0',
              `lastvisit` int(10) NOT NULL DEFAULT '0',
              `lastaction` int(10) NOT NULL DEFAULT '0',
              `lastpasswordchange` int(10) NOT NULL DEFAULT '0',
              `superuser` int(1) NOT NULL DEFAULT '0',
              `status` int(1) NOT NULL DEFAULT '0',
              `avatar` varchar(255) DEFAULT NULL,
              `notifyType` enum('None','Digest','Instant','Threshold') DEFAULT 'Instant',
              `id_towns_user` int(10) DEFAULT NULL,
              `role` enum('administrator','organisation','locale_administrator','user','guest') DEFAULT 'user',
              `email` varchar(255) DEFAULT NULL,
              PRIMARY KEY (`id`),
              UNIQUE KEY `username` (`username`),
              KEY `status` (`status`),
              KEY `superuser` (`superuser`),
              KEY `id_towns_user` (`id_towns_user`)
            ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;
            ";
        $db->createCommand($sql)->execute();

        $sql2 = "
            INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `company_name`, `active`, `activationKey`, `createtime`, `lastvisit`, `lastaction`, `lastpasswordchange`, `superuser`, `status`, `avatar`, `notifyType`, `id_towns_user`, `role`, `email`) VALUES
            (2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '', '', '', 'Y', '', 1338767708, 0, 0, 0, 0, 1, NULL, 'Instant', 2, 'user', 'demo@cterror.ru'),
            (16, 'test-user', '4297f44b13955235245b2497399d7a93', '', '', '', 'Y', '', 1339202609, 0, 0, 1339202609, 0, 0, NULL, 'Instant', 2, 'administrator', 'test-user@maililm.co'),
            (17, 'testadmin', '4c1cb48a03545d4005f5e0e350e4609d', '', '', '', 'Y', '', 1339205262, 0, 0, 1339205262, 0, 0, NULL, 'Instant', 2, 'user', 'test-admin@gov.cc'),
            (18, 'vasya', '4c1cb48a03545d4005f5e0e350e4609d', 'aaaaaaaa', 'bbbbbbbbbbb', 'ccccccccccc', 'Y', '', 1339268287, 0, 0, 1339268287, 0, 0, 'c3f4fd0ecf6a52fa7d417b49ca173b28', 'Instant', 1, 'organisation', 'vasya@cterror.ru'),
            (19, 'test-user-test', '4c1cb48a03545d4005f5e0e350e4609d', '', '', '', 'Y', '', 1339535383, 0, 0, 1339535383, 0, 0, '5379e7bd7d7f3d95f11a133ef1d70c2e', 'Instant', 1, 'user', 'kopyta@mail.ru'),
            (20, 'testindahouse', '4297f44b13955235245b2497399d7a93', 'Vasya', 'Pupkin', 'Рога и копыта', 'Y', '', 1339536151, 0, 0, 1339536151, 0, 0, NULL, 'Instant', 1, 'user', 'aaa@bbb.cc'),
            (23, 'test123', '4c1cb48a03545d4005f5e0e350e4609d', '', '', '', 'Y', '', 0, 1339710449, 0, 0, 0, 0, NULL, 'Instant', 2, 'locale_administrator', ''),
            (22, 'testindahouse23', '4c1cb48a03545d4005f5e0e350e4609d', 'Vasya', 'Pupkin', 'Рога и копыта', 'Y', '', 1339536248, 0, 0, 1339536248, 0, 0, NULL, 'Instant', 1, 'user', 'aaa@bbb.cc'),
            (1, 'admin', '4c1cb48a03545d4005f5e0e350e4609d', '', '', '', 'Y', '', 0, 1339973265, 0, 0, 0, 0, NULL, 'Instant', 1, 'administrator', ''),
            (24, 'asdfasdf', '912ec803b2ce49e4a541068d495ab570', '', '', '', 'Y', '', 0, 0, 0, 0, 0, 0, NULL, 'Instant', NULL, 'user', NULL);
        ";
        $db->createCommand($sql2)->execute();
    }
}
