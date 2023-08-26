<?php include('header.view.php') ?>

<div class="m-10">

    <section class="flex justify-between items-center">

        <h1 class="font-bold text-4xl my-8">Notes</h1>

        <a href="/note-create">

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
    

    <?php foreach($notes as $note): ?>

        <li>
            <a href="/note?id=<?=$note['id']?>" class="my-3 text-blue-500 hover:underline"><?= $note['note'] ?></a>
        </li>

    <?php endforeach; ?>

</div>
