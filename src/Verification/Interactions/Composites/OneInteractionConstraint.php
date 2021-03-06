<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Interactions\Composites;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\InteractionConstraint;
use Netmosfera\Behave\Verification\Interactions\CannotFulfill;
use Netmosfera\Behave\Verification\Interactions\Result;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class OneInteractionConstraint implements InteractionConstraint
{
    /**
     * @TODOC
     *
     * @var         InteractionConstraint[]                                                 `Array<@TODO>`
     */
    private $constraints;

    /**
     * @TODOC
     *
     * @var         Bool                                                                    `Bool`
     */
    private $eatPreviousInteractions;

    /**
     * @param       InteractionConstraint[]                 $constraints                    `Array<@TODO>`
     * @TODOC
     *
     * @param       Bool                                    $eatPreviousInteractions        `Bool`
     * @TODOC
     */
    function __construct(array $constraints, Bool $eatPreviousInteractions){
        $this->constraints = $constraints;
        $this->eatPreviousInteractions = $eatPreviousInteractions;
    }

    /** @inheritDoc */
    function fulfill(Array $interactions): Result{
        foreach($this->constraints as $expectation){
            try{
                $result = $expectation->fulfill($interactions);
                if($this->eatPreviousInteractions){
                    if($result->continueIndex === 0){
                        $interactions = [];
                    }else{
                        $interactions = array_slice($result->interactions, $result->continueIndex);
                    }
                    return new Result($interactions, $result->continueIndex);
                }else{
                    return $result;
                }
            }catch(CannotFulfill $e){}
        }
        throw new CannotFulfill($this);
    }
}
