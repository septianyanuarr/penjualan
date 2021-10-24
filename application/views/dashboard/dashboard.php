<h2 class="page-title">
    Dashboard
</h2>
<div class="alert alert-success" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
    </svg>
    Selamat Data <b> <?php echo ucwords($this->session->userdata('nama_lengkap')); ?></b> Sebagai <b><?php echo ucwords($this->session->userdata('level')); ?></b>
</div>
<di class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
            <div class="card-body d-flex align-items-center">
                <span class="bg-red text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </span>
                <div class="mr-3">
                    <div class="font-weight-medium">
                        1,352 Pelanggan
                    </div>
                    <div class="text-muted">Data Pelanggan</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
            <div class="card-body d-flex align-items-center">
                <span class="bg-green text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="9" cy="19" r="2" />
                        <circle cx="17" cy="19" r="2" />
                        <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
                    </svg>
                </span>
                <div class="mr-3">
                    <div class="font-weight-medium">
                        132 Transaksi
                    </div>
                    <div class="text-muted">Transaksi Hari Ini </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
            <div class="card-body d-flex align-items-center">
                <span class="bg-blue text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                </span>
                <div class="mr-3">
                    <div class="font-weight-medium">
                        200 Dropshipper
                    </div>
                    <div class="text-muted">Data Dropshipper </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
            <div class="card-body d-flex align-items-center">
                <span class="bg-orange text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                        <path d="M12 3v3m0 12v3" />
                    </svg>
                </span>
                <div class="mr-3">
                    <div class="font-weight-medium">
                        1000.0000.000
                    </div>
                    <div class="text-muted">Pendapatan Hari Ini</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Grafik Penjualan </h3>
                </div>
                <div class="card-body">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    </div>