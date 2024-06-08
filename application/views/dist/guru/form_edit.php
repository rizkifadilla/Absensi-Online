<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Guru</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Guru</a></div>
              <div class="breadcrumb-item"><a href="#">Edit</a></div>
              <!-- <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Create Guru</h4>
                </div>
                <?php foreach ($guru->result() as $row ) :?>
                <div class="card-body">
                <form method="post" action="<?php echo base_url().'GuruController/update'; ?>" class="form-group mt-4 mb-4">
                  <div class="form-group">
                  <!-- <input hidden type="text" class="form-control" name="id_guru" value="<?php echo $row->id_guru; ?>"> -->
                    <label>NIP</label>
                    <input readonly type="text" class="form-control" name="id_guru" value="<?php echo $row->id_guru; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>">
                  </div>
                  <div class="row mb-2">
                  <div class="col-md-8"></div>
                    <div class="col-md-4 container">
                      <button class="btn btn-icon icon-left btn-success float-right" type="submit"><i class="fas fa-check"></i> Create</button>
                    </div>
                  </div>
                </form>
                </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>