<?php partial('nav') ?>
<?php partial('header') ?>

<dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-4 max-w-7xl">
  <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
    <dt class="text-sm font-medium leading-6 text-gray-500">Name</dt>
    <dd class="text-xs font-medium text-gray-700"></dd>
    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"><?= $project['name'] ?></dd>
  </div>
  <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
    <dt class="text-sm font-medium leading-6 text-gray-500">Progress</dt>
    <dd class="text-xs font-medium text-rose-600"></dd>
    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$12,787.00</dd>
  </div>
  <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
    <dt class="text-sm font-medium leading-6 text-gray-500">Start Date</dt>
    <dd class="text-xs font-medium text-gray-700"></dd>
    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$245,988.00</dd>
  </div>
  <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
    <dt class="text-sm font-medium leading-6 text-gray-500">End Date</dt>
    <dd class="text-xs font-medium text-rose-600"></dd>
    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$30,156.00</dd>
  </div>
</dl>

<ul role="list" class="space-y-6 max-w-7xl mx-auto">
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
      <div class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
    </div>
    <p class="flex-auto py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Chelsea Hagon</span> created the invoice.</p>
    <time datetime="2023-01-23T10:32" class="flex-none py-0.5 text-xs leading-5 text-gray-500">7d ago</time>
  </li>
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
      <div class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
    </div>
    <p class="flex-auto py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Chelsea Hagon</span> edited the invoice.</p>
    <time datetime="2023-01-23T11:03" class="flex-none py-0.5 text-xs leading-5 text-gray-500">6d ago</time>
  </li>
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
      <div class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
    </div>
    <p class="flex-auto py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Chelsea Hagon</span> sent the invoice.</p>
    <time datetime="2023-01-23T11:24" class="flex-none py-0.5 text-xs leading-5 text-gray-500">6d ago</time>
  </li>
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <img src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="relative mt-3 h-6 w-6 flex-none rounded-full bg-gray-50">
    <div class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-200">
      <div class="flex justify-between gap-x-4">
        <div class="py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Chelsea Hagon</span> commented</div>
        <time datetime="2023-01-23T15:56" class="flex-none py-0.5 text-xs leading-5 text-gray-500">3d ago</time>
      </div>
      <p class="text-sm leading-6 text-gray-500">Called client, they reassured me the invoice would be paid by the 25th.</p>
    </div>
  </li>
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
      <div class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
    </div>
    <p class="flex-auto py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Alex Curren</span> viewed the invoice.</p>
    <time datetime="2023-01-24T09:12" class="flex-none py-0.5 text-xs leading-5 text-gray-500">2d ago</time>
  </li>
  <li class="relative flex gap-x-4">
    <div class="absolute left-0 top-0 flex w-6 justify-center h-6">
      <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
      <svg class="h-6 w-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
      </svg>
    </div>
    <p class="flex-auto py-0.5 text-xs leading-5 text-gray-500"><span class="font-medium text-gray-900">Alex Curren</span> paid the invoice.</p>
    <time datetime="2023-01-24T09:20" class="flex-none py-0.5 text-xs leading-5 text-gray-500">1d ago</time>
  </li>
</ul>

<!-- New comment form -->
<div class="mt-6 flex gap-x-3 max-w-7xl mx-auto mb-20">
  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-none rounded-full bg-gray-50">
  <form action="#" class="relative flex-auto">
    <div class="overflow-hidden rounded-lg pb-12 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
      <label for="comment" class="sr-only">Add your comment</label>
      <textarea rows="2" name="comment" id="comment" class="block w-full resize-none border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Add your comment..."></textarea>
    </div>

    <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
      <div class="flex items-center space-x-5">
        <div class="flex items-center">
          <button type="button" class="-m-2.5 flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Attach a file</span>
          </button>
        </div>
      </div>
      <button type="submit" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Comment</button>
    </div>
  </form>
</div>

