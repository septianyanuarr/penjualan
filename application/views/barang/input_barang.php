<form action="<?php echo base_url(); ?>barang/simpanbarang" class="formBarang" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="kodebarang" placeholder="Kode Barang">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="namabarang" placeholder="Nama Barang">
    </div>
    <div class="form-group mb-3">
        <select name="ukuran" class="form-select">
            <option value="">Ukuran</option>
            <option value="36">36</option>
            <option value="36,5">36,5</option>
            <option value="37">37</option>
            <option value="37,5">37,5</option>
            <option value="38">38</option>
            <option value="38,5">38,5</option>
            <option value="39">39</option>
            <option value="39,5">39,5</option>
            <option value="40">40</option>
            <option value="40,5">40,5</option>
            <option value="41">41</option>
            <option value="41,5">41,5</option>
            <option value="42">42</option>
            <option value="42,5">42,5</option>
            <option value="43">43</option>
            <option value="43,5">43,5</option>
            <option value="44">44</option>
            <option value="44,5">44,5</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <select name="satuan" class="form-select">
            <option value="">Satuan</option>
            <option value="Pcs">Pcs</option>
            <option value="Lusin">Lusin</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="10" y1="14" x2="21" y2="3" />
                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
            </svg>
            simpan
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