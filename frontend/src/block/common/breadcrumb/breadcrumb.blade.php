<div class="{{ $block }}">
    <ul class="{{ $block->elem('elements') }}">
        @foreach ($arResult as $index => $item)
            @if ((!empty($item['LINK']) && $index < ($elCount - 1)))
                $item['LINK'] = ''
            @endif
            @if ($item['LINK'] != '')
                <li class="{{ $block->elem('element') }}">
                    <a class="{{ $block->elem('element-link') }}" href="{{ $item['LINK'] }}">{{ $item['TITLE'] ?? '' }}</a>
                </li>
            @else
                <li class="{{ $block->elem('last-element') }}">{{ $item['TITLE'] ?? '' }}</li>
            @endif
        @endforeach
    </ul>
</div>