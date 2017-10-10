<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Verification\Interactions;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Objects\ObjectConstraint;
use Netmosfera\Behave\Log\GetInteraction;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class GetInteractionConstraint implements InteractionConstraint
{
    /**
     * @TODOC
     *
     * @var         Mixed                                                                   `Mixed`
     */
    private $object;

    /**
     * @TODOC
     *
     * @var         String                                                                  `String`
     */
    private $member;

    /**
     * @TODOC
     *
     * @var         ObjectConstraint                                                        `ObjectConstraint`
     */
    private $return;

    /**
     * @TODOC
     *
     * @var         Bool                                                                    `Bool`
     */
    private $eatPreviousInteractions;

    /**
     * @param       Mixed                                   $object                         `Mixed`
     * @TODOC
     *
     * @param       String                                  $memberName                     `String`
     * @TODOC
     *
     * @param       ObjectConstraint                        $return                         `ObjectConstraint`
     * @TODOC
     *
     * @param       Bool                                    $eatPreviousInteractions        `Bool`
     * @TODOC
     */
    function __construct(
        $object,
        String $memberName,
        ObjectConstraint $return,
        Bool $eatPreviousInteractions = FALSE
    ){
        $this->object = $object;
        $this->member = $memberName;
        $this->return = $return;
        $this->eatPreviousInteractions = $eatPreviousInteractions;
    }

    /** @inheritDoc */
    function fulfill(Array $interactions): Result{
        foreach($interactions as $index => $interaction){
            if(
                $interaction instanceof GetInteraction &&
                $this->object === $interaction->object &&
                $this->member === $interaction->member &&
                $this->return->isFulfilledBy($interaction->result)
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
}
