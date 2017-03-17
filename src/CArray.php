<?php
/**
 * CArray.php
 */

namespace Cognitive\CArray;

/**
 * Class СArray
 * @package Cognitive\СArray
 */
class CArray
{
    /**
     * Checking whether the array is zero-indexed and sequential.
     * @param array $arr Input array.
     *
     * @return bool
     */
    public function isAssociative(array $arr)
    {
        if (array() === $arr) {
            return false;
        }

        $result = array_keys($arr) !== range(0, count($arr) - 1);

        return $result;
    }
}
