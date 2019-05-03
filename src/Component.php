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
    public static function init()
    {
        self::$active = true;
        \PoP\Hooks\Contracts\HooksAPIFactory::setInstance(new ContractImplementations\HooksAPI());
    }
}

Component::init();
