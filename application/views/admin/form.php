<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3 style="font-weight: bold; ">Tambah Menu Baru</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb" >Form Menu</h4>
                      <form class="form-horizontal style-form" method="POST" action="<?php echo base_url(); ?>index.php/admin/do_insert" enctype="multipart/form-data" >
                          
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="id" value="<?php $id ?>">
                              </div>
                          </div> 


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="nama_menu" value="<?php $nama_menu ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Menu </label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="harga_menu" value="<?php $harga_menu ?>">
                              </div>
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-6"><?php echo form_upload('pic'); ?>
                              </div>
                          </div>

                          <div class="form-group hidden-phone">
                              <label class="col-sm-2 col-sm-2 control-label" for="textarea2">Deskripsi Menu</label>
                              <div class="col-sm-6">
                              <textarea class="form-control" name="deskripsi_menu" value="<?php $deskripsi_menu ?>" row="4" ></textarea>
                              </div>
                          </div>
                          <div class="form-actions">
                          <button class="btn btn-primary" name="submit"  type="Submit">Add Menu</button>
                          <button type="reset" class="btn">Cancel</button>
                        </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->

          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->