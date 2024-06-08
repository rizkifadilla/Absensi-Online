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
              <!-- <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div> -->
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Guru</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 container">
                            <a href="<?php echo base_url(); ?>GuruController/create" class="btn btn-icon icon-left btn-success float-right"><i class="fas fa-check"></i> Create</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th>Id Guru</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($guru as $a) { ?>
                            <tr>
                            <td><?= $a['id_guru']; ?></td>
                            <td><?= $a['id_guru']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td>
                                <a href="<?php echo base_url('GuruController/edit/'.$a['id_guru']); ?>" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                <a href="<?php echo base_url('GuruController/hapus/'.$a['id_guru']); ?>" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>