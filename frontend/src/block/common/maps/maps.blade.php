<div class="{{ $block }}" id="maps">
    <div class="{{ $block->elem('tabs') }}">
    @for ($i = 0; $i < count($mapsParams); $i++)
        <div class="{{ $i == 0 ? $block->elem('tab')->mod('active') : $block->elem('tab') }}" data-map-id="{{ $i }}">
            <span class="{{ $block->elem('tab-text') }}">{{ $mapsParams[$i]['name'] }}</span>
        </div>
    @endfor
    </div>
    @for ($i = 0; $i < count($mapsParams); $i++)
        {!! $renderer->renderBlock(
				'common/map',
				["i" => $i,
                "mapParams" => $mapsParams[$i]]
            )
        !!}
    @endfor
</div>