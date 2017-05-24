 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Daftar Menu BALENI</h3>
        <div class="row">
        
        <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Id </th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama Menu</th>
                                  <th><i class="fa fa-bookmark"></i> Harga</th>
                                  <th><i class="fa fa-bookmark"></i> Deskripsi</th>
                                  <th><i class="fa fa-bookmark"></i> Gambar</th>
                                  <th><i class=" fa fa-edit"></i> Edit</th>
                                  <th></th>
                              </tr>
                              </thead>

                              <?php 
                                if (is_array($data)) {
                                  foreach ($data as $d ) {
                                    
                                  ?> 
                              <tbody>
                              <tr>
                                  <td><?php echo $d['id']; ?></td>
                                  <td class="hidden-phone"><?php echo $d['nama_menu']; ?></td>
                                  <td><?php echo $d['harga_menu']; ?></td>
                                  <td><?php echo $d['deskripsi_menu']; ?></td>
                                  <td style="text-align:center" style="width:50%;"><img src=<?php echo base_url($d['gambar']); ?> style="height:100px;"></td>

                                  <td align="center">
                                      <button id="<?php echo "pencil".$d['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button id="<?php echo "trash".$d['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>     

                                      <script type="text/javascript">
                                        document.getElementById("<?php echo "pencil".$d['id']; ?>").onclick = function() {location.href = "<?php echo base_url()."index.php/Admin/edit_data/".$d['id']; ?>" };
                                       </script> 

                                       <script type="text/javascript">
                                        document.getElementById("<?php echo "trash".$d['id']; ?>").onclick = function() {location.href = "<?php echo base_url()."index.php/Admin/do_delete/".$d['id']; ?>" };
                                       </script> 
                                  </td>
                              </tr>
                              </tbody>
                              <?php }} ?>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->    
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->