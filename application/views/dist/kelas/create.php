<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kelas</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Kelas</a></div>
              <div class="breadcrumb-item"><a href="#">Create</a></div>
              <!-- <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Create Kelas</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <label>Nama Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>tingkat</label>
                      <select class="form-control">
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jurusan</label>
                      <select class="form-control">
                        <option>TKJ</option>
                        <option>MM</option>
                        <option>RPL</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sub Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 container">
                            <a href="" class="btn btn-icon icon-left btn-success float-right"><i class="fas fa-check"></i> Create</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>