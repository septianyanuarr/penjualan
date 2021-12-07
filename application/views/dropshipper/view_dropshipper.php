<h2 class="page-title">
    Data Dropshipper
</h2>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-success mb-3" id="tambahdropshipper">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Data
                </a>
                <div class="mb-3 col-md-5"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tabeldropshipper">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA DROPSHIPPER</th>
                            <th>KODE DROPSHIPPER</th>
                            <th>ALAMAT</th>
                            <th>NO TELEPON</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($dropshipper as $d) {
                        ?>
                            <tr>
                                <td> <?php echo $no; ?></td>
                                <td> <?php echo $d->nama_dropshipper; ?></td>
                                <td> <?php echo $d->kode_dropshipper; ?></td>
                                <td> <?php echo $d->alamat_dropshipper; ?></td>
                                <td> <?php echo $d->telepon; ?></td>
                                <td>
                                    <a href="#" data-kodedropshipper="<?php echo $d->kode_dropshipper; ?>" class="btn btn-sm btn-primary edit">
                                        <li class="far fa-edit"></li>

                                    </a>
                                    <a href="#" data-href="<?php echo base_url(); ?>dropshipper/hapusdropshipper/<?php echo $d->kode_dropshipper; ?>" class="btn btn-sm btn-danger hapus">
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
<div class="modal modal-blur fade" id="modaldropshipper" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Dropshipper</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputdropshipper"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modaleditdropshipper" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Dropshipper</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditdropshipper"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapusdropshipper" tabindex="-1" role="dialog" aria-hidden="true">
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
                <a href="#" id="hapusdropshipper" class="btn btn-danger">Yes, Delete</a>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>




<script>
    $(function() {
        $("#tambahdropshipper").click(function() {
            $("#modaldropshipper").modal("show");
            $("#loadforminputdropshipper").load("<?php echo base_url(); ?>dropshipper/inputdropshipper");
        });
        $(".edit").click(function() {
            var kodedropshipper = $(this).attr("data-kodedropshipper");
            $("#modaleditdropshipper").modal("show");
            $("#loadformeditdropshipper").load("<?php echo base_url(); ?>dropshipper/editdropshipper/" + kodedropshipper); //controller dropshipper
        });
        $(".hapus").click(function() {
            var href = $(this).attr("data-href");
            $("#modalhapusdropshipper").modal("show");
            $("#hapusdropshipper").attr("href", href);
        });
        $('#tabeldropshipper').DataTable();

    });
</script>