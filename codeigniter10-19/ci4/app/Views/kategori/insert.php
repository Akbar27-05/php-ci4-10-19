<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<?php 
    echo session()->getFlashdata('info');
?>

<h1> Insert Data </h1>

<form action="<?= base_url('/admin/kategori/insert')?>" method="post">
    Kategori : <input type="text" name="kategori" required>
    <br>
    Keterangan : <input type="text" name="keterangan" required>
    <br>
    <input type="submit" value="simpan" name="simpan">
</form>

<?= $this->endSection() ?>