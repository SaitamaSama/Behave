<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Interactions;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Log\Interaction;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class Result
{
    /**
     * The remaining interactions.
     *
     * @var         Interaction[]                                                           `Array<Int, Interaction>`
     * @TODOC
     */
    public $interactions;

    /**
     * How many interactions appear after the last fulfilled interaction.
     *
     * @var         Int                                                                     `Int`
     */
    public $continueIndex;

    function __construct(Array $interactions, Int $continueIndex){
        $this->interactions = $interactions;
        $this->continueIndex = $continueIndex;
    }
}
