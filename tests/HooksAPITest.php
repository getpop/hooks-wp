<?php
declare(strict_types=1);
namespace PoP\HooksWP;

use PoP\Hooks\Facades\HooksAPI;

class HooksAPITestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testApplyFilters(): void
    {
        $hooksapi = HooksAPI::getInstance();
        $this->assertEquals(
            'bar',
            $hooksapi->applyFilters('foo', 'bar')
        );
    }
}
