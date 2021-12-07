<form action="<?php echo base_url(); ?>barang/updatebarang" class="formBarang" method="POST">
    <div class="form-group mb-3">
        <input type="text" readonly value="<?php echo $barang['kode_barang']; ?> " class="form-control" name="kodebarang" placeholder="Kode Barang">
    </div>
    <div class="form-group mb-3">
        <input type="text" value="<?php echo $barang['nama_barang']; ?>" class=" form-control" name="namabarang" placeholder="Nama Barang">
    </div>
    <div class="form-group mb-3">
        <input type="text" value="<?php echo $barang['ukuran']; ?>" class=" form-control" name="ukuran" placeholder="Ukuran">
    </div>
    <div class="form-group mb-3">
        <select name="satuan" class="form-select">
            <option value="">Satuan</option>
            <option <?php if ($barang['satuan'] == "Pcs") {
                        echo "selected";
                    } ?> value="Pcs">Pcs</option>
            <option <?php if ($barang['satuan'] == "Lusin") {
                        echo "selected";
                    } ?> value="Lusin">Lusin</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="10" y1="14" x2="21" y2="3" />
                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
            </svg>
            Update
        </button>
    </div>
</form>

<script>
    $(function() {
        $('.formBarang').bootstrapValidator({
            fields: {
                kodebarang: {
                    message: 'Kode Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Harus Diisi !'
                        }
                    }
                },
                namabarang: {
                    message: 'Nama Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Nama Harus Diisi !'
                        }
                    }
                },
                ukuran: {
                    message: 'Ukuran Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Ukuran Harus Diisi !'
                        }
                    }
                },
                satuan: {
                    message: 'Satuan Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Satuan Harus Diisi !'
                        }
                    }
                },
            }
        });
    });
</script>