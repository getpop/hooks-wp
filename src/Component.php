<?php
namespace PoP\HooksWP;

/**
 * Class required to check if this component exists and is active
 */
class Component
{
    /**
     * Indicate if the component is active
     *
     * @var boolean
     */
    public static $active;
    /**
     * Initialize services
     */
    public function __construct()
    {
        self::$active = true;
        new ContractImplementations\HooksAPI();
    }
}

new Component();
