<form action="<?php echo base_url(); ?>dropshipper/updatedropshipper" class="formDropshipper" method="POST">
    <div class="form-group mb-3">
        <input type="text" readonly value="<?php echo $dropshipper['nama_dropshipper']; ?>" class="form-control" name="namadropshipper" placeholder="Nama Dropshipper">
    </div>
    <div class="form-group mb-3">
        <input type="text" readonly value="<?php echo $dropshipper['kode_dropshipper']; ?>" class="form-control" name="kodedropshipper" placeholder="Kode Dropshipper">
    </div>
    <div class="form-group mb-3">
        <input type="text" value="<?php echo $dropshipper['alamat_dropshipper']; ?>" class="form-control" name="alamatdropshipper" placeholder="Alamat Dropshipper">
    </div>
    <div class="form-group mb-3">
        <input type="text" value="<?php echo $dropshipper['telepon']; ?>" class="form-control" name="notelepon" placeholder="No Telepon">
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
        $('.formDropshipper').bootstrapValidator({
            fields: {
                namadropshipper: {
                    message: 'Nama Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Nama Harus Diisi !'
                        }
                    }
                },
                kodedropshipper: {
                    message: 'Kode Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Harus Diisi !'
                        }
                    }
                },
                alamatdropshipper: {
                    message: 'Alamat Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Alamat Harus Diisi !'
                        }
                    }
                },
                notelepon: {
                    message: 'No Telepon Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'No Telepon Harus Diisi !'
                        }
                    }
                },
            }
        });
    });
</script>