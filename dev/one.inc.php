<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\Composites\OneInteractionConstraint;
use Netmosfera\Behave\Verification\Interactions\InteractionConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           InteractionConstraint[]                 $constraints                    `Array<Int, InteractionConstraint>`
 * @TODOC
 *
 * @param           Bool                                    $eatPreviousInteractions        `Bool`
 * @TODOC
 *
 * @return          OneInteractionConstraint                                                `OneInteractionConstraint`
 * @TODOC
 */
function one(Array $constraints, Bool $eatPreviousInteractions): OneInteractionConstraint{
    return new OneInteractionConstraint($constraints, $eatPreviousInteractions);
}
