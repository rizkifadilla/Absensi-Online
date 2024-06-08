<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Orang Tua</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Orang Tua</a></div>
              <div class="breadcrumb-item"><a href="#">Create</a></div>
              <!-- <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Create Orang Tua</h4>
                  </div>
                <div class="card-body">
                  <form method="post" action="<?php echo base_url().'OrangTuaController/save'; ?>" class="form-group mt-4">
                    <div class="form-group">
                      <label>ID Orangtua</label>
                      <input type="text" class="form-control" name="id_orang_tua">
                    </div>
                    <div class="form-group">
                      <label>Nama Orangtua</label>
                      <input type="text" class="form-control" name="nama_orang_tua">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <label>No Telepon</label>
                      <input type="number" class="form-control" name="nomor_telepon">
                    </div>
                    
                    <div class="row mb-2">
                      <div class="col-md-8"></div>
                      <div class="col-md-4 container">
                        <button class="btn btn-icon icon-left btn-success float-right" type="submit"><i class="fas fa-check"></i> Create</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>