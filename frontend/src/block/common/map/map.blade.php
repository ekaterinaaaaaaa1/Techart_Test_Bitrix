<div class="{{ $i == 0 ? $block : $block->mod('hidden') }}" id="{{ $i }}">
    <div class="{{ $block->elem('ymap') }}" id="map_{{ $i }}" data-latitude="{{ $mapParams['latitude'] }}" data-longitude="{{ $mapParams['longitude'] }}">
        <div class="{{ $block->elem('marker') }}">
            <div class="{{ $block->elem('marker-point') }}" data-map-id="{{ $i }}"></div>
            <div class="{{ $block->elem('marker-about')->mod('hidden') }}">
                <span class="{{ $block->elem('marker-about-text') }}">{!! $mapParams['aboutText'] !!}</span>
            </div>
        </div>
    </div>
    <div class="{{ $block->elem('about') }}">
        <span class="{{ $block->elem('about-text') }}">{!! $mapParams['aboutText'] !!}</span>
    </div>
</div>