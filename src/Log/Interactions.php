<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Log;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class Interactions
{
    /**
     * @TODOC
     *
     * @var         Interaction[]                                                           `Array<Int, Interaction>`
     */
    public $interactions;

    /**
     */
    function __construct(){
        $this->interactions = [];
    }
}
