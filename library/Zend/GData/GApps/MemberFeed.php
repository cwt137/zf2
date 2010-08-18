<?php

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage GApps
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id:$
 */

/**
 * @namespace
 */
namespace Zend\GData\GApps;

/**
 * Data model for a collection of Google Apps member entries, usually
 * provided by the Google Apps servers.
 *
 * For information on requesting this feed from a server, see the Google
 * Apps service class, Zend_Gdata_Gapps.
 *
 * @uses       \Zend\GData\Feed
 * @uses       \Zend\GData\GApps\MemberEntry
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage GApps
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class MemberFeed extends \Zend\Gdata\Feed
{

    protected $_entryClassName = '\Zend\Gdata\Gapps\MemberEntry';
    protected $_feedClassName = '\Zend\Gdata\Gapps\MemberFeed';

}
