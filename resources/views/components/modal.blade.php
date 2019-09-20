<div class="modal fade" role="dialog" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @isset($title)
                <div class="modal-header align-items-center">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fas fa-times"></span>
                    </button>
                </div>
            @endisset
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                @isset($footer)
                    {{ $footer }}
                @else
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                @endisset
            </div>
        </div>
    </div>
</div>