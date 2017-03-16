<?php
/**
 * CArrayTest.php
 */

namespace Cognitive\CArray\Test;

use PHPUnit\Framework\TestCase;
use Cognitive\CArray\CArray;

/**
 * Class CArrayTest
 * @package Cognitive\Util\Test
 */
class CArrayTest extends TestCase
{
    /**
     * Data provider for \Cognitive\Util\Test\ArraysTest::testIsAssociative.
     *
     * @return array
     */
    public function providerTestIsAssociative()
    {
        return [
            [
                'data' => [
                    'a' => 'a', 'm' => 'b', 'x' => 'c', 1 => 'hello', 5 => 'z', '7' => 'y', 'hello' => 'x'
                ],
                'result' => true,
            ],
            [
                'data' => [
                    5 => 'z', 1 => 'hello', '7' => 'y', 'a' => 'a', 'hello' => 'x', 'x' => 'c', 'm' => 'b'
                ],
                'result' => true,
            ],
            [
                'data' => [
                    0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 4 => 'e',
                ],
                'result' => false,
            ],
            [
                'data' => [
                    "1" => 'a', "0" => 'b', "2" => 'c'
                ],
                'result' => true,
            ],
            [
                'data' => [
                    "0" => 'a', "1" => 'b', "2" => 'c'
                ],
                'result' => false,
            ],
            [
                'data' => [
                    'a', 'b', 'c'
                ],
                'result' => false,
            ],
            [
                'data' => [],
                'result' => false
            ],
        ];
    }

    /**
     * Array is associative.
     * @param array $data   Data set.
     * @param bool  $result Return result after check.
     *
     * @return void
     *
     * @dataProvider providerTestIsAssociative
     */
    public function testIsAssociative(array $data, $result)
    {
        $arr = new CArray();

        if ($result === false) {
            $message = 'Array type must be not associative';
            $this->assertFalse(
                $arr->isAssociative($data),
                $message
            );
        } else {
            $message = 'Array type must be associative';
            $this->assertTrue(
                $arr->isAssociative($data),
                $message
            );
        }
    }
}
