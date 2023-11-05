<div class="col-auto">
    @if (count($exportsOptions) === 1)
        <button 
            class="btn btn-sm btn-outline-info" 
            type="button" 
            wire:click="{{ $exportsOptions[0]['methodName'] }}"
            wire:key="export_{{ $exportsOptions[0]['methodName'] }}"
        >
            @if (isset($exportsOptions[0]['buttonIcon']))
                {!! $exportsOptions[0]['buttonIcon'] !!}
            @endif
            @if (isset($exportsOptions[0]['buttonText']))
                {!! $exportsOptions[0]['buttonText'] !!}
            @endif
        </button>
    @endif
    @if (count($exportsOptions) > 1)
        <div class="dropdown">
            <button
                type="button" 
                class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" 
                aria-expanded="false"
            >
                <i class="fa-solid fa-file-export pe-0"></i>
            </button>
            <ul class="dropdown-menu">
                @foreach ($exportsOptions as $exportOption)
                    <li wire:key="export_option_methodName_{{ $loop->index }}_{{ $this->id }}">
                        <button 
                            class="dropdown-item" 
                            type="button" 
                            wire:click="{{ $methodName }}"
                        >
                            @if (isset($exportOption['buttonIcon']))
                                {!! $exportOption['buttonIcon'] !!}
                            @endif
                            @if (isset($exportOption['buttonText']))
                                {!! $exportOption['buttonText'] !!}
                            @endif
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>