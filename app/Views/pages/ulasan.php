<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>

<form>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><b>Form Ulasan</b></h3>
                        <form>
                            <div class="form-group">
                                <label for="judulUlasan">Judul Ulasan</label>
                                <input type="text" class="form-control" id="judulUlasan" placeholder="Masukkan judul ulasan">
                            </div>
                            <div class="form-group">
                                <label for="deskripsiUlasan">Deskripsi Ulasan</label>
                                <textarea class="form-control" id="deskripsiUlasan" rows="3" placeholder="Masukkan deskripsi ulasan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan username">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?=$this->endSection(); ?>