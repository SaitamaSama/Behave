<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Interactions\Composites\NotInteractionConstraint;
use Netmosfera\Behave\Verification\Interactions\InteractionConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           InteractionConstraint                   $constraint                     `InteractionConstraint`
 * @TODOC
 *
 * @return          NotInteractionConstraint                                                `NotInteractionConstraint`
 * @TODOC
 */
function not(InteractionConstraint $constraint): NotInteractionConstraint{
    return new NotInteractionConstraint($constraint);
}
