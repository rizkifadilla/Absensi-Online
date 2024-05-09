<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile Sekolah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Profile Sekolah</a></div>
              <div class="breadcrumb-item"><a href="#">Create</a></div>
              <!-- <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Profile Sekolah</h4>
                </div>
                <div class="card-body">
                <div class="form-group">
                      <label>Id Sekolah</label>
                      <input type="text" class="form-control" readonly value="<?= $sekolah->id_sekolah ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Sekolah</label>
                      <input type="text" class="form-control" value="<?= $sekolah->nama_sekolah ?>">
                    </div>
                    <div class="form-group">
                      <label>Alamat Sekolah</label>
                      <input type="text" class="form-control" value="<?= $sekolah->alamat_sekolah ?>">
                    </div>
                    <div class="form-group">
                      <label>Lokasi Lat</label>
                      <input type="text" class="form-control" value="<?= $sekolah->lokasi_lat ?>">
                    </div>
                    <div class="form-group">
                      <label>Lokasi Long</label>
                      <input type="text" class="form-control" value="<?= $sekolah->lokasi_long ?>">
                    </div>
                    <div class="form-group">
                      <label>Jarak</label>
                      <input type="text" class="form-control" value="<?= $sekolah->jarak ?>">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 container">
                            <a href="" class="btn btn-icon icon-left btn-warning float-right"><i class="fas fa-check"></i> Update</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>