<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-black" id="updateModalLabel">Update Tag </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-black">
            <form wire:submit.prevent="updateTagData"  id="updateForm ">
                <div class="form-group row text-black bold">
                    <label for="tag.name">Tag Name</label>
                    <div class="col-9">
                        <input type="text" id="updateForm" class="form-control" name="name" wire:model='tag.name'>
                        @error('tag.name')
                            <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update Tag</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>


@push('scripts')
@endpush
