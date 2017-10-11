<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Interactions;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Exception;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class CannotFulfill extends Exception
{
    /**
     * @TODOC
     *
     * @var         InteractionConstraint                                                   `InteractionConstraint`
     */
    public $what;

    /**
     * @param       InteractionConstraint                   $what                           `InteractionConstraint`
     * @TODOC
     */
    function __construct(InteractionConstraint $what){
        parent::__construct("Cannot fulfill the specified expectation", 0, NULL);
        $this->what = $what;
    }
}
