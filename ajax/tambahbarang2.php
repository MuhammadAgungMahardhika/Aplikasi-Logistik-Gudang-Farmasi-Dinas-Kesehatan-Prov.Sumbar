<?php  
include '../connect.php';
 $id_barang = $_GET['id_barang'];

$result = mysqli_query($conn,"SELECT * FROM detail_barang_masuk WHERE id_barang = '$id_barang' ");
 ?>
                        <span class="input-group-text" style="width: 9rem;">No masuk</span>
                                              <select name="id_masuk" class="form-control" id="id_masuk_js" required="">
                                               <?php 
                       
                          while ($row = mysqli_fetch_assoc($result)) {
                            $id_masuk= $row['id_masuk'];
                            $stok = $row['stok'];
                            $batch = $row['no_batch'];
                         
                                                ?>

            <option value="<?=$id_masuk; ?>"><?=$id_masuk; ?> Batch (<?=$batch; ?>) stok (<?= $stok; ?>)
                                                </option>

                                                <?php 
                                                }
                                                ?>
                                           </select>  