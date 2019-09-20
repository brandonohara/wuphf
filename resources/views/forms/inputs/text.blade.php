@component('forms.inputs.base', [
    "name" => $name,
    "label" => isset($label) ? $label : null,
    "required" => isset($required) ? $required : false,
    "instructions" => isset($instructions) ? $instructions : null
])
    <input 
        type="{{ isset($type) ? $type : 'text' }}" 
        name="{{ $name }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
        class="{{ isset($class) ? $class : '' }} form-control"
        @isset($value) value="{{ $value }}" @endisset
        {{ isset($attributes) ? $attributes : '' }} />
@endcomponent