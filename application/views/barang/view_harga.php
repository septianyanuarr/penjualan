<h2 class="page-title">
    Data Harga
</h2>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-success mb-3" id="tambahharga">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Data
                </a>
                <div class="mb-3 col-md-5"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tabelharga">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE HARGA</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>Ukuran</th>
                            <th>SATUAN</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($harga as $h) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $h->kode_harga; ?></td>
                                <td><?php echo $h->kode_barang; ?></td>
                                <td><?php echo $h->nama_barang; ?></td>
                                <td><?php echo $h->ukuran; ?></td>
                                <td><?php echo $h->satuan; ?></td>
                                <td align="right"><?php echo number_format($h->harga, '0', '', '.'); ?></td>
                                <td><?php echo $h->stok; ?></td>
                                <td>
                                    <a href="#" data-kodeharga="<?php echo $h->kode_harga; ?>" class="btn btn-sm btn-primary edit">
                                        <li class="far fa-edit"></li>

                                    </a>
                                    <a href="#" data-href="<?php echo base_url(); ?>barang/hapusharga/<?php echo $h->kode_harga; ?>" class="btn btn-sm btn-danger hapus">
                                        <li class="far fa-trash-alt"></li>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal modal-blur fade" id="modalharga" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Harga</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputharga"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modaleditharga" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Harga</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditharga"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapusharga" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <!-- SVG icon code with class="mb-2 text-danger icon-lg" -->
                <h3>Anda Yakin Hapus Data Ini</h3>
                <div class="text-muted">Jika Dihapus Anda Akan Kehilangan Data Ini</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Cancel</button>
                <a href="#" id="hapusharga" class="btn btn-danger">Yes, Delete</a>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    $(function() {
        $("#tambahharga").click(function() {
            $("#modalharga").modal("show");
            $("#loadforminputharga").load("<?php echo base_url(); ?>barang/inputharga");
        });
        $(".edit").click(function() {
            var kodeharga = $(this).attr("data-kodeharga");
            $("#modaleditharga").modal("show");
            $("#loadformeditharga").load("<?php echo base_url(); ?>barang/editharga/" + kodeharga);
        });
        $(".hapus").click(function() {
            var href = $(this).attr("data-href");
            $("#modalhapusharga").modal("show");
            $("#hapusharga").attr("href", href);
        });
        $('#tabelharga').DataTable();

    });
</script>