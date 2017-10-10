<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Objects;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class NotSameObjectConstraint implements ObjectConstraint
{
    /**
     * @TODOC
     *
     * @var         Mixed                                                                   `Mixed`
     */
    private $reference;

    /**
     * @param       Mixed                                   $reference                      `Mixed`
     * @TODOC
     */
    function __construct($reference){
        $this->reference = $reference;
    }

    /** @inheritDoc */
    function isFulfilledBy($object): Bool{
        return $this->reference !== $object;
    }
}
