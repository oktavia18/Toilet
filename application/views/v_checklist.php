<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Checklist</h3>
                        </div>
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambahkan</button>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatables">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Date</th>
                                                    <th>Toilet Location</th>
                                                    <th>Kloset</th>
                                                    <th>Wastafel</th>
                                                    <th>Lantai</th>
                                                    <th>Dinding</th>
                                                    <th>Kaca</th>
                                                    <th>Bau</th>
                                                    <th>Sabun</th>
                                                    <th>Inspector</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach (
                                                    $checklist_data
                                                    as $checklist
                                                ) { ?>
                                                    <tr>
                                                        <td style="width: 10px"><?= $i ?></td>
                                                        <td><?= $checklist->tanggal ?></td>
                                                        <td><?= $checklist->toilet_lokasi ?></td>
                                                        <td>
                                                            <span class="badge <?= $checklist->kloset ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->kloset ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->kloset ==
                                                                1
                                                                    ? "Bersih"
                                                                    : ($checklist->kloset ==
                                                                    2
                                                                        ? "Kotor"
                                                                        : "Rusak") ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->wastafel ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->wastafel ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->wastafel ==
                                                                1
                                                                    ? "Bersih"
                                                                    : ($checklist->wastafel ==
                                                                    2
                                                                        ? "Kotor"
                                                                        : "Rusak") ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->lantai ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->lantai ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->lantai ==
                                                                1
                                                                    ? "Bersih"
                                                                    : ($checklist->lantai ==
                                                                    2
                                                                        ? "Kotor"
                                                                        : "Rusak") ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->dinding ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->dinding ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->dinding ==
                                                                1
                                                                    ? "Bersih"
                                                                    : ($checklist->dinding ==
                                                                    2
                                                                        ? "Kotor"
                                                                        : "Rusak") ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->kaca ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->kaca ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->kaca ==
                                                                1
                                                                    ? "Bersih"
                                                                    : ($checklist->kaca ==
                                                                    2
                                                                        ? "Kotor"
                                                                        : "Rusak") ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->bau ==
                                                            1
                                                                ? "badge-danger"
                                                                : "badge-success" ?>">
                                                                <?= $checklist->bau ==
                                                                1
                                                                    ? "Ya"
                                                                    : "Tidak" ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $checklist->sabun ==
                                                            1
                                                                ? "badge-success"
                                                                : ($checklist->sabun ==
                                                                2
                                                                    ? "badge-warning"
                                                                    : "badge-danger") ?>">
                                                                <?= $checklist->sabun ==
                                                                1
                                                                    ? "Ada"
                                                                    : ($checklist->sabun ==
                                                                    2
                                                                        ? "Habis"
                                                                        : "Hilang") ?>
                                                            </span>
                                                        </td>
                                                        <td><?= $checklist->user_name ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-view btn-sm" data-id="<?= $checklist->id ?>" data-tanggal="<?= $checklist->tanggal ?>" data-toilet_lokasi="<?= $checklist->toilet_lokasi ?>" data-kloset="<?= $checklist->kloset ?>" data-wastafel="<?= $checklist->wastafel ?>" data-lantai="<?= $checklist->lantai ?>" data-dinding="<?= $checklist->dinding ?>" data-kaca="<?= $checklist->kaca ?>" data-bau="<?= $checklist->bau ?>" data-sabun="<?= $checklist->sabun ?>" data-user_name="<?= $checklist->user_name ?>"><i class="fa fa-eye"></i></a>
                                                            <a href="#" class="btn btn-info btn-edit btn-sm" data-id="<?= $checklist->id ?>" data-tanggal="<?= $checklist->tanggal ?>" data-toilet_id="<?= $checklist->toilet_id ?>" data-kloset="<?= $checklist->kloset ?>" data-wastafel="<?= $checklist->wastafel ?>" data-lantai="<?= $checklist->lantai ?>" data-dinding="<?= $checklist->dinding ?>" data-kaca="<?= $checklist->kaca ?>" data-bau="<?= $checklist->bau ?>" data-sabun="<?= $checklist->sabun ?>" data-inspector_id="<?= $checklist->inspector_id ?>"><i class="fa fa-marker"></i></a>
                                                            <a href="#" class="btn btn-danger btn-delete btn-sm" data-id="<?= $checklist->id ?>"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $i++;}
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php if (
                                $this->session->userdata("role") == "admin"
                            ) { ?>
                                <a href="checklist/cetak_pdf" class="btn btn-info">Cetak Data: Semua Toilet</a>
                                <a href="checklist/cetak_pdf_belum_diperiksa" class="btn btn-primary">Cetak Data: Toilet Belum Diperiksa</a>
                                <a href="checklist/cetak_pdf_rusak" class="btn btn-success">Cetak Data: Toilet Rusak</a>
                                <a href="checklist/cetak_pdf_kotor" class="btn btn-secondary">Cetak Data: Toilet Kotor</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<form action="<?php echo base_url("checklist/save"); ?>" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Checklist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Toilet</label>
                            <select name="toilet_id" id="toilet_id" class="form-control" required>
                            <option value="">-- Pilih Toilet --</option>
                            <?php foreach ($toilet_data as $toilet): ?>
                            <option value="<?= $toilet->id ?>"><?= $toilet->lokasi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kloset</label>
                            <select name="kloset" id="kloset" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Wastafel</label>
                            <select name="wastafel" id="wastafel" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                            <select name="lantai" id="lantai" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dinding</label>
                            <select name="dinding" id="dinding" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kaca</label>
                            <select name="kaca" id="kaca" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bau</label>
                            <select name="bau" id="bau" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sabun</label>
                            <select name="sabun" id="sabun" class="form-control" required>
                            <option value="">-</option>
                            <option value="1">Ada</option>
                            <option value="2">Habis</option>
                            <option value="3">Hilang</option>
                        </select>
                    </div>
                    <?php if ($this->session->userdata("role") == "admin") { ?>
                        <div class="form-group">
                            <label>User</label>
                                <select name="inspector_id" id="inspector_id" class="form-control" required>
                                <option value="">-- Pilih Inspektur --</option>
                                <?php foreach (
                                    $inspector_data
                                    as $inspector
                                ): ?>
                                <option value="<?= $inspector->id ?>"><?= $inspector->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">Lihat Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control tanggal" readonly>
                </div>
                <div class="form-group">
                    <label>Toilet Location</label>
                    <input type="text" class="form-control toilet_lokasi" readonly>
                </div>
                <div class="form-group">
                    <label>Kloset</label>
                    <input type="text" class="form-control kloset" readonly>
                </div>
                <div class="form-group">
                    <label>Wastafel</label>
                    <input type="text" class="form-control wastafel" readonly>
                </div>
                <div class="form-group">
                    <label>Lantai</label>
                    <input type="text" class="form-control lantai" readonly>
                </div>
                <div class="form-group">
                    <label>Dinding</label>
                    <input type="text" class="form-control dinding" readonly>
                </div>
                <div class="form-group">
                    <label>Kaca</label>
                    <input type="text" class="form-control kaca" readonly>
                </div>
                <div class="form-group">
                    <label>Bau</label>
                    <input type="text" class="form-control bau" readonly>
                </div>
                <div class="form-group">
                    <label>Sabun</label>
                    <input type="text" class="form-control sabun" readonly>
                </div>
                <div class="form-group">
                    <label>Inspector</label>
                    <input type="text" class="form-control user_name" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Ubah Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(
                "checklist/update"
            ); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <div class="form-group">
                        <label>Toilet</label>
                        <select name="toilet_id" class="form-control toilet_id" required>
                            <option value="">-- Pilih Toilet --</option>
                            <?php foreach ($toilet_data as $toilet): ?>
                            <option value="<?= $toilet->id ?>"><?= $toilet->lokasi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kloset</label>
                        <select name="kloset" class="form-control kloset" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Wastafel</label>
                        <select name="wastafel" class="form-control wastafel" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <select name="lantai" class="form-control lantai" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dinding</label>
                        <select name="dinding" class="form-control dinding" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kaca</label>
                        <select name="kaca" class="form-control kaca" required>
                            <option value="">-</option>
                            <option value="1">Bersih</option>
                            <option value="2">Kotor</option>
                            <option value="3">Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bau</label>
                        <select name="bau" class="form-control bau" required>
                            <option value="">-</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sabun</label>
                        <select name="sabun" class="form-control sabun" required>
                            <option value="">-</option>
                            <option value="1">Ada</option>
                            <option value="2">Habis</option>
                            <option value="3">Hilang</option>
                        </select>
                    </div>
                    <?php if ($this->session->userdata("role") == "admin") { ?>
                        <div class="form-group">
                            <label>User</label>
                            <select name="inspector_id" class="form-control inspector_id" required>
                                <option value="">-- Pilih Inspektur --</option>
                                <?php foreach (
                                    $inspector_data
                                    as $inspector
                                ): ?>
                                <option value="<?= $inspector->id ?>"><?= $inspector->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(
                "checklist/delete"
            ); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <p>Apa anda yakin ingin menghapus data Checklist?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url(
    "templates/plugins/jquery/jquery.min.js"
); ?>"></script>
<script src="<?php echo base_url(
    "templates/plugins/bootstrap/js/bootstrap.bundle.min.js"
); ?>"></script>
<script>
    $(document).ready(function() {
        $('#datatables').DataTable({
            "responsive": true,
            "scrollX": true,
            "autoWidth": false
        });

        $('.btn-edit').on('click', function() {
            const id = $(this).data('id');
            const tanggal = $(this).data('tanggal');
            const toilet_id = $(this).data('toilet_id');
            const kloset = $(this).data('kloset');
            const wastafel = $(this).data('wastafel');
            const lantai = $(this).data('lantai');
            const dinding = $(this).data('dinding');
            const kaca = $(this).data('kaca');
            const bau = $(this).data('bau');
            const sabun = $(this).data('sabun');
            const inspector_id = $(this).data('inspector_id');
            $('.id').val(id);
            $('.tanggal').val(tanggal);
            $('.toilet_id').val(toilet_id);
            $('.kloset').val(kloset);
            $('.wastafel').val(wastafel);
            $('.lantai').val(lantai);
            $('.dinding').val(dinding);
            $('.kaca').val(kaca);
            $('.bau').val(bau);
            $('.sabun').val(sabun);
            $('.inspector_id').val(inspector_id);
            $('#editModal').modal('show');
        });

        $('.btn-view').on('click', function() {
            const id = $(this).data('id');
            const tanggal = $(this).data('tanggal');
            const toilet_lokasi = $(this).data('toilet_lokasi');
            const kloset = $(this).data('kloset');
            const wastafel = $(this).data('wastafel');
            const lantai = $(this).data('lantai');
            const dinding = $(this).data('dinding');
            const kaca = $(this).data('kaca');
            const bau = $(this).data('bau');
            const sabun = $(this).data('sabun');
            const user_name = $(this).data('user_name');
            $('.id').val(id);
            $('.tanggal').val(tanggal);
            $('.toilet_lokasi').val(toilet_lokasi);
            $('.kloset').val(kloset == 1 ? "Bersih" : (kloset== 2 ? "Kotor" : "Rusak"));
            $('.wastafel').val(wastafel == 1 ? "Bersih" : (wastafel == 2 ? "Kotor" : "Rusak"));
            $('.lantai').val(lantai == 1 ? "Bersih" : (lantai == 2 ? "Kotor" : "Rusak"));
            $('.dinding').val(dinding == 1 ? "Bersih" : (dinding == 2 ? "Kotor" : "Rusak"));
            $('.kaca').val(kaca == 1 ? "Bersih" : (kaca == 2 ? "Kotor" : "Rusak"));
            $('.bau').val(bau == 1 ? "Ya" : "Tidak");
            $('.sabun').val(sabun == 1 ? "Ada" : (sabun == 2 ? "Habis" : "Hilang"));
            $('.user_name').val(user_name);
            $('#viewModal').modal('show');
        });

        $('.btn-delete').on('click', function() {
            const id = $(this).data('id');
            $('.id').val(id);
            $('#deleteModal').modal('show');
        });
    });
</script>