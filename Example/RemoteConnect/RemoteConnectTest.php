<?php

require_once('RemoteConnect.php');

class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }

    public function testConnectionIsValid()
    {
        // проверка валидности соединения с сервером
        $connObj = new RemoteConnect();
        $serverName = 'www.webtransfercard.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}