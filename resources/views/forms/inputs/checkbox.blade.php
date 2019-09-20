@component('forms.inputs.base', [
    "name" => $name,
    "label" => null,
    "required" => isset($required) ? $required : false,
    "instructions" => isset($instructions) ? $instructions : null
])
    <div class="form-check">
        <input 
            type="checkbox" 
            name="{{ $name }}"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
            class="{{ isset($class) ? $class : '' }} form-check-input"
            @isset($value) value="{{ $value }}" @endisset
            @if(isset($checked) && $checked === true) checked="checked" @endisset
            {{ isset($attributes) ? $attributes : '' }} />
        @isset($label)
            <label class="form-check-label" for="{{ $name }}">
                <small>{!! $label !!}</small>
            </label>
        @endisset
    </div>
    
@endcomponent