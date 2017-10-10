<?php declare(strict_types = 1); // atom

namespace Netmosfera\BehaveTests\Verification\Interactions;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Netmosfera\Behave\Log\GetInteraction;
use Netmosfera\Behave\Verification\Interactions\GetInteractionConstraint;
use PHPUnit\Framework\TestCase;

class GetInteractionConstraintTest extends TestCase
{
    function test_fulfill_only(){
        $interactions[] = new GetInteraction("object", "member", "return", true);

        $constraint = new GetInteractionConstraint(
            "object",
            "member",
            "return"
        );

    }
}
