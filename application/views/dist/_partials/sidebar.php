<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Absensi Online</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">Ao</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Master</li>
            <li class="<?php echo $this->uri->segment(1) == 'SekolahController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>SekolahController"><i class="fas fa-school"></i> <span>Profile Sekolah</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'KelasController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>KelasController"><i class="fa fa-list ml-1"></i> <span>Kelas</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'SiswaController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>SiswaController"><i class="fa fa-list ml-1"></i> <span>Siswa</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'OrangTuaController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>OrangTuaController"><i class="fa fa-list ml-1"></i> <span>Orang Tua</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'GuruController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>GuruController"><i class="fa fa-list ml-1"></i> <span>Guru</span></a></li>
            <li class="menu-header">Absen</li>
            <li class="<?php echo $this->uri->segment(1) == 'ReportAbsenController' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>ReportAbsenController"><i class="fa fa-list ml-1"></i> <span>Report Absen</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/blank"><i class="fa fa-list ml-1"></i> <span>Data Izin Siswa</span></a></li>
            <li class="menu-header">User</li>
            <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/blank"><i class="fa fa-list ml-1"></i> <span>Profile</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url();?>login" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-door-open"></i> Log Out
            </a>
          </div>
        </aside>
      </div>
