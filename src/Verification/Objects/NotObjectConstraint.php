<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Objects;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class NotObjectConstraint implements ObjectConstraint
{
    /**
     * @TODOC
     *
     * @var         ObjectConstraint                                                        `ObjectConstraint`
     */
    private $constraint;

    /**
     * @param       ObjectConstraint                        $constraint                     `ObjectConstraint`
     * @TODOC
     */
    function __construct(ObjectConstraint $constraint){
        $this->constraint = $constraint;
    }

    /** @inheritDoc */
    function isFulfilledBy($object): Bool{
        return !$this->constraint->isFulfilledBy($object);
    }
}
