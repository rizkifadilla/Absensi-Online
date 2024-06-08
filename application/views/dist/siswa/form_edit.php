<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Siswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Siswa</a></div>
              <div class="breadcrumb-item"><a href="#">Edit</a></div>
              <!-- <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Create Siswa</h4>
                </div>
                <div class="card-body">
                <?php foreach ($gabung as $a ): ?>
                  <form method="post" action="<?php echo base_url().'SiswaController/update'; ?>" class="form-group mt-4">
                    <div class="form-group">
                      <label>NIS</label>
                      <input readonly type="text" class="form-control" name="id_siswa" value="<?php echo $a->id_siswa; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" class="form-control" name="nama_siswa" value="<?php echo $a->nama_siswa; ?>">
                    </div>
                    <div class="form-group">
                      <label>Id Orangtua</label>
                      <input readonly type="text" class="form-control" name="id_orang_tua" value="<?php echo $a->id_orang_tua; ?>">
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <input readonly type="text" class="form-control" name="id_kelas" value="<?php echo $a->id_kelas; ?>">
                    </div>
                    <div class="form-group">
                      <label>NISN</label>
                      <input type="text" class="form-control" name="nisn" value="<?php echo $a->nisn; ?>">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 container">
                        <button class="btn btn-icon icon-left btn-success float-right" type="submit"><i class="fas fa-check"></i> Create</button>
                        </div>
                    </div>
                  </form>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>