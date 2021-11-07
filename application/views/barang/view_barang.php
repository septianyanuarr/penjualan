<h2 class="page-title">
    Data Barang
</h2>

<style>
    .table thead th {
        background: #232e3c;
        font-size: 0.625rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #ffffff;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-success mb-3" id="tambahbarang">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Data
                </a>
                <div class="mb-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>Ukuran</th>
                            <th>SATUAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $b) {
                        ?>
                            <tr>
                                <td> <?php echo $no; ?></td>
                                <td> <?php echo $b->kode_barang; ?></td>
                                <td> <?php echo $b->nama_barang; ?></td>
                                <td> <?php echo $b->ukuran; ?></td>
                                <td> <?php echo $b->satuan; ?></td>
                                <td>
                                    <a href="#" data-kodebarang="<?php echo $b->kode_barang; ?>" class="btn btn-sm btn-primary edit">
                                        <li class="far fa-edit"></li>

                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <li class="far fa-trash-alt"></li>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal modal-blur fade" id="modalbarang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputbarang"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modaleditbarang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditbarang"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#tambahbarang").click(function() {
            $("#modalbarang").modal("show");
            $("#loadforminputbarang").load("<?php echo base_url(); ?>barang/inputbarang");
        });
        $("#edit").click(function() {
            $("#modaleditbarang").modal("show");
        });
    });
</script>