<?php require 'partials/nav.view.php' ?>

<style>
    input:where(:not([type])):focus, textarea:where(:not([type])):focus{
        --tw-ring-shadow: 0 !important;
    }
</style>

<div class="max-w-3xl mx-auto">
<form method="POST">

    <div class="flex justify-between items-center">
        <input name="title" id="title" class="text-indigo-900 font-bold focus:outline-none  border-none text-4xl my-10 focus:shadow-inherit" value="<?= $heading ?>" />
        <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
    
    <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
        <label for="note" class="sr-only">Note</label>
        <div class="h-full min-h-screen">
        <textarea rows="5" name="note" id="note" class="block w-full h-screen rounded-md border-none py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 sm:text-lg sm:leading-6" placeholder="Add your notes..."></textarea>
        </div>
    </div>

</form>
</div>


