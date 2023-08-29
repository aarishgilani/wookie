<?php partial('nav') ?>

<div class="bg-white sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden mt-36">

  <?php icon('wookie', ['class' => 'text-indigo-500 mx-auto', 'size' => '250']) ?>

  <div class="mt-6">
    <form action="/register" method="POST" class="space-y-6">
      <div>
        <label for="name" class="sr-only">
          Full name
        </label>
        <div class="rounded-md shadow-sm">
          <input id="name" name="name" placeholder="Full name" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
      </div>

      <div>
        <label for="email" class="sr-only">
          Email
        </label>
        <div class="rounded-md shadow-sm">
          <input id="email" name="email" placeholder="Email Address" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">
          Password
        </label>
        <div class="rounded-md shadow-sm">
          <input id="password" name="password" type="password" placeholder="Password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
      </div>

      <div>
        <span class="block w-full rounded-md shadow-sm">
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
            Create your account
          </button>
        </span>
      </div>
    </form>
  </div>

</div>
