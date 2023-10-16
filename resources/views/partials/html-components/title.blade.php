@foreach ($childTitleHTMLComponents as $headerHTMLItem)
    <div 
        class="col-auto" 
        wire:key="childTitleHTMLComponents_{{ $loop->index }}_{{ $this->id }}"
    >
        {!! $headerHTMLItem !!}
    </div>
@endforeach