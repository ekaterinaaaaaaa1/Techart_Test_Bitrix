<form class="{{ $block }}" action="{{ $action }}" method="POST">
    <div class="{{ $block->elem('messages') }}" id="messages"></div>
    {!! bitrix_sessid_post() !!}
    @foreach ($blocks as $block)
        {!! $block !!}
    @endforeach
</form>