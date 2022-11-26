<div class="container">
    <div class="row mt-3">
        <div class="row-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Data
                </div>
                <div class="card-body">
                <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $masjid['id'] ; ?>">
                        <div class="mb-3">
                            <label for="nama_peminjam" class="form-label">Tanggal</label>
                            <input value="<?= $masjid['tanggal']; ?>" type="date" name="tanggal" class="form-control" id="tanggal">
                            <small class="form-text text-danger"><?= form_error('tanggal');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="pemasukan" class="form-label">Pemasukan</label>
                            <input value="<?= $masjid['pemasukan']; ?>" type="text" name= "pemasukan" class="form-control" id="pemasukan">
                            <small class="form-text text-danger"><?= form_error('pemasukan');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="pengeluaran" class="form-label">Pengeluaran</label>
                            <input value="<?= $masjid['pengeluaran']; ?>" type="text" name= "pengeluaran" class="form-control" id="pengeluaran">
                            <small class="form-text text-danger"><?= form_error('pengeluaran');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input value="<?= $masjid['total']; ?>" type="text" name= "total" class="form-control" id="total">
                            <small class="form-text text-danger"><?= form_error('total');?></small>
                        </div>
                        <button type="submit" name="create" class="btn btn-primary">Simpan</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>