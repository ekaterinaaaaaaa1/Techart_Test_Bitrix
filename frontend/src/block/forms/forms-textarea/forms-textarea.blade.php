<div class="{{ $block }}">
    <div class="{{ $block->elem('field-name') }}">{!! $fieldName !!}
        @if (empty($required) || in_array($inArray, $required))
            <span class="{{ $block->elem('required') }}">*</span>
        @endif
    </div>
    <textarea class="{{ $block->elem('message') }} {{ (empty($required) || in_array($inArray, $required)) ? 'required' : '' }}" name="MESSAGE" rows="5" cols="40">{!! ($arResult["MESSAGE"] ?? '') !!}</textarea>
</div>