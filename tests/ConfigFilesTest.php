<?php

use PHPUnit\Framework\TestCase;

class ConfigFilesTest extends TestCase {
    
    public function testRequireApp()
    {
        $this->assertTrue(
            file_exists('./config/app.php')
        );
    }

    public function testRequireDbConfig()
    {
        $this->assertTrue(
            file_exists('./config/db_config.php')
        );
    }
}