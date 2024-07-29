
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="modal fade" id="modal-book" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Silahkan Isi Form</h4>
        </div>
        <form id="form-btn-save" class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="bnama" required>
                <input type="hidden" name="bdate" value="">
                <input type="hidden" name="bid_room" value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">No Telp</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="bno_telp" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Unit Kerja</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="bunit_kerja" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Agenda Rapat</label>
              <div class="col-sm-5">
                <textarea class="form-control" name="bagenda_rapat" required></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div class="modal fade" id="emodal-book" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Pembookingan</h4>
        </div>
        <form id="form-btn-update" class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="ebnama" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">No Telp</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="ebno_telp" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Unit Kerja</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="ebunit_kerja" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Agenda Rapat</label>
              <div class="col-sm-5">
                <textarea class="form-control" name="ebagenda_rapat" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Room</label>
              <div class="col-sm-5">
                <select name="eroom_list" class="form-control" required>
                    <option value="">- Pilih - </option>
                    <?php
                    $erl = mysql_query("select nama_room, id_room from room order by nama_room asc");
                    while ($errl = mysql_fetch_assoc($erl)) {
                      ?>
                      <option value="<?php echo $errl['id_room']; ?>"><?php echo $errl['nama_room']; ?></option>
                      <?php
                    }
                    ?> 
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Waktu Booking</label>
              <div class="col-sm-5">
                <input class="date" id="edatepicker" name="edatepicker" type="text" style="width: 230px" required readonly>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info"> 
        <div class="panel-heading">
          <h2><b>RESERVASI</b></h2>
        </div>
        <div class="panel-body">
          <div class="col-lg-12">
            <div class="col-lg-4">
              <img class='img-thumbnail' id="imgbr" style='width: 300px; height: 200px;' src='image/imgbg.png'>
            </div>
            <div class="col-lg-4" style="word-wrap:break-word">
              <font size="3em" face="Arial"><b>Detail :</b></font>
              <font size="3em" face="Arial" id="fdet"></font><br><br><br>
    
              <br><font size="3em" face="Arial"><b>Status :</b></font> <a href="#" class="btn btn-success hidden btn-tersedia">TERSEDIA</a>
            </div>

            <div class="col-lg-2 col-lg-push-1">
              <form id="form_cari">
                <div class="form-group">
                  <label>ROOM</label>
                  <select name="room_list" class="form-control" required>
                    <option value="">- Pilih - </option>
                    <?php
                    $rl = mysql_query("select nama_room, id_room from room order by nama_room asc");
                    while ($rrl = mysql_fetch_assoc($rl)) {
                      ?>
                      <option value="<?php echo $rrl['id_room']; ?>"><?php echo $rrl['nama_room']; ?></option>
                      <?php
                    }
                    ?> 
                  </select>
                </div>
                <div class="form-group">
                  <label>WAKTU BOOKING</label>
                  <input class="date" id="datepicker" name="datepicker" type="text" style="width: 230px" required readonly>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success" style="width: 70px;" value="CARI">
                </div>
              </form>
            </div>

          </div>

              
          
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger hidden btn-book">BOOKING SEKARANG</a>
            <input type="hidden" value="" id="hid-room">
          </div>
          <div class="col-lg-12" style="margin-top: 5%;">
            <table class="table table-hover table-striped" id="tbl-book">
              <thead>
                <th>No.</th>
                <th>Ruangan</th>
                <th>Reservasi</th>
                <th>Telp.</th>
                <th>Instansi</th>
                <th>Agenda</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th><center>Aksi</center></th>
              </thead>
              <tbody>
                <?php
                $sql = mysql_query("select r.nama_room, b.nama_pembooking, b.telp_pembooking, b.unit_kerja, b.agenda_rapat, b.tgl_booking, b.tgl_selesai, b.id_booking, b.status_room from room r join booking_room b on r.id_room = b.id_room order by b.id_booking desc");
                $i = 1;
                while ($row = mysql_fetch_assoc($sql)) {
                  ?>
                  <tr>
                    <td align="center"><?php echo $i++; ?></td>
                    <td><?php echo $row['nama_room']; ?></td>
                    <td><?php echo $row['nama_pembooking']; ?></td>
                    <td><?php echo $row['telp_pembooking']; ?></td>
                    <td><?php echo $row['unit_kerja']; ?></td>
                    <td><?php echo $row['agenda_rapat']; ?></td>
                    <td><?php echo date("d/m/Y H:i", strtotime($row['tgl_booking'])); ?></td>
                    <td><?php echo date("d/m/Y H:i", strtotime($row['tgl_selesai'])); ?></td>
                    <td align="center">
                      <?php
                      if ($row['status_room'] == '3') {
                        echo "CHECK-OUT";
                      } else {
                      ?>
                      <button class="btn btn-danger button_hapus_booking" name="<?php echo $row['id_booking'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><span class="glyphicon glyphicon-trash"></span></button>
                      <button class="btn btn-info button_edit_booking" name="<?php echo $row['id_booking'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="EDIT"><span class="glyphicon glyphicon-edit"></span></button>
                      <?php
                        switch ($row['status_room']) {
                          case '0':
                            ?>
                            <button class="btn btn-success konfirmasi" name="<?php echo $row['id_booking'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="KONFIRMASI"><span class="glyphicon glyphicon-ok"></span></button>
                            <?php
                            break;

                          case '1':
                            ?>
                            <button class="btn btn-warning cek_in" name="<?php echo $row['id_booking'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="CHECK-IN"><span class="glyphicon glyphicon-check"></span></button>
                            <?php
                            break;

                          case '2':
                            ?>
                            <button class="btn btn-danger cek_out" name="<?php echo $row['id_booking'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="CHECK-OUT"><span class="glyphicon glyphicon-share"></span></button>
                            <?php
                            break;
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.row (main row) -->
</section><!-- /.content -->