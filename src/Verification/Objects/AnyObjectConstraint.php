<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Objects;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class AnyObjectConstraint implements ObjectConstraint
{
    /** @inheritDoc */
    function isFulfilledBy($object): Bool{
        return TRUE;
    }
}
