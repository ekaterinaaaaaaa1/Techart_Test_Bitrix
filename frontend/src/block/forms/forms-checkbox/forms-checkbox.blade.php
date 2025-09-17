<div class="{{ $block }}">
    <input class="{{ $block->elem('box') }} {{ (empty($required) || in_array($inArray, $required)) ? 'required' : '' }}" type="checkbox" id="agreement" name="agreement" value="agreement">
    <label class="{{ $block->elem('label') }}" for="agreement">Я согласен(-а) с условиями</label>
</div>