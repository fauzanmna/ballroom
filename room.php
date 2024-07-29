<!-- Content Header (Page header) -->
<section class="content-header">
<!--           <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol> -->
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info"> 
        <div class="panel-heading"><h3><?php echo isset($_GET['e'])? 'EDIT ROOM':'INPUT ROOM' ; ?></h3></div>
        <div class="panel-body">
          <?php
          if(!isset($_GET['e'])){
          ?>
          <form class="form-horizontal" method="post" action="proses.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Nama Room</label>
              <div class="col-sm-4">
                <input type="input" class="form-control" id="nroom" name="nroom" placeholder="Nama Room" pattern="[a-zA-Z0-9 ]{3,}" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Detail Room</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="droom" name="droom" required></textarea> 
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Kapasitas Room</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="kroom" name="kroom" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Foto Room</label>
              <div class="col-sm-4">
                <input type="file" class="" id="froom" name="froom" style="padding-top: 5px;">
                <font size="2px" color="red">Max Ukuran Foto 5 mb</font>
              </div>
            </div>
            <div class="form-group" style="padding-left: 28%;">
              <input type="submit" value="SIMPAN" class="btn btn-info">
              <input type="reset" value="RESET" class="btn btn-warning">
            </div>
          </form>
          <?php
          } else {
            $id = $_GET['e'];
            $edit = mysql_query("select * from room where id_room = '$id'");
            $data = array();
            while ($redit = mysql_fetch_assoc($edit)) {
              $data = $redit;
            }
          ?>
          <form class="form-horizontal" method="post" action="proses.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Edit Nama Room</label>
              <div class="col-sm-4">
                <input type="hidden" name="eid" value="<?php echo $id; ?>">
                <input type="input" class="form-control" id="enroom" name="enroom" placeholder="Edit Nama Room" pattern="[a-zA-Z0-9 ]{3,}" value="<?php echo $data['nama_room']; ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Edit Detail Room</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="edroom" name="edroom" required><?php echo $data['detail_room']; ?></textarea> 
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Edit Kapasitas Room</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="ekroom" name="ekroom" value="<?php echo $data['kapasitas_room']; ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">Foto Room</label>
              <div class="col-sm-4">
                <input type="file" class="" id="efroom" name="efroom" style="padding-top: 5px;">
                <font size="2px" color="red">Max Ukuran Foto 5 mb</font>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-4">
                <a href="#" class="thumbnail"><img src="<?php echo empty($data['gambar'])? 'image/no-img.png' : $data['gambar']; ?>"></a>
              </div>
            </div>
            <div class="form-group" style="padding-left: 28%;">
              <input type="submit" value="UPDATE" class="btn btn-info">
              <a href="?p=room" class="btn btn-warning">BATAL</a>
            </div>
          </form>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div><!-- /.row (main row) -->

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading"><h3>TABEL ROOM</h3></div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover table-border" id="tabel-room">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Room</th>
                  <th>Kapasitas Room</th>
                  <th>Detail Room</th>
                  <th>Gambar Room</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1; 
                $query1 = mysql_query("select * from room order by id_room asc");
                while ($ambil=mysql_fetch_assoc($query1)) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $ambil['nama_room']; ?></td>
                    <td><?php echo $ambil['kapasitas_room']; ?></td>
                    <td><?php echo $ambil['detail_room']; ?></td>
                    <td><?php echo $ambil['gambar'] == ''? "<img class='img-thumbnail' style='width: 250px; height: 150px;' src='image/no-img.png'>" : "<img class='img-thumbnail' style='width: 250px; height: 150px;' src='".$ambil['gambar']."'>"; ?></td>
                    <td>
                      <button class="btn btn-success eroom" name="<?php echo $ambil['id_room'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="EDIT"><span class="glyphicon glyphicon-edit"></span></button>
                      <button class="btn btn-danger hroom" name="<?php echo $ambil['id_room'] ; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                    <?php   
                  }                                                                 
                  ?>
                  </tr>                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->