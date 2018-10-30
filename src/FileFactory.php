<?php

/*
 * The sofware is provided under Mit License.
 * For the full copyright and license information, please view the LICENSE file
 */

namespace antilam\FtpClient;

use antilam\FtpClient\Interfaces\ServerInterface;
use antilam\FtpClient\Interfaces\FactoryInterface;
use antilam\FtpClient\Servers\FtpServer;
use antilam\FtpClient\Servers\SftpServer;
use antilam\FtpClient\Files\FtpFile;
use antilam\FtpClient\Files\SftpFile;

/**
 * Factory for File classes
 *
 * @author antilam <antilam@gmail.com>
 * @package FtpClient
 */
class FileFactory implements FactoryInterface
{
    
    /**
     * Build method for File classes
     */
    public static function build(ServerInterface $server)
    {
        if ($server instanceof SftpServer) {
            return new SftpFile($server);
        } elseif ($server instanceof FtpServer || $server instanceof SslServer) {
            return new FtpFile($server);
        } else {
            throw new \InvalidArgumentException('The argument is must instance of server class');
        }
    }
    
}
