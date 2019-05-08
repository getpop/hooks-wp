<?php
declare(strict_types=1);
namespace PoP\HooksWP;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Hooks\ContractImplementations\HooksAPI;

class HooksAPITestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testApplyFilters(): void
    {
        $hooksapi = \PoP\Hooks\Facades\HooksAPI::getInstance();
        $this->assertEquals(
            'bar',
            $hooksapi->applyFilters('foo', 'bar')
        );
    }
}
