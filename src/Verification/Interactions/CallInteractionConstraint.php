<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Interactions;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Closure;
use Netmosfera\Behave\Log\CallInteraction;
use Netmosfera\Behave\Verification\Objects\ObjectConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class CallInteractionConstraint implements InteractionConstraint
{
    /**
     * @TODOC
     *
     * @var         Mixed                                                                   `Mixed`
     */
    private $closure;

    /**
     * @TODOC
     *
     * @var         ObjectConstraint[]                                                      `Array<@TODO>`
     */
    private $argumentsConstraints;

    /**
     * @TODOC
     *
     * @var         ObjectConstraint                                                        `ObjectConstraint`
     */
    private $returnConstraint;

    /**
     * @TODOC
     *
     * @var         Bool                                                                    `Bool`
     */
    private $eatPreviousInteractions;

    /**
     * @param       Closure                                 $closure                        `Closure`
     * @TODOC
     *
     * @param       ObjectConstraint[]                      $argumentsConstraints           `Array<@TODO>`
     * @TODOC
     *
     * @param       ObjectConstraint                        $returnConstraint               `ObjectConstraint`
     * @TODOC
     *
     * @param       Bool                                    $eatPreviousInteractions        `Bool`
     * @TODOC
     */
    function __construct(
        Closure $closure,
        Array $argumentsConstraints,
        ObjectConstraint $returnConstraint,
        Bool $eatPreviousInteractions = FALSE
    ){
        $this->closure = $closure;
        $this->argumentsConstraints = $argumentsConstraints;
        $this->returnConstraint = $returnConstraint;
        $this->eatPreviousInteractions = $eatPreviousInteractions;
    }

    /** @inheritDoc */
    function fulfill(Array $interactions): Result{
        foreach($interactions as $index => $interaction){
            if(
                $interaction instanceof CallInteraction &&
                $this->closure === $interaction->closure &&
                $this->fulfillArguments($interaction->arguments) &&
                $interaction->resultWasThrown === FALSE &&
                $this->returnConstraint->isFulfilledBy($interaction->result)
            ){
                $continueIndex = (count($interactions) - $index) * -1 + 1;

                if($this->eatPreviousInteractions){
                    array_splice($interactions, 0, $index + 1, []);
                }else{
                    array_splice($interactions, $index, 1, []);
                }

                return new Result($interactions, $continueIndex);
            }
        }
        throw new CannotFulfill($this);
    }

    private function fulfillArguments(Array $arguments){
        if(count($this->argumentsConstraints) !== count($arguments)){
            return FALSE;
        }
        foreach($this->argumentsConstraints as $index => $constraint){
            if($constraint->isFulfilledBy($arguments[$index]) === FALSE){
                return FALSE;
            }
        }
        return TRUE;
    }
}
