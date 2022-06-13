<?= $this->extend('user/template/index'); ?>
<?= $this->section('menu'); ?>
      <li >
         <a  href="<?= base_url();?>" ><i class="fa fa-home"></i><span>Dashboard</span></a>
      </li>
      
      <li class="active">
         <a  href="<?= base_url();?>/user/materi-tugas"><i class="fa fa-folder"></i><span>Materi dan Tugas Kuliah</span></a>
         
      </li>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="iq-edit-list">
                              <ul class="iq-edit-profile d-flex nav nav-pills">
                                 <li class="col-md-2 p-0">
                                    <a class="nav-link active" data-toggle="tab" href="#pertemuan-1 ">
                                       <i class="fa fa-book"></i> Materi
                                    </a>
                                 </li>
                                 
                                 <li class="col-md-2 p-0">
                                    <a class="nav-link" data-toggle="tab" href="#tugas">
                                       <i class="fa fa-graduation-cap"></i> TUGAS
                                    </a>
                                    
                                 </li>
                                 <?php if(in_groups('dosen')): ?>
                                 <li class="col-md-2 p-0">
                                    <a class="nav-link" data-toggle="tab" href="#tugas_kumpul">
                                       <i class="fa fa-graduation-cap"></i> TUGAS TERKUMPUL
                                    </a>

                                 </li>
                                 <?php endif; ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                        <div class="tab-pane fade active show" id="pertemuan-1" role="tabpanel">
                        <?php if(in_groups('dosen')): ?>
                        <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title"><b>UPLOAD MATERI</b></h4>
                                    </div>
                                 </div>
                                 
                                 <div class="iq-card-body">
                                    <form method="post" enctype="multipart/form-data" action="proses_unggah.php">
                                    <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label >Pertemuan  :</label>
                                             <select name="pertemuan" class="form-control mb-3">
                                                <option selected="">-- Pilih Pertemuan --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label >Deskripsi Materi  :</label>
                                             <input type="text" name="deskripsi" class="form-control" >
                                          </div>
                                          
                                          
                                          <div class="form-group col-sm-6">
                                          <label>Upload File:</label>
                                             <div class="custom-file"> 
                                                <input type="file" name="data_upload" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                             </div>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label >Upload Link Youtube  :</label>
                                             <input type="text" name="link" class="form-control" >
                                          </div>
                                          
                                       </div>
                                       
                                    
                                       
                                       <button type="submit" name="btnUpload" class="btn btn-primary mr-2">Upload</button>
                                       
                                    </form>
                                    
                                 </div>
                              </div>
                              <?php endif; ?>
                              <div class="table-responsive">

                                   
                                 <table class="table table-striped table-bordered">
                                    <thead class="thead-dark" >
                                       
                                       <tr>
                                          <th scope="col">No.</th>
                                          
                                          <th scope="col">Pertemuan</th>
                                          <th scope="col">Deskripsi Materi</th>
                                          
                                          <th scope="col">Tanggal Upload</th>
                                          <th scope="col">Link Materi</th>
                                          <th scope="col">Aksi</th>
                                                   
                                       </tr>
                                    </thead>
                                    <tbody>
                                   
                         

                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           
                           <div class="tab-pane fade" id="tugas" role="tabpanel">
                           <?php if(in_groups('dosen')): ?>
                           <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title"><b>UPLOAD TUGAS</b></h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form method="post" enctype="multipart/form-data" action="upload_tugas.php">
                                       
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label >Pertemuan  :</label>
                                             <select name="pert" class="form-control mb-3">
                                                <option selected="">-- Pilih Pertemuan --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label >Deskripsi Tugas  :</label>
                                             <input type="text" name="desc" class="form-control" id="lname" >
                                          </div>
                                          <div class="form-group col-sm-6">
                                             
                                             <label for="exampleInputdatetime">Mulai</label>
                                             <input type="datetime-local" name="date_start" class="form-control" id="exampleInputdatetime" value="0000-00-00T00:00:00">
                                          
                                          </div>
                                          <div class="form-group col-sm-6">
                                             
                                             <label for="exampleInputdatetime">selesai</label>
                                             <input type="datetime-local" name="date_finish" class="form-control" id="exampleInputdatetime" value="0000-00-00T00:00:00">
                                          
                                          </div>
                                          
                                          <div class="form-group col-sm-6">
                                          <label for="uname">Upload:</label>
                                             <div class="custom-file"> 
                                                <input type="file" name="file_tugas" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       
                                       <button type="submit" name="btnTugas" class="btn btn-primary mr-2">Upload</button>
                                      
                                    </form>
                                    
                                 </div>
                              </div>
                              <?php endif; ?>
                              <div class="table-responsive">
                                 <table class="table table-striped table-bordered">
                                    <thead class="thead-dark" >
                                       <tr>
                                          <th scope="col">No.</th>
                                          <th scope="col">Pertemuan</th>
                                          <th scope="col">Deskripsi Tugas</th>
                                          <th scope="col">Tanggal Upload</th>
                                          <th scope="col">Mulai</th>
                                          <th scope="col">Selesai</th>
                                          <th scope="col">Link Tugas</th>
                                          <th scope="col">Aksi</th>
                                                   
                                       </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                 </table>
                              </div>
                           </div>

                           <?php if(in_groups('dosen')): ?>
                           <div class="tab-pane fade" id="tugas_kumpul" role="tabpanel">
                           <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title"><b>TUGAS TERKUMPUL</b></h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form method="post"  action="">
                                       
                                       <center><div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label >Pertemuan  :</label>
                                             <select name="pert" class="form-control mb-3">
                                                <option selected="">-- Pilih Pertemuan --</option>
                                                
                                                <option value=""></option>
                                            
                                                
                                             </select>
                                          </div>
                                          <button type="submit" name="lihat" class="btn btn-primary mr-2">Lihat</button>
                                          
                                       </div>
                                       
                                       </center>
                                      
                                    </form>
                                 </div>
                              </div> 
                             
                              <div class="table-responsive"  >
                              
                                 <table class="table table-striped table-bordered">
                                    <thead class="thead-dark" >
                                       <tr>
                                          <th scope="col">No.</th>
                                          <th scope="col">Pertemuan</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Nim</th>
                                          <th scope="col">Deskripsi Tugas</th>
                                          <th scope="col">Tanggal Mengumpulkan</th>
                                          <th scope="col">Link Tugas</th>
                                          <th scope="col">Status</th>
                                         
                                                   
                                       </tr>
                                    </thead>
                                    <tbody>
                                    
                                     
                                     
                                      
                                    </tbody>
                                 </table>
                                
                              </div>
                             
                           </div>
                           <?php endif; ?>
                           
                           
                        
                           
                           
                           
                        </div>
                        
                     </div>
                  </div>
<?= $this->endSection(); ?>