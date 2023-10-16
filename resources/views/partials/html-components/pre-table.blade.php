@foreach ($childPreTableHTMLComponents as $htmlItem)
    <div 
        class="col-auto" 
        wire:key="childPreTableHTMLComponents{{ $loop->index }}_{{ $this->id }}"
    >
        {!! $htmlItem !!}
    </div>
@endforeach