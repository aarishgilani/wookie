<?php include('header.view.php') ?>

<div class="max-w-3xl mx-auto">
<form method="POST">

    <div class="flex justify-between items-center">
        <h1 class="font-bold text-4xl my-10"><?= $heading ?? 'no heading' ?></h1>
        <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
    
    <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
        <label for="note" class="sr-only">Note</label>
        <div class="h-full min-h-screen">
        <textarea rows="5" name="note" id="note" class="block w-full h-screen rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Add your notes..."></textarea>
        </div>
    </div>

</form>
</div>


