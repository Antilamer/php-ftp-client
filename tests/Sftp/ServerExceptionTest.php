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
        @$server = new \antilam\FtpClient\Servers\SftpServer('xx.xx.com');
    }
    
}
