<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<h2 class="h2"><?= $news['title'] ?></h2>

<div><?= $news['content'] ?></div>

<?= $this->endSection() ?>