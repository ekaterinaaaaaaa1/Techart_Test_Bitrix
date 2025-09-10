<nav class="{{ $block }}">
    <ul class="{{ $block->elem('topmenu') }}">
        @foreach ($arResult as $item)
            <li class="{{ $block->elem('topmenu-item') }}"><a class="{{ $block->elem('topmenu-item-link') }}" href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
            @if (!empty($item['SUBITEMS']))
                <ul class="{{ $block->elem('submenu') }}">
                    @foreach ($item['SUBITEMS'] as $subItem)
                        <li class="{{ $block->elem('submenu-item') }}"><a class="{{ $block->elem('submenu-item-link') }}" href="<?= $subItem['LINK']; ?>"><?= $subItem['TEXT']; ?></a></li>
                    @endforeach
                </ul>
            @endif
            </li>
        @endforeach
    </ul>
</nav>