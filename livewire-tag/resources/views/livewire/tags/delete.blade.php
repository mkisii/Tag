<div>

    <section>
        <div class="w-4/5 p-4 mx-auto space-y-4 shadow card-hearder p-3 mb-2 bg-secondary text-white">

            {{-- <h2 class="text-sm text-indigo-500 uppercase">

                Update Tag
            </h2> --}}
            <button class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#deleteTagModal"> Update Tag </button>

            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif


        </div>
        <div wire:ignore.self class="modal fade" id="deleteTagModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-tag.name">Update Tag</h5>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="deleteTagData" id="deleteForm ">
                            <div class="form-group row">
                                <label for="modal-tag.name">Name</label>
                                <div class="col-9">
                                    <input type="text" id="updateForm" class="form-control" wire:model='tag.name'>
                                    @error('tag.name')
                                        <span class="text-denger" style="font-size: 10.5px">{{ $success }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss= "modal">Update Tag</button> 
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
