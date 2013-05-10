<?php
/**
 * Zeal ORM
 *
 * @link      http://github.com/tfountain
 * @copyright Copyright (c) 2010-2013 Tim Fountain (http://tfountain.co.uk/)
 * @license   http://tfountain.co.uk/license New BSD License
 */

namespace ZealOrm;

use ZealOrm\Mapper\Registry;

class Orm
{
    protected static $mapperRegistry;

    public static function getMapper($objectOrClassName)
    {
        if (!self::$mapperRegistry) {
            self::$mapperRegistry = new Registry();
        }

        return self::$mapperRegistry->getMapper($objectOrClassName);
    }
}