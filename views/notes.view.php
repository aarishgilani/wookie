<?php require 'partials/nav.view.php' ?>
<?php require 'partials/header.view.php' ?>

<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->



<div class="max-w-8xl mx-auto">

    <section class="flex justify-end items-center px-36">

        <a href="/notes/create">

            <span class="inline-flex rounded-md shadow-sm max-h-16">

                <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">

                    <!-- Heroicon name: plus -->
                    <svg class="-ml-1 mr-3 mb-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>

                    Create Note

                </button>

            </span>

        </a>

    </section>
    
    <ul class="px-36 mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach($notes as $note): ?>
        
            <a href="/note?id=<?=$note['id']?>" class="my-3 text-blue-500 hover:underline">
            <li class="col-span-1 bg-white rounded-lg shadow">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-sm leading-5 font-medium truncate"> <?= $note['title'] ?> </h3>
                    <?php if( isset($note['category']) && !empty($note['category']) ): ?>
                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full"><?= $note['category'] ?></span>
                    <?php endif; ?>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm leading-5 truncate">Date Created Date Updated</p>
                </div>      
                </div>
                <div class="border-t p-6 border-gray-200">
                <div class="-mt-px flex">
                    
                <p><?= $note['note'] ?></p>
                    
                </div>
                </div>
            </li>
            </a>
        
    <?php endforeach; ?>
    </ul>

</div>
