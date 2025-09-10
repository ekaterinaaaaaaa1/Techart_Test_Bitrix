<div class="{{ $block }}">
    @foreach ($items as $arItem)
        {!! $renderer->renderBlock(
				'common/news',
				["arItem" => $arItem]
            )
        !!}
    @endforeach
</div>