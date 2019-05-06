<?php
namespace PoP\HooksWP\ContractImplementations;

class HooksAPI implements \PoP\Hooks\Contracts\HooksAPIInterface
{
    public function addFilter(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void
    {
        add_filter($tag, $function_to_add, $priority, $accepted_args);
    }
    public function removeFilter(string $tag, $function_to_remove, int $priority = 10): bool
    {
        remove_filter($tag, $function_to_remove, $priority);
    }
    public function applyFilters(string $tag, $value, ...$args)
    {
        return apply_filters($tag, $value, ...$args);
    }
    public function addAction(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void
    {
        add_action($tag, $function_to_add, $priority, $accepted_args);
    }
    public function removeAction(string $tag, $function_to_remove, int $priority = 10): bool
    {
        remove_action($tag, $function_to_remove, $priority);
    }
    public function doAction(string $tag, ...$args): void
    {
        do_action($tag, ...$args);
    }
}
