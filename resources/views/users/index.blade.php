<x-app title="Users">
  <x-slot name="heading">Users</x-slot>
  <div class="sm:flex sm:items-center">
    <x-section-title>
      <x-slot name="title">Users</x-slot>
      <x-slot name="description">
        A list of all the users in your account including their name, title, email and role.
      </x-slot>
    </x-section-title>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <x-button as="a" href="{{ route('users.create') }}">
        Add user
      </x-button>
    </div>
  </div>
  <div class="mt-8 flow-root">   
    <x-table>
      <x-table.thead>
        <tr>
          <x-table.th>#</x-table.th>
          <x-table.th>Name</x-table.th>
          <x-table.th>Email</x-table.th>
          <x-table.th>Created at</x-table.th>
          <x-table.th></x-table.th>
        </tr>
      </x-table.thead>
      <x-table.tbody>
        @foreach ($users as $user)
          <tr>
            <x-table.td>{{ $loop->iteration }}</x-table.td>
            <x-table.td>{{ $user->name }}</x-table.td>
            <x-table.td>{{ $user->email }}</x-table.td>
            <x-table.td>{{ $user->created_at->format('d M Y') }}</x-table.td>
            <x-table.td>
              <div class="flex justify-end gap-x-2">
                <a href="{{ route('users.show' , $user->id) }}">View</a>
                <a href="{{ route('users.edit' , $user->id) }}">Edit</a>
              </div>
            </x-table.td>
            {{-- <td>{{ $user->created_at->diffForHumans() }}</td> --}}
          </tr>
        @endforeach
      </x-table.tbody>
    </x-table>
  </div>
</x-app>
