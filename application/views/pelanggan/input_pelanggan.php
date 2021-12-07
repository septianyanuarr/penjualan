<form action="<?php echo base_url(); ?>pelanggan/simpanpelanggan" class="formpelanggan" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="kodepelanggan" placeholder="Kode Pelanggan">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="namapelanggan" placeholder="Nama Pelanggan">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="alamatpelanggan" placeholder="Alamat Pelanggan">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nohp" placeholder="NO HP">
    </div>
    <div class="form-group mb-3">
        <select name="dropshipper" class="form-select">
            <option value="">Pilih Dropshipper</option>
            <?php foreach ($dropshipper as $d) { ?>
                <option value="<?php echo $d->kode_dropshipper; ?>"><?php echo $d->kode_dropshipper ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="10" y1="14" x2="21" y2="3" />
                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
            </svg>
            Simpan
        </button>
    </div>
</form>

<script>
    $(function() {
        $('.formpelanggan').bootstrapValidator({
            fields: {
                kodepelanggan: {
                    message: 'Kode Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Harus Diisi !'
                        }
                    }
                },
                namapelanggan: {
                    message: 'Nama Pelanggan Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Nama Pelanggan Harus Diisi !'
                        }
                    }
                },
                alamatpelanggan: {
                    message: 'Alamat Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Alamat Harus Diisi !'
                        }
                    }
                },
                nohp: {
                    message: 'No Hp Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'No Hp Harus Diisi !'
                        }
                    }
                },
                dropshipper: {
                    message: 'Dropshipper Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Dropshipper Harus Diisi !'
                        }
                    }
                },
            }
        });
    });
</script>