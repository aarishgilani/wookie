<?php require 'partials/nav.view.php' ?>

<style>
  p {
    white-space: pre-wrap;
  }
</style>

<div class="bg-white px-6 py-20  lg:px-8">
  <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">

    <section class="flex justify-between items-center mb-10">
      <a href="/notes" aria-label="Back to notes" class="hover:underline">
        <section class="flex items-center gap-2 text-blue-600">
            <?php include 'icons/chevron-left.view.php' ?>
            <p class="text-lg">Back to notes</p> 
        </section>
      </a>

      <form method="POST" action="/notes" aria-label="Back to notes" class="hover:underline">
        <div>
          <input type="hidden" name="id" id="id" value=<?= $note['id'] ?> >
          <input type="hidden" name="_method" value="DELETE"/>
          <button name="Delete" id="delete" type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Delete note
          </button>
        </div>
      </form>
    </section>

    <?php if( isset($note['category']) && !empty($note['category']) ): ?>
    <p class="text-base font-semibold leading-7 text-indigo-600"><?= $note['category'] ?></p>
    <?php endif; ?>

    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= $note['title'] ?></h1>
    <p class="mt-6 text-xl leading-8"><?= $note['note'] ?></p>
</div>

