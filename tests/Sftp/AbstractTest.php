<?php
namespace antilam\FtpClient\Tests;

use \antilam\FtpClient\Servers\SftpServer;

/**
 * Abstract class for test
 *
 * @package FtpClient
 * @subpackage Tests
 * @author antilam <antilam@gmail.com>
 */

abstract class AbstractTest extends \PHPUnit_Framework_TestCase {
    
    protected static $session;


    public static function setUpBeforeClass()
    {
        $server = new SftpServer(getenv('FTP_HOST'));
        $server->login(getenv('FTP_USER'), getenv('FTP_PASS'));
        self::$session = $server;
    }
    
    /**
     * @return Connection
     */
    protected static function getSession()
    {
        return self::$session;
    }
    
}
