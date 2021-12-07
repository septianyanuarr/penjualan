<form action="<?php echo base_url(); ?>barang/simpanharga" class="formHarga" method="POST">
    <div class="form-group mb-3">
        <input type="text" readonly class="form-control" name="kodeharga" id="kodeharga" placeholder="Kode Harga">
    </div>
    <div class="form-group mb-3">
        <select name="kodebarang" id="kodebarang" class="form-select">
            <option value="">Pilih Barang</option>
            <?php foreach ($barang as $b) { ?>
                <option value="<?php echo $b->kode_barang; ?>"><?php echo $b->kode_barang . " - " . $b->nama_barang; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-3">
        <input type="text" id="harga" class=" form-control" name="harga" placeholder="Harga">
    </div>
    <div class="form-group mb-3">
        <input type="text" id="stok" class=" form-control" name="stok" placeholder="Stok">
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
        $('.formHarga').bootstrapValidator({
            fields: {
                kodebarang: {
                    message: 'Kode Barang Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Barang Harus Diisi !'
                        }
                    }
                },

                harga: {
                    message: 'Harga Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Harga Harus Diisi !'
                        }
                    }
                },
                stok: {
                    message: 'Stok Tidak Valid !',
                    validators: {
                        notEmpty: {
                            message: 'Stok Harus Diisi !'
                        }
                    }
                },
            }
        });

        function loadkodeharga() {
            var kodebarang = $("#kodebarang").val();
            var kodedropshipper = $("#dropshipper").val();
            var kodeharga = kodebarang;
            $("#kodeharga").val(kodeharga);


        }

        $("#kodebarang").change(function() {
            loadkodeharga();
        });
    });
</script>