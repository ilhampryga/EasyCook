<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1><b>Bagikan Resepmu</b></h1>
            <form action="<?= base_url('pages/simpan_resep'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="fotoMasakan">Foto Masakan</label>
                    <input type="file" class="form-control" id="fotoMasakan" name="fotoMasakan">
                </div>
                <div class="form-group mt-3">
                    <label for="namaMasakan">Nama Masakan</label>
                    <input type="text" class="form-control" id="namaMasakan" name="namaMasakan" placeholder="Masukkan nama masakan">
                </div>
                <div class="form-group mt-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="bahanBahan">Bahan-bahan</label>
                    <textarea class="form-control" id="bahanBahan" name="bahanBahan" rows="5" placeholder="Masukkan bahan-bahan"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="caraMemasak">Cara Memasak</label>
                    <textarea class="form-control" id="caraMemasak" name="caraMemasak" rows="5" placeholder="Masukkan cara memasak"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Bagikan Resep</button>
            </form>
        </div>
    </div>
</div>



<?=$this->endSection(); ?>