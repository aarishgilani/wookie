<nav class="bg-indigo-800 border-b border-indigo-400 border-opacity-25 lg:border-none">
  <div class="max-w-8xl mx-auto px-2 sm:px-4 lg:px-8">
    <div class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
      <div class="px-2 flex items-center lg:px-0">
        <div class="flex-shrink-0">
          <?php icon('wookie', ['class' => 'text-white', 'size' => '35pt']) ?>
        </div>
        <div class="hidden lg:block lg:ml-6">
          <div class="flex">
            <a href="/" class="rounded-md <?php if (url('/')) : ?> bg-indigo-900 <?php endif; ?> py-2 px-3 text-sm leading-5 font-medium text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-150 ease-in-out">Home</a>
            <a href="/about" class="ml-4 rounded-md <?php if (url('/about')) : ?> bg-indigo-900 <?php endif; ?> py-2 px-3 text-sm leading-5 font-medium text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-150 ease-in-out">About</a>
            <a href="/notes" class="ml-4 rounded-md <?php if (url('/notes') || url('/note')) : ?> bg-indigo-900 <?php endif; ?> py-2 px-3 text-sm leading-5 font-medium text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-150 ease-in-out">Notes</a>
            <a href="/projects" class="ml-4 rounded-md <?php if (url('/projects')) : ?> bg-indigo-900 <?php endif; ?> py-2 px-3 text-sm leading-5 font-medium text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-150 ease-in-out">Projects</a>
          </div>
        </div>
      </div>
      <?php if (isset($_SESSION['logged_in'])) : ?>
        <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
          <div class="max-w-lg w-full lg:max-w-xs">
            <label for="search" class="sr-only">Search</label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center" aria-hidden="true">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 placeholder-gray-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo sm:text-sm transition duration-150 ease-in-out" placeholder="Search" type="search">
            </div>
          </div>
        </div>

        <div class="flex lg:hidden">
          <!-- Mobile menu button -->
          <button class="p-2 rounded-md inline-flex items-center justify-center text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 focus:text-white transition duration-150 ease-in-out" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
                Heroicon name: menu

                Menu open: "hidden", Menu closed: "block"
              -->
            <svg class="block flex-shrink-0 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
                Heroicon name: x

                Menu open: "block", Menu closed: "hidden"
              -->
            <svg class="hidden flex-shrink-0 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:block lg:ml-4">
          <div class="flex items-center">

            <a href="logout">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
              </svg>
            </a>
            
            <!-- Profile dropdown -->
            <div class="relative flex-shrink-0 ml-4">
              <div>
                <button class="rounded-full flex text-sm text-white focus:outline-none focus:shadow-solid transition duration-150 ease-in-out" id="user-menu" aria-haspopup="true">
                  <span class="sr-only">Open profile menu</span>
                  <?php $hash = md5($_SESSION['email']) ?>
                  <img class="rounded-full h-8 w-8" src=<?= "https://www.gravatar.com/avatar/{$hash}?d=robohash"?> alt="">
                </button>
              </div>
              <!--
                  Profile dropdown panel, show/hide based on dropdown state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
              <!-- <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                  <div class="py-1 bg-white rounded-md shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    <a href="#" class="block py-2 px-4 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Your Profile</a>
                    <a href="#" class="block py-2 px-4 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Settings</a>
                    <a href="#" class="block py-2 px-4 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Sign out</a>
                  </div>
                </div> -->
            </div>
          </div>
        </div>
      <?php else : ?>
        <section class="inline-flex gap-5">

          <a href="/register" class="block w-full px-5 py-3 rounded-md text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out" role="menuitem">
            Register
          </a>

          <a href="/login" class="block w-full px-5 py-3 rounded-md text-center font-medium text-white bg-violet-500 hover:bg-indigo-500 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out" role="menuitem">
            Log In
          </a>

        </section>
      <?php endif; ?>
    </div>
  </div>

  <!--
        Mobile menu, toggle classes based on menu state.

        Menu open: "block", Menu closed: "hidden"
      -->
  <div class="hidden lg:hidden">
    <div class="px-2 pt-2 pb-3">
      <a href="#" class="block bg-indigo-900 rounded-md py-2 px-3 text-base font-medium text-white focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Dashboard</a>
      <a href="#" class="block mt-1 rounded-md py-2 px-3 text-base font-medium text-white hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Team</a>
      <a href="#" class="block mt-1 rounded-md py-2 px-3 text-base font-medium text-white hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Projects</a>
      <a href="#" class="block mt-1 rounded-md py-2 px-3 text-base font-medium text-white hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Calendar</a>
    </div>
    <div class="pt-4 pb-3 border-t border-indigo-400 border-opacity-25">
      <div class="px-5 flex items-center">
        <div class="flex-shrink-0">
          <img class="rounded-full h-10 w-10" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium leading-6 text-white">Tom Cook</div>
          <div class="text-sm font-medium leading-5 text-indigo-300">tom@example.com</div>
        </div>
      </div>
      <div class="mt-3 px-2">
        <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Your Profile</a>
        <a href="#" class="block mt-1 rounded-md py-2 px-3 text-base font-medium text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Settings</a>
        <a href="#" class="block mt-1 rounded-md py-2 px-3 text-base font-medium text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition duration-150 ease-in-out">Sign out</a>
      </div>
    </div>
  </div>
</nav>