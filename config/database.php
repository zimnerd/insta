  <?php

    class DATABASE_CONFIG {

        public $default = array (
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => '192.168.8.15',
            'login' => 'root',
            'password' => 'edw1n',
            'database' => 'instadate',
            'prefix' => ''
        );

        public $test = array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
             'host' => '192.168.8.15',
            'login' => 'root',
            'password' => 'edw1n',
            'database' => 'instadate',
            'prefix' => '',
            //'encoding' => 'utf8',
        );
    }
?>
