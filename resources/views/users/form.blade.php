<x-app>

  <x-slot name="heading">
    {{ $meta_page['title'] }}   
  </x-slot>   
  
  <form action="{{ $meta_page['url'] }}" method="post">
    @method($meta_page['method'])
    @csrf 
    <div> 
      <label for="name">Name</label>
      <input class="block border px-4 py-2 rounded" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
      @error('name') 
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror 
    </div> 
    <div> 
      <label for="email">Email</label>
      <input class="block border px-4 py-2 rounded" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
      @error('email') 
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror 
    </div> 
    <div> 
      <label for="password">Password</label>
      <input class="block border px-4 py-2 rounded" type="password" name="password" id="password">
      @error('password') 
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror 
    </div> 
    <x-button>
      {{ $meta_page['submit_text'] }}
    </x-button> 
  </form>

</x-app>
