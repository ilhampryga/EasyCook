<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/view_resep.css'); ?>">

<div class="container mt-5 pt-5" style="margin-left: 10%;">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 150rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('asset/img/gudeg.jpeg'); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-8">
                            <h1 style="font-size: 50px; margin-top: 0px"><b>Gudeg</b></h1>
                            <p style="font-size:20px;">Some description text here to accompany the image.</p>
                            <p style="margin-top: 205px;"><b>Oleh : ilhamprygap</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2" style="width: 150rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h1 style="font-size: 40px; margin-left: 0px; margin-top: 0px"><b>Bahan - Bahan</b></h1>
                            <p style="font-size:20px;  margin-left: 0px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut pariatur atque sint nam rerum, debitis ipsa dolore beatae qui a enim, maiores libero minima. Eveniet, magni. Tempora, nam nisi cum culpa quos temporibus doloribus voluptatum ut incidunt recusandae. Voluptatem odio sunt ea quam iste accusantium iusto dolorem deleniti architecto soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2" style="width: 150rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="font-size: 40px; margin-left: 0px; margin-top: 0px"><b>Cara Memasak</b></h1>
                            <p style="font-size:20px;  margin-left: 0px;">Some description text here to accompany the image.</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="card mt-2" style="width: 150rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 style="font-size: 40px; margin: 0;"><b>Ulasan</b></h1>
                                <table class="table table-sm fs-3 mt-2">
                                    <thead>
                                        <tr>
                                            <td>Username</td>
                                            <td>Komentar</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ilhamprygap</td>
                                        <td>Mantap Lezat</td>
                                    </tr>
                                    <tr>
                                        <td>rifkydewani</td>
                                        <td>resep yang bermanfaat terima kasih</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-primary" id="btnTambahUlasan">Tambahkan Ulasan</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Form Ulasan -->
            <div id="formUlasan" class="card mt-3" style="width: 150rem; display: none;">
                <div class="card-body">
                    <h2>Berikan Ulasan Anda</h2>
                    <form id="formTambahUlasan">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="deskripsiUlasan">Komentar</label>
                            <textarea class="form-control" id="deskripsiUlasan" name="deskripsiUlasan" rows="3" placeholder="Masukkan deskripsi ulasan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Ulasan</button>
                        <button type="button" class="btn btn-secondary ml-2" id="btnBatal">Batal</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Tampilkan form ketika tombol "Tambahkan Ulasan" diklik
        $('#btnTambahUlasan').click(function() {
            $('#formUlasan').slideDown(); // Menampilkan form dengan efek slide down
        });

        // Sembunyikan form ketika tombol "Batal" diklik
        $('#btnBatal').click(function() {
            $('#formUlasan').slideUp(); // Menyembunyikan form dengan efek slide up
        });

        // Tangani pengiriman form Ulasan (Anda dapat menambahkan logika pengiriman form di sini)
        $('#formTambahUlasan').submit(function(event) {
            event.preventDefault(); // Mencegah form untuk melakukan submit

            // Di sini Anda dapat menambahkan kode untuk mengirim data ulasan ke server

            // Setelah pengiriman berhasil, sembunyikan form
            $('#formUlasan').slideUp();
        });
    });
</script>

<?=$this->endSection(); ?>
