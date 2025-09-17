<div class="{{ $block }}">
    <div class="{{ $block->elem('field-name') }}">{!! $fieldName !!}
        @if (empty($required) || in_array($inArray, $required))
            <span class="{{ $block->elem('required') }}">*</span>
        @endif
    </div>
    <input class="{{ $block->elem('field') }} {{ (empty($required) || in_array($inArray, $required)) ? 'required' : '' }}" id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"></input>
</div>