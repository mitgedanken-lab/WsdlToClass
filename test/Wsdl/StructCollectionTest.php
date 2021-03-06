<?php
/**
 * WsdlToClass
 *
 * PHP Version 7.1
 *
 * @copyright 2015-2018 Danny van der Sluijs <danny.vandersluijs@icloud.com>
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU-GPL
 * @link      http://dannyvandersluijs.nl
 */

declare(strict_types=1);

namespace WsdlToClassTest\Wsdl;

use PHPUnit\Framework\TestCase;
use WsdlToClass\Wsdl\Struct;
use WsdlToClass\Wsdl\StructCollection;

/**
 * Unit test for the struct collection class
 */
class StructCollectionTest extends TestCase
{
    /**
     * Test the constructor
     * @covers \WsdlToClass\Wsdl\StructCollection::__construct()
     */
    public function testConstructor()
    {
        $collection = new StructCollection(new Struct('One'), new Struct('Two'));
        $this->assertCount(2, $collection);
        $this->assertContainsOnly(Struct::class, $collection->toArray());

        return $collection;
    }

    /**
     * Test the add function
     * @depends testConstructor
     * @covers \WsdlToClass\Wsdl\StructCollection::add()
     * @param StructCollection $collection
     */
    public function testAdd(StructCollection $collection)
    {
        $count = count($collection);
        $collection->add(new Struct('Three'));

        $this->assertCount($count + 1, $collection);
    }
}
