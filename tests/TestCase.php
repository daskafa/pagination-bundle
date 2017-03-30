<?php
/**
 * Pkvs package
 *
 * @package Pkvs
 * @author  Peter Gribanov <pgribanov@1tv.com>
 */

namespace GpsLab\Bundle\PaginationBundle\Tests;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $class_name
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockNoConstructor($class_name)
    {
        return $this
            ->getMockBuilder($class_name)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->getMock()
        ;
    }

    /**
     * @param string $class_name
     * @param array $methods
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockAbstract($class_name, array $methods)
    {
        return $this
            ->getMockBuilder($class_name)
            ->disableOriginalConstructor()
            ->setMethods($methods)
            ->getMockForAbstractClass()
        ;
    }
}