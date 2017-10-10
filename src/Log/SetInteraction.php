<?php declare(strict_types = 1); // atom

namespace Netmosfera\Behave\Log;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

use Throwable;

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

/**
 * @TODOC
 */
class SetInteraction implements Interaction
{
    /**
     * The object holding the assigned property.
     *
     * @var         Mixed                                                                   `Mixed`
     */
    public $object;

    /**
     * The assigned class-member's name.
     *
     * @var         String                                                                  `String`
     */
    public $member;

    /**
     * The assigned object.
     *
     * @var         Mixed                                                                   `Mixed`
     */
    public $content;

    /**
     * The object thrown in response to the assignment, or `NULL` if none.
     *
     * @var         Throwable|NULL                                                          `Throwable|NULL`
     */
    public $throw;

    /**
     * @param       Mixed                                   $object                         `Mixed`
     * The object holding the assigned property.
     *
     * @param       String                                  $member                         `String`
     * The assigned class-member's name.
     *
     * @param       Mixed                                   $content                        `Mixed`
     * The assignee.
     *
     * @param       Throwable|NULL                          $throw                          `Throwable|NULL`
     * The object thrown in response to the assignment, or `NULL` if none.
     */
    function __construct($object, String $member, $content, ?Throwable $throw){
        $this->object = $object;
        $this->member = $member;
        $this->content = $content;
        $this->throw = $throw;
    }
}
