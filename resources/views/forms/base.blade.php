<form 
    method="{{ strtolower($method) == 'get' ? 'get' : 'post' }}" 
    action="{{ $action }}" 
    class="{{ isset($class) ? $class : '' }}" 
    id="{{ isset($id) ? $id : '' }}"
    autocomplete="off"
>
    @if(strtolower($method) != 'get')
        <div class="hidden">
            {{ csrf_field() }}
            {{ method_field($method) }}
        </div>
    @endif
    {{ $slot }}
</form>