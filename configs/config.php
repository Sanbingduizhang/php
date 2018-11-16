<?php

class config
{
    /**
     * db 相关配置
     * @return array
     */
    public function dbconfig()
    {
        return array(
            'host' => '127.0.0.1',
            'dbname' => 'test',
            'dbuser' => 'root',
            'dbpwd' => 'root',
            'port' => '3306',
        );
    }
}
