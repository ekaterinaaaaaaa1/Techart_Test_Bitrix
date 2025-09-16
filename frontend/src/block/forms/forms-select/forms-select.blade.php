<div class="{{ $block }}">
    <div class="{{ $block->elem('field-name') }}">{!! $fieldName !!}
        @if (empty($required) || in_array($inArray, $required))
            <span class="{{ $block->elem('required') }}">*</span>
        @endif
    </div>
    <select class="{{ $block->elem('selection') }}">
        @foreach($items as $arItem)
            <option class="{{ $block->elem('selection-item') }}">{!! $arItem['NAME'] !!}</option>
        @endforeach
    </select>
</div>