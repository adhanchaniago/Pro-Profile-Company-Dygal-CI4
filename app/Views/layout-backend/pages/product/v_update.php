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
                        <li class="breadcrumb-item"><a href="/admin/product"><?= $title; ?></a></li>
                        <li class="breadcrumb-item active">Tambah Data <?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data <?= $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('admin/product/update') ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaCategory">Nama Category</label>
                                        <select required class="form-control" name="namaCategory" id="namaCategory">
                                            <option value="">Choose</option>
                                            <?php foreach ($categorys as $no => $row) : ?>
                                                <option value="<?= $row->category_id ?>"><?= $row->category_nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <script>
                                            document.getElementById('namaCategory').value = <?= $products->category_id ?>
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Product</label>
                                        <input value="<?= $products->products_id ?>" type="hidden" name="id">
                                        <input value="<?= $products->product_foto ?>" type="hidden" name="oldFoto">
                                        <input value="<?= $products->product_nama ?>" type="text" class="form-control" id="nama" name="nama" placeholder="Nama Product" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaProduct">Deskripsi</label>
                                        <textarea name="desc" id="textarea" class="textarea"><?= $products->product_desc ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input value="<?= $products->product_harga ?>" type="number" class="form-control" id="harga" name="harga" placeholder="Harga Boleh di Kosongkang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaProduct">Spesifikasi</label>
                                        <textarea name="spec" id="textarea" class="textarea"><?= $products->product_spec ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->