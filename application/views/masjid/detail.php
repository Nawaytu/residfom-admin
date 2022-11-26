<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $masjid['tanggal']?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $masjid['pemasukan']?></h6>
                    <p class="card-text"><?= $masjid['pengeluaran']?></p>
                    <p class="card-text"><?= $masjid['total']?></p>
                    <a href="<?= base_url();?>masjid" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>