<?php
namespace antilam\FtpClient\Tests;

/**
 * Test of Server Exceptions
 *
 * @package FtpClient
 * @subpackage Tests
 * @author antilam <antilam@gmail.com>
 */
class ServerExceptionTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @expectedException \antilam\FtpClient\Exceptions\ConnectionFailedException
     */
    public function testConnectException() {
        @$server = new \antilam\FtpClient\Servers\FtpServer('xx.xx.com');
    }
    
    /**
     * @expectedException \antilam\FtpClient\Exceptions\AuthenticationFailedException
     */
    public function testAuthException() {
        $server = new \antilam\FtpClient\Servers\FtpServer('ftp.linux.org.tr');
        @$server->login('xxx','yyy');
    }
    
}
