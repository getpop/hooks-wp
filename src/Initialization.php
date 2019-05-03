<?php
namespace PoP\HooksWP;

class Initialization
{
    /**
     * Initialize services
     */
    public function __construct()
    {
        new ContractImplementations\HooksAPI();
    }
}

new Initialization();
