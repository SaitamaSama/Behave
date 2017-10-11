<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\Composites\EveryInteractionConstraint;
use Netmosfera\Behave\Verification\Objects\ObjectConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           ObjectConstraint[]                      $constraints                    `Array<Int, ObjectConstraint>`
 * @TODOC
 *
 * @param           Bool                                    $eatPreviousInteractions        `Bool`
 * @TODOC
 *
 * @return          EveryInteractionConstraint                                              `EveryInteractionConstraint`
 * @TODOC
 */
function every(
    Array $constraints,
    Bool $eatPreviousInteractions
): EveryInteractionConstraint{
    return new EveryInteractionConstraint($constraints, $eatPreviousInteractions);
}
