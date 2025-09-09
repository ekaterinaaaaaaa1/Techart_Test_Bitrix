<div class="{{ $block }}@if($class ?? false) {{ $class }}@endif">
    <a class="{{ $block->elem('link') }}" href="/news/" target="_self">
        <img class="{{ $block->elem('logo') }}" src="{{ \TAO::frontendUrl('img/logo.svg'); }}" alt="Логотип"></img>
        <span class="{{ $block->elem('title') }}">Галактический вестник</span>
    </a>
    <div class="{{ $block->elem('right-panel') }}">
        {!!$nav!!}
        @if ($user->IsAuthorized())
            <div class="{{ $block->elem('user') }}">
                <div class="{{ $block->elem('name') }}"><?= $user->GetFullName();?></div>
                <div class="{{ $block->elem('logout') }}"><a href="/?logout=yes&<?=bitrix_sessid_get()?>">Выйти</a></div>
            </div>
        @endif
    </div>
</div>