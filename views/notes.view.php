<?php include('header.view.php') ?>
<div class="m-10">
<h1 class="font-bold text-4xl my-8">Notes</h1>
<?php foreach($notes as $note): ?>
    <li>
        <a href="/note" class="my-3 text-blue-500 hover:underline"><?= $note['note'] ?></a>
    </li>
<?php endforeach; ?>
</div>
