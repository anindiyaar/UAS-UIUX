<div class="card">
            <div class="card-body">
                <form method="post" action="<?= base_url() ?>transaksi/edit/<?=$id?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" placeholder="Nama User" value="<?=$user->nama?>" class="form-control" id="nama">

                    </div>
                    <div class="mb-3">
                        <label for="durasi_sewa" class="form-label">Durasi Sewa</label>
                        <input type="text" class="form-control" name="durasi_sewa" id="durasi_sewa" value="<?=$user->durasi_sewa?>" placeholder="Durasi Penyewaan" aria-describedby="durasi_sewa">

                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="text" class="form-control" value="<?=$user->nominal?>" name="nominal" placeholder="Nominal Harga" id="nominal">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_bayar" class="form-label">Status</label>
                        <input type="text" name="jenis_bayar" placeholder="Lunas/Belum Lunas" value="<?=$user->jenis_bayar?>" class="form-control" id="jenis_bayar">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Updated
                    </div>
                <?php }
                ?>
                 <?php
                if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        Failed!
                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>
</div>