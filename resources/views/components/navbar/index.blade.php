<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center text-white text-2xl">
            Stark 
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-navbar.link href="/">Home</x-navbar.link>
              <x-navbar.link href="/about">About</x-navbar.link>
              <x-navbar.link href="/contact">Contact</x-navbar.link>
              <x-navbar.link href="/gallery">Gallery</x-navbar.link>
                <x-navbar.link href="/users">User</x-navbar.link>
              @auth
                <x-navbar.link href="#">
                  {{ auth()->user()->name }}
                </x-navbar.link>
                <form action="{{ route('logout') }}" method="post">
                  @csrf

                  <x-button type="submit">
                    Logout
                  </x-button>
                </form>
              @else
                <x-navbar.link href="/login">Login</x-navbar.link>
              @endauth

            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <x-navbar.dropdown-link href="/">Home</x-navbar.dropdown-link>
        <x-navbar.dropdown-link href="/about">About</x-navbar.dropdown-link>
        <x-navbar.dropdown-link href="/contact">Contact</x-navbar.dropdown-link>
        <x-navbar.dropdown-link href="/gallery">Gallery</x-navbar.dropdown-link>
        <x-navbar.dropdown-link href="{{ route('users.index') }}">User</x-navbar.dropdown-link>
        <x-navbar.dropdown-link href="{{ route('login') }}">Login</x-navbar.dropdown-link>
      </div>
    </div>
</nav>
