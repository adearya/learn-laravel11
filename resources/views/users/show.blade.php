<x-app title="Users">
  <x-slot name="heading">{{ $user->name }}</x-slot>

  <form action="{{ route('users.destroy' , $user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <x-button type="submit">
      Delete
    </x-button>
  </form>
</x-app>
