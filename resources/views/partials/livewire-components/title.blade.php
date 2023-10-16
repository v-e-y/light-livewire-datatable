@foreach ($childTitleLWComponents as $headerLWLItem)
    <div 
        class="@if (isset($headerLWLItem['cssWrapperClasses'])) {{ $headerLWLItem['cssWrapperClasses'] }} @else col-auto @endif" 
        wire:key="childTitleHTMLComponents_{{ $loop->index }}_{{ $this->id }}"
    >
        @livewire($headerLWLItem['name'], $headerLWLItem['params'])
    </div>
@endforeach