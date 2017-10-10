<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Log;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 *
 * @implements      Interaction
 */
class GetInteraction implements Interaction
{
    /**
     * The object holding the retrieved property.
     *
     * @var         Mixed                                                                   `Mixed`
     */
    public $object;

    /**
     * The retrieved class-member's name.
     *
     * @var         String                                                                  `String`
     */
    public $member;

    /**
     * The result of the operation, either the content of the property or a `throw`.
     *
     * @var         Mixed                                                                   `Mixed`
     */
    public $result;

    /**
     * `TRUE` if {@see self::$result} was `throw`n, `FALSE` if `return`ed.
     *
     * @var         Bool                                                                    `Bool`
     */
    public $resultWasThrown;

    /**
     * @param       Mixed                                   $object                         `Mixed`
     * The object holding the retrieved property.
     *
     * @param       String                                  $member                         `String`
     * The retrieved class-member's name.
     *
     * @param       Mixed                                   $result                         `Mixed`
     * The result of the operation, either the content of the property or a `throw`.
     *
     * @param       Bool                                    $resultWasThrown                `Bool`
     * `TRUE` if `$result` was `throw`n, `FALSE` if `return`ed.
     */
    function __construct($object, String $member, $result, Bool $resultWasThrown){
        $this->object = $object;
        $this->member = $member;
        $this->result = $result;
        $this->resultWasThrown = $resultWasThrown;
    }
}
