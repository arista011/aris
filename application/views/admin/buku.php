<div class="main-panel"><br>
  <div class="content">
    <div class="col-xl-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header bg-dark">
            <div class="card-title text-white"><i class="fas fa-book-open text-white"></i> Data Buku</div>
          </div>
          <div class="card-body">
            <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-tambah-buku"><i class="fas fa-plus"></i> Tambah Buku</button>
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>No</th>
                      <th>Cover Buku</th>
                      <th>Judul Buku</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Status</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($buku as $b) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="100" alt="gambar tidak ada"></td>
                      <td><?php echo $b->judul_buku ?></td>
                      <td><?php echo $b->pengarang ?></td>
                      <td><?php echo $b->penerbit ?></td>
                      <td><?php if($b->status_buku == "1"){ echo "Tersedia"; } else if($b->status_buku == "0"){ echo "Sedang dipinjam"; } ?> </td>
                      <td nowrap="nowrap">
                        <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_buku/'.$b->id_buku; ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_buku/'.$b->id_buku; ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/pdf/'.$b->id_buku; ?>"><i class="fas fa-trash-alt"></i> View</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  <!-- Modal Tambah Buku -->
    <div class="modal fade modal-tambah-buku" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><i class="fas fa-book-open"> </i><b> Tambah Buku</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <form action="<?php echo base_url().'admin/tambah_buku_act' ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label><i class="fas fa-list text-dark"></i> Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option value="">--Pilih Kategori--</option>
                      <?php foreach ($kategori as $k) { ?>
                        <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-book text-dark"></i> Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" autocomplete="off">
                    <?php echo form_error('judul_buku'); ?>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-user text-dark"></i> Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-building text-dark"></i> Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-calendar-alt text-dark"></i> Tahun Terbit</label>
                    <input type="date" name="thn_terbit" class="form-control" placeholder="DD/MM/YYYY">
                  </div>
              </div>

                <div class="form-group">
                  <label><i class="fas fa-info-circle text-dark"></i> Status Buku</label>
                  <select name="status" class="form-control">
                    <option value="">--Pilih Status Buku--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Sedang dipinjam</option>
                  </select>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-image text-dark"></i> Gambar</label>
                  <input type="file" name="foto" class="form-control">
                </div>

                <!-- Perlu Edit Posisi Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Tambah Buku -->
<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2019, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">Fiqisulaiman</a>
        </div>
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->
