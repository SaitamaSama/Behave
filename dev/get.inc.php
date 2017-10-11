<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\Units\GetInteractionConstraint;
use Netmosfera\Behave\Verification\Objects\ObjectConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           Mixed                                   $object                         `Mixed`
 * @TODOC
 *
 * @param           String                                  $member                         `String`
 * @TODOC
 *
 * @param           ObjectConstraint                        $resultConstraint               `ObjectConstraint`
 * @TODOC
 *
 * @param           Bool                                    $resultIsThrown                 `Bool`
 * @TODOC
 *
 * @param           Bool                                    $eatPreviousInteractions        `Bool`
 * @TODOC
 *
 * @return          GetInteractionConstraint                                                `GetInteractionConstraint`
 * @TODOC
 */
function get(
    $object,
    String $member,
    ObjectConstraint $resultConstraint,
    Bool $resultIsThrown,
    Bool $eatPreviousInteractions
): GetInteractionConstraint{
    return new GetInteractionConstraint(
        $object,
        $member,
        $resultConstraint,
        $resultIsThrown,
        $eatPreviousInteractions
    );
}
