<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Objects;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
interface ObjectConstraint
{
    /**
     * @TODOC
     *
     * @param       Mixed                                   $object                         `Mixed`
     * @TODOC
     *
     * @return      Bool                                                                    `Bool`
     * @TODOC
     */
    function isFulfilledBy($object): Bool;
}
