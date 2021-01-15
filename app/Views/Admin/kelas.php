<?= $this->extend('Admin/layout/app') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kelas</h1>
            <a class="btn btn-primary m-3" href="<?php echo base_url('/admin/tamkelas'); ?>">Kelas Baru</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/page/admin">Home</a></li>
              <li class="breadcrumb-item active">Kelas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
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
                            <th>Kategori</th>
                            <th>Nama Kelas</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($getKelas as $k) { ?>
                                <tr>
                                    <th><?= $no; ?></th>
                                    <td><?= $k['kategori']; ?></td>
                                    <td><?= $k['nama_kelas']; ?></td>
                                    <td><?= $k['harga']; ?></td>
                                    <td><img src="/img/<?= $k['gambar']; ?>" width="130" height="130"></td>
                                    <td>
                                    <a href="<?= base_url('admin/tamkelas/'. $k['id_kelas']);?>" class="btn btn-success">
                                    Edit</a>
                                        <a href="<?= base_url('admin/hapuskelas/' . $k['id_kelas']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data user ?')" class="btn btn-danger">
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