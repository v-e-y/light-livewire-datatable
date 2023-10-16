<article id="light_livewire_datatable_{{ Str::slug($tableName, '_') }}">
    <section 
        class="row g-2 align-items-center @if($tableName) justify-content-between @else justify-content-end @endif"
    >
        @isset($tableName)
            <div class="col-12 col-4">
                <h1 class="h2 mb-0">
                    {{ $tableName }}
                </h1>
            </div>
        @endisset
        <div class="col-12 col-8">
            <div class="row g-1 align-items-center">
                @if ($this->columns->hasFilters() && count($filters))
                    <div class="col-auto">
                        <button 
                            class="btn btn-sm btn-outline btn-outline-warning btn-outline-dashed" 
                            wire:click="dropFilters"
                        >
                            Drop Filters
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                @endif
                @if (count($this->childTitleLWComponents))
                    @include('partials.livewire-components.title', ['childTitleLWComponents' => $this->childTitleLWComponents])
                @endif
                @if (count($this->childTitleHTMLComponents))
                    @include('partials.html-components.title', ['childTitleHTMLComponents' => $this->childTitleHTMLComponents])
                @endif
                @if ($searching)
                    @include('partials.searching')
                @endif
                @if ($exports && count($exportsOptions))
                    @include('partials.exports')
                @endif
            </div>
        </div>
    </section>
    @if (count$this->childPreTableLWComponents))
        @include('partials.livewire-components.pre-table', ['childPreTableLWComponents' => $this->childPreTableLWComponents])
    @endif
    @if (count($this->childPreTableHTMLComponents))
        @include('partials.html-components.pre-table', ['childPreTableHTMLComponents' => $this->childPreTableHTMLComponents])
    @endif
</article>