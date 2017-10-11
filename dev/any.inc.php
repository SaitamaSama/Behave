<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Objects\AnyObjectConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @return          AnyObjectConstraint                                                     `AnyObjectConstraint`
 * @TODOC
 */
function any(){
    return new AnyObjectConstraint();
}
