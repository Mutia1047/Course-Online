<?= $this->extend('Admin/layout/app') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('/page/admin');?>">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
      <a href="<?= base_url('admin/tambahpengguna');?>" class="btn btn-success mb-2">Tambah Pengguna</a>
        <!-- Main row -->
        <div class="row">
          
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Pengguna</th>
                            <th>Email</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($getUser as $u) { ?>
                                <tr>
                                    <th><?= $no; ?></th>
                                    <td><?= $u['nama']; ?></td>
                                    <td><?= $u['email']; ?></td>
                                    <td>
                                    <a href="<?= base_url('admin/edituser/'.$u['id']);?>" class="btn btn-success">
                                    Edit</a>
                                        <a href="<?= base_url('admin/hapususer/' . $u['id']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data user ?')" class="btn btn-danger">
                                            Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card -->
          </section>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?= $this->endSection('content') ?>