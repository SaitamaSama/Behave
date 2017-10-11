<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Closure;
use Netmosfera\Behave\Verification\Objects\ObjectConstraint;
use Netmosfera\Behave\Verification\Interactions\Units\CallInteractionConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           Closure                                 $closure                        `Closure`
 * @TODOC
 *
 * @param           ObjectConstraint[]                      $argumentsConstraints           `Array<Int, ObjectConstraint>`
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
 * @return          CallInteractionConstraint                                               `CallInteractionConstraint`
 * @TODOC
 */
function call(
    Closure $closure,
    Array $argumentsConstraints,
    ObjectConstraint $resultConstraint,
    Bool $resultIsThrown,
    Bool $eatPreviousInteractions
): CallInteractionConstraint{
    return new CallInteractionConstraint(
        $closure,
        $argumentsConstraints,
        $resultConstraint,
        $resultIsThrown,
        $eatPreviousInteractions
    );
}
