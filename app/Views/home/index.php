<?= $this->include('layout/header'); ?>

<section>
  <h1><?= PROJECT_NAME; ?></h1>

  <div id="hot">
    <?= view('home/items'); ?>
  </div>
</section>

<?= $this->include('layout/footer'); ?>