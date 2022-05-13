<div class=" overflow-hidden border border-gray-200 shadow sm:rounded-lg">

    {{-- Create Nested Component --}}
    {{-- @livewire('projects.create')     --}}

    <div class="row bg-secondary">
        {{-- Search Box --}}
        <div class=" col">
            <input wire:model="search" type="text" class="relative w-full px-3 py-3 pl-10" placeholder="Search projects....">
        </div>
        {{-- Order By --}}
        <div class="col">
            <select wire:model="orderBy" id="orderBy" class="relative w-full px-3 py-3 pl-10">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="created_at">Created At</option>
            </select>
        </div>


        {{-- Order Asc --}}

        <div class="col">
            <select wire:model="orderAsc" id="orderAsc" class="relative w-full px-3 py-3 pl-10">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>

        {{-- Per Page --}}

        <div class="col">
            <select wire:model="perPage" id="perPage" class="relative w-full px-3 py-3 pl-10">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div>
    </div>

    <div class="overflow-hidden shadow">
        <table class=" table w-full divide-y divide-gray-200 table-fixed bg-secondary text-white ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Version</th>
                    <th scope="col">Slug Tag</th>
                    <th scope="col">User</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class="p-4">{{ $project->name }}</td>
                        <td class="p-4">{{ $project->type}}</td>
                        <td class="p-4">{{ $project->version }}</td>
                        <th class="p-4">{{$project->tag_id}}</th>
                        <th class="p-4">{{ $project->user->id}}</th>


                         {{-- Nested Commponets--}}
                        <td>
                            <div>

                                {{-- Edit Button --}}
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal-{{$project->id}}">
                                    Update project
                                </button>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="updateModal-{{$project->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true" >
                                    @livewire('projects.edit', ['project' => $project], key($project->id))
                                </div>

                                {{-- Delete Button --}}
                                <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal-{{$project->id}}">
                                    Delete project
                                </button>

                                {{-- Modal --}}
                                <div class="modal fade" id="deleteModal-{{$project->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" >
                                    @livewire('projects.delete',['project' =>$project], key($project->id))
                                </div>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>
        <div class="p-2">
            {{-- {{ $projects->links() }} --}}
        </div>
    </div>
</div>

