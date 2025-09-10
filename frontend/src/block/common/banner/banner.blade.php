<div class="{{ $block }}">
    <img class="{{ $block->elem('img') }}" src="{{ $item['DETAIL_PICTURE']['SRC'] }}" alt="Новость"></img>
    <div class="{{ $block->elem('text') }}">
        <h1 class="{{ $block->elem('title') }}">{!! $item['NAME'] !!}</h1>
        <p class="{{ $block->elem('announce') }}">{{ strip_tags($item['PREVIEW_TEXT']) }}</p>
    </div>
</div>