<form class="{{ $block }}" action="{{ $action }}" method="POST">
    {!! bitrix_sessid_post() !!}
    @foreach ($blocks as $block)
        {!! $block !!}
    @endforeach
</form>