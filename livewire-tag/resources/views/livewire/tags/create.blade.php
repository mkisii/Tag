<div>

    <section>
        <div class="w-4/5 p-4 mx-auto space-y-4 shadow card-hearder  mb-2 bg-secondary text-white">

            <h2 class="text-sm  uppercase ">
                <button class="btn btn-primary float-end test-sm"  data-bs-toggle="modal"
                data-bs-target="#addTagModal"> Create Tag</button>
                Create Tag
            </h2>


            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif


        </div>
        <div wire:ignore.self class="modal fade b" id="addTagModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-name text-primary">Create Tag</h5>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeTagData" >
                            <div class="form-group row">
                                <label for="name" class="text-primary">Name</label>
                                <div class="col-9">
                                    <input type="text" id="name" class="form-control" wire:model='name'>
                                    @error('name')
                                        <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Add
                                    Tag</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
