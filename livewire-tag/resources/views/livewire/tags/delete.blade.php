<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-black" id="deleteModalLabel">Delete Tag </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-black">
            <div class="form-group row text-black bold">
                <div class="col-9">
                    <h5>{{ $tag->name}}</h5>
                    @error('name')
                        <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" wire:click="deleteTagData">Delete Tag</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
@endpush
