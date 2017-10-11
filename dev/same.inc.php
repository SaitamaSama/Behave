<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Verification\Objects\SameObjectConstraint;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @param           Mixed                                   $reference                      `Mixed`
 * @TODOC
 *
 * @return          SameObjectConstraint                                                    `SameObjectConstraint`
 * @TODOC
 */
function same($reference){
    return new SameObjectConstraint($reference);
}
