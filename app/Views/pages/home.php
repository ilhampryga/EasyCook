<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('asset/css/home.css'); ?>">
<div class="container">
    <div class="row">
        <div class="col">
            <h1><b>Resep Masakan Nusantara</b></h1>
            <h4>Temukan dan eksplorasi kelezatan kuliner Indonesia melalui beragam masakan khas.</h4>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-5">
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/gudeg.jpeg'); ?>" class="card-img-top" alt="gudeg">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Gudeg Enak Khas Jogja</b></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/mendoan1.jpg'); ?>" class="card-img-top" alt="mendoan">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Tempe Mendoan Empuk Lezat</b></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/rawon.jpg'); ?>" class="card-img-top" alt="mi_jawa">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Rawon Daging Sapi Spesial</b></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/ayam_bakar.jpg'); ?>" class="card-img-top" alt="ayam_bakar">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Ayam Bakar</b></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/nasi_goreng3.jpg'); ?>" class="card-img-top" alt="nasgor">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Nasi Goreng Seafod Spesial</b></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 35rem;" data-url="<?= base_url('pages/view_resep'); ?>">
                <img src="<?= base_url('asset/img/rendang.jpg'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text"><b>Resep Rendang Khas Padang Nikmat</b></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('click', function() {
                window.location.href = this.getAttribute('data-url');
            });
        });
</script>

<?=$this->endSection(); ?>

