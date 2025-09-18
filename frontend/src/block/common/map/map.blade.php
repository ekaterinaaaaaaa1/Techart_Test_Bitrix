<div class="{{ $block }}">
    <div class="{{ $block->elem('ymap') }}" id="map">
        <div class="{{ $block->elem('marker') }}">
            <div class="{{ $block->elem('marker-point') }}"></div>
            <div class="{{ $block->elem('marker-about') }} {{ $block->elem('marker-about')->mod('hidden') }}">
                <span class="{{ $block->elem('marker-about-text') }}">Офис в Туле</span>
                <span class="{{ $block->elem('marker-about-text') }}">300041, г. Тула, ул. Ф. Смирнова ул., д. 28,</span>
                <span class="{{ $block->elem('marker-about-text') }}">оф. 601-602, 701, 703-707, 712</span>
                <span class="{{ $block->elem('marker-about-text') }}">Тел. / Факс: (4872) 250-450, 57-05-01</span>
            </div>
        </div>
    </div>
    <div class="{{ $block->elem('about') }}">
        <span class="{{ $block->elem('about-text') }}">Офис в Туле</span>
        <span class="{{ $block->elem('about-text') }}">300041, г. Тула, ул. Ф. Смирнова ул., д. 28, оф. 601-602, 701, 703-707, 712</span>
        <span class="{{ $block->elem('about-text') }}">Тел. / Факс: (4872) 250-450, 57-05-01</span>
    </div>
</div>