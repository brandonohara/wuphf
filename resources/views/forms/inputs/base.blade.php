<div class="form-group {{ isset($class) ? $class : '' }} @if($errors->has($name)) has-error @endif">
    @if (isset($label))
        <label class="small">
            {{ $label }}@if($required)<span class="required">*</span>@endif
        </label>
    @endif
    @if (isset($instructions))
        <p><small>{{ $instructions }}</small></p>
    @endif
    
    {{ $slot }}

    @if ($errors->has($name))
        <p class="text-danger small">{{ $errors->first($name) }}</p>
    @endif
</div>