<div class="form-group">
    <button type="submit" class="btn btn-primary">
        @isset($icon) <span class="fas fa-{{ $icon }}"></span> @endisset
        {{ $text }}
    </button>
</div>