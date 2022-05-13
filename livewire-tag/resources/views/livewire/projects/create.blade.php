<div>

    <section>
        <div class="w-4/5 p-4 mx-auto space-y-4 shadow card-hearder  mb-2 bg-secondary text-white">

            <h2 class="text-sm  uppercase ">
                <button class="btn btn-primary float-end test-sm"  data-bs-toggle="modal"
                data-bs-target="#addProjectModal"> Create Project</button>
                
                Create Project
            </h2>



            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif


        </div>
        <div wire:ignore.self class="modal fade b" id="addProjectModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-name text-primary">Create Project</h5>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeProjectData" >
                            <div class="form-group row">
                                <label for="name" class="text-primary">Name</label>
                                <div class="col-9">
                                    <input type="text" id="name" class="form-control" wire:model='name'>
                    
                                    @error('name')
                                        <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <label for="name" class="text-primary">Type</label>
                                <div class="col-9">
                                    <select type="name" id="name" class="form-control" wire:model='type'>
                                        @foreach (config('global.PROJECT_TYPES') as $item)
                                            <option value="{{$item}}" >{{$item}}</option>
                                        @endforeach
                                    </select>
                    
                                    @error('type')
                                        <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                                    @enderror
                                </div>


                                {{-- Tag Id --}}
                                <label for="id" class="text-primary">Tag_id</label>
                                <div class="col-9">
                                    <select type="name" id="name" class="form-control" wire:model='tag_id'>
                                        @foreach ($tags as $item)
                                            <option value="{{$item->id}}">{{$item->slug}}</option>
                                        @endforeach
                                    </select>
                    
                                    @error('type')
                                        <span class="text-denger" style="font-size: 10.5px">{{ $message }}</span>
                                    @enderror
                                </div>


                                

                                <label for="version" class="text-primary">Version</label>
                                <div class="col-9">
                                    <input type="float" id="name" class="form-control" wire:model='version'>
                    
                                    @error('version')
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
