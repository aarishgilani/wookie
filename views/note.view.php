<?php require 'partials/nav.view.php' ?>

<div class="bg-white px-6 py-20  lg:px-8">
  <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
    <a href="/notes" aria-label="Back to notes" class="hover:underline">
      <section class="flex items-center gap-2 mb-7 text-blue-600">
          <?php include 'icons/chevron-left.view.php' ?>
          <p class="text-lg">Back to notes</p> 
      </section>
    </a>

    <?php if( isset($note['category']) && !empty($note['category']) ): ?>
    <p class="text-base font-semibold leading-7 text-indigo-600"><?= $note['category'] ?></p>
    <?php endif; ?>

    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= $note['title'] ?></h1>
    <p class="mt-6 text-xl leading-8"><?= $note['note'] ?></p>
</div>

