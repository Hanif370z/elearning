
<?= $this->extend('user/template/index'); ?>

<?= $this->section('menu'); ?>
      <li class="active">
         <a  href="<?= base_url();?>" ><i class="fa fa-home"></i><span>Dashboard</span></a>
      </li>
      
      <li>
         <a  href="<?= base_url();?>/user/materi-tugas"><i class="fa fa-folder"></i><span>Materi dan Tugas Kuliah</span></a>
         
      </li>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
      <div class="container-fluid">
         <div class="col-lg-12">
            <div class="iq-edit-list-data">
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                           <?php if(in_groups('mahasiswa')): ?>
                              <h4 class="card-title">Profil Mahasiswa</h4>
                              <?php else: ?>
                          
                              <h4 class="card-title">Profil Dosen</h4>
                              <?php endif; ?>
                           </div>
                        </div>
                        <div class="iq-card-body">
                        
                              <div class="form-group row align-items-center">
                                 <div class="col-md-12">
                                    <div class="profile-img-edit">
                                       <img class="profile-pic" src="<?= base_url();?>/assets/admin/img/foto_siswa/profile.png" alt="profile-pic">
                                    </div>
                                 </div>
                              </div>
                              <div class=" row align-items-center">
                                 <div class="form-group col-sm-6">
                                    <label for="fname">Nama Lengkap:</label>
                                    <input type="text" class="form-control" readonly id="fname" value="<?= user()->full_name;?>">
                                 </div>
                                 <?php if(in_groups('mahasiswa')): ?>
                                 <div class="form-group col-sm-6">
                                    <label for="lname">NIM:</label>
                                    <input type="text" class="form-control" readonly id="lname" value="<?= user()->username;?>">
                                 </div>
                                 <?php else: ?>
                                    <div class="form-group col-sm-6">
                                    <label for="lname">NIDN:</label>
                                    <input type="text" class="form-control" readonly id="lname" value="<?= user()->username;?>">
                                 </div>
                                 <?php endif; ?>
                                 
                              </div>
                              
                           
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Change Password</h4>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
<?= $this->endSection(); ?>