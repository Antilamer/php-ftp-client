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
use antilam\FtpClient\Directories\FtpDirectory;
use antilam\FtpClient\Directories\SftpDirectory;

/**
 * Factory for Directory classes
 *
 * @author antilam
 */
class DirectoryFactory implements FactoryInterface
{
    
    /**
     * Build method for Directory classes
     */
    public static function build(ServerInterface $server)
    {
        if ($server instanceof SftpServer) {
            return new SftpDirectory($server);
        } elseif ($server instanceof FtpServer || $server instanceof SslServer) {
            return new FtpDirectory($server);
        } else {
            throw new \InvalidArgumentException('The argument is must instance of server class');
        }
    }
    
}
