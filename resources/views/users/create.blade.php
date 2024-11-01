<x-app>

  <x-slot name="heading">
      Create
  </x-slot>

  <form action="/users" method="post">
    @csrf
    <div>
      <label for="name">Name</label>
      <input class="block border px-4 py-2 rounded" type="text" name="name" id="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input class="block border px-4 py-2 rounded" type="email" name="email" id="email">
    </div>
    <div>
      <label for="password">Password</label>
      <input class="block border px-4 py-2 rounded" type="password" name="password" id="password">
    </div>
    <x-button>Save</x-button>
  </form>

</x-app>
