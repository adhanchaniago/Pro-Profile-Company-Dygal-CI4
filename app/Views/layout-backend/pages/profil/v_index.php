<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data <?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-sgalleryed">
                            <tbody>
                                <tr>
                                    <th width="10px">No</th>
                                    <th>Nama Contact</th>
                                    <th>Contact</th>
                                    <th width="50px">
                                        Action
                                    </th>
                                </tr>
                                <tr>
                                    <th width="10px">1</th>
                                    <th>Nama Perusahaan</th>
                                    <td><?= $profils->profil_nama ?></td>
                                    <th width="50px">
                                        <a href="<?= base_url('admin/profil/update/' . $profils->profil_id) ?>" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="10px">2</th>
                                    <th>Headline</th>
                                    <td><?= $profils->profil_headline ?></td>
                                    <th width="50px">
                                        <a href="<?= base_url('admin/profil/update/' . $profils->profil_id) ?>" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="10px">3</th>
                                    <th>Profil Perusahaan</th>
                                    <td><?= $profils->profil_tentang ?></td>
                                    <th width="50px">
                                        <a href="<?= base_url('admin/profil/update/' . $profils->profil_id) ?>" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->