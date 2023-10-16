<div class="row align-items-center justify-content-between">
    @foreach ($childPreTableLWComponents as $lwComponent)
        <div 
            class="@if (isset($lwComponent['cssWrapperClasses'])) {{ $lwComponent['cssWrapperClasses'] }} @else col-auto @endif" 
            wire:key="childPreTableLWComponents_{{ $loop->index }}_{{ $this->id }}"
        >
            @livewire($lwComponent['name'], $lwComponent['params'])
        </div>
    @endforeach
</div>