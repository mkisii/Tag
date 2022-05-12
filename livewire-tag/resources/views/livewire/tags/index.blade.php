<div class=" overflow-hidden border border-gray-200 shadow sm:rounded-lg">

    <livewire:tags.create' />


    <div class="row bg-secondary">
        {{-- Search Box --}}
        <div class=" col">
            <input wire:model="search" type="text" class="relative w-full px-3 py-3 pl-10" placeholder="Search Tags....">
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
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td class="p-4">{{ $tag->id }}</td>
                        <td class="p-4">{{ $tag->name }}</td>
                        <td class="p-4">{{ $tag->created_at }}</td>
                        <td>

                            {{-- Edit Button --}}
                            {{-- @livewire('tags.edit', ['tag' => $tag], key($tag->id)) --}}

                            <livewire:tags.edit :tag="$tag" :wire:key="'edit-tag' . $tag->id">
                            {{-- <livewire:tags.delete :tag="$tag" :wire:key="'delete-tag' . $tag->id()">  --}}

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>
        <div class="p-2">
            {{ $tags->links() }}
        </div>
    </div>
</div>
