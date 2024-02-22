<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url(''); ?>">Profile</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Profile</h4>
                        <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" data-target="#basicModal">Add</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message'); ?>
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        <th>Name</th>
                                        <th>E-mail Address</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1;
                                        foreach ($data as $d) { ?>
                                            <td><?= $no++ ?></td>
                                            <td><?= $d['name'] ?></td>
                                            <td><?= $d['email'] ?></td>
                                            <td><?= $d['phone'] ?></td>
                                            <td><?= $d['address'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="" class="mr-4" data-target="#UpdateData<?= $d['id']; ?>" data-toggle="modal"><i class="fa fa-pencil color-muted"></i></a>
                                                    <a href="<?php echo base_url() . 'admin/hapus_data/' . $d['id'] ?>" onClick='return confirm("Apakah anda yakin ingin menghapus data ini?")' data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
                                                </span>
                                            </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bootstrap-modal">
    <!-- Modal -->
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Profile</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?= base_url(); ?>admin/tambah_data" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>E-mail address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php foreach ($data1 as $p) { ?>
    <div class="bootstrap-modal">
        <!-- Modal -->
        <div class="modal fade" id="UpdateData<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit UKM</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="<?= base_url(); ?>admin/edit_data" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Name</label>
                                        <input type="hidden" value="<?= $p['id'] ?>" name="id">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $p['name'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>E-mail Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $p['email'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Phone Number</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?= $p['phone'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="<?= $p['address'] ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>