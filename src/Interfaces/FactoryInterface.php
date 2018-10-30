<?php

/*
 * The sofware is provided under Mit License.
 * For the full copyright and license information, please view the LICENSE file
 */

namespace antilam\FtpClient\Interfaces;

/**
 * Interface for Factory Classes
 * 
 * @author antilam <antilam@gmail.com>
 * @package FtpClient
 * @subpackage Interfaces
 */
interface FactoryInterface
{
    
    /**
     * Create and return instance class
     */
    public static function build(ServerInterface $server);
    
}
