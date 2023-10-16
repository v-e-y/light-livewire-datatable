<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

trait WithSearching
{
    /** @var boolean turn off/onn search */
    public bool $searching = false;

    /** @var string Search string */
    public string $search = '';

    /** @var string  String placeholder */
    public string $searchPlaceholder = 'Search string';

    /** @var int  Search debounce in milliseconds */
    public int $searchDebounce = 500;
    
    /**
     * Clear the search input and update the search results.
     * @return void
     */
    public function dropSearch()
    {
        $this->search = '';
        $this->resetPage();
    }
}