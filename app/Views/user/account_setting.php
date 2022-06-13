<?= $this->extend('user/template/index'); ?>
<?= $this->section('menu'); ?>
      <li >
         <a  href="<?= base_url();?>" ><i class="fa fa-home"></i><span>Dashboard</span></a>
      </li>
      
      <li>
         <a  href="<?= base_url();?>/user/materi-tugas"><i class="fa fa-folder"></i><span>Materi dan Tugas Kuliah</span></a>
         
      </li>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-md-3 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Informasi Pribadi
                                 </a>
                              </li>
                              <li class="col-md-3 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Ubah Password
                                 </a>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-edit-list-data">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Informasi Pribadi</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form enctype="multipart/form-data" method="post" action="update_pw.php">
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="profile-img-edit">
                                          
                                             <img class="profile-pic" src="<?= base_url();?>/assets/admin/img/foto_siswa/profile.png" alt="profile-pic">
                                             <div class="p-image">
                                               <i class="ri-pencil-line upload-button"></i>
                                               <input type="hidden" name="siswaImage" value="<?= base_url();?>/assets/admin/img/foto_siswa/profile.png">
                                               <input class="file-upload" name="gambar" type="file" accept="image/*"/>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">Nama Lengkap:</label>
                                          <input type="text" class="form-control" id="fname" readonly value="<?= user()->full_name;?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="lname">NIDN:</label>
                                          <input type="text" class="form-control" id="lname" readonly value="<?= user()->username;?>">
                                       </div>
                                      
                                    </div>
                                    <button type="submit" name="submit_image" class="btn btn-primary mr-2">Submit</button>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Ubah Password</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form role="form" method="post" action="update.php">
                                    
                                    <div class="form-group">
                                       <label>Buat Password Baru:</label>
                                       <input type="hidden" name="siswa" value="<?php echo $data_terlogin['id_siswa'];?>">
                                          <input type="Password" name="pw" class="form-control" id="myInput" >
                                         
                                          
                                    </div>
                                    <button type="submit" name="change" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
<?= $this->endSection(); ?>