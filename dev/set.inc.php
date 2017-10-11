<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\Units\SetInteractionConstraint;
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
 * @param           ObjectConstraint                        $assigneeConstraint             `ObjectConstraint`
 * @TODOC
 *
 * @param           ObjectConstraint                        $throwConstraint                `ObjectConstraint`
 * @TODOC
 *
 * @param           Bool                                    $eatPreviousInteractions        `Bool`
 * @TODOC
 *
 * @return          SetInteractionConstraint                                                `SetInteractionConstraint`
 * @TODOC
 */
function set(
    $object,
    String $member,
    ObjectConstraint $assigneeConstraint,
    ObjectConstraint $throwConstraint,
    Bool $eatPreviousInteractions
): SetInteractionConstraint{
    return new SetInteractionConstraint(
        $object,
        $member,
        $assigneeConstraint,
        $throwConstraint,
        $eatPreviousInteractions
    );
}
