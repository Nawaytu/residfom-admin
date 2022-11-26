<div class="container">

    <?php if ( $this->session->flashdata('flash') ): ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Data Masjid 
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('masjid/create')?>" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Search Data" aria-label="Search Data" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <h3>Data Masjid</h3>
        <?php if (empty($masjid)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Masjid Tidak Ada
            </div>
        <?php endif; ?>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Pengeluaran</th>
                    <th scope="col">Total</th>
                </tr>
                <?php foreach( $masjid as $masjid) : ?>
                <tr>
                    <td><?= $masjid['tanggal']?></td>
                    <td><?= $masjid['pemasukan']?></td>
                    <td><?= $masjid['pengeluaran']?></td>
                    <td><?= $masjid['total']?></td>
                    <td>
                        <a href="<?= base_url(); ?>masjid/delete/<?= $masjid['id']; ?>"
                        class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus ?');">Hapus</a>
                        <a href="<?= base_url(); ?>masjid/update/<?= $masjid['id']; ?>"
                        class="badge text-bg-success">Update</a>
                        <a href="<?= base_url(); ?>masjid/detail/<?= $masjid['id']; ?>"
                        class="badge text-bg-primary">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <!-- Tidak Terbaca -->
            <?= $this->pagination->create_links(); ?>
    </div>
</div>