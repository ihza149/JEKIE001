<div class="content-wrapper">
    <section class="content-header">
    <h1>
        Data Mahasiswa
    </h1>
    </section>

    <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
            </tr>

            <?php

            $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td onclick="javascript: return confirm('Hapus Data ini?')"><?php echo anchor('Mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			<td><?php echo anchor('Mahasiswa/edit/'.$mhs->id, '<div class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-edit"></i></div>') ?> </td>
            </tr>

            <?php endforeach; ?>
        </table>
    </section>
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA MAHASISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'Mahasiswa/tambah_aksi'; ?>">

        <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control">
                <label>TANGGAL LAHIR</label>
                <input type="date" name="tgl_lahir" class="form-control">
                <label>JURUSAN</label>
                <input type="text" name="jurusan" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT DATA MAHASISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url().'Mahasiswa/edit'; ?>">

<div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control">
        <label>TANGGAL LAHIR</label>
        <input type="date" name="tgl_lahir" class="form-control">
        <label>JURUSAN</label>
        <input type="text" name="jurusan" class="form-control">
</div>

<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
    </div>
  </div>
</div>

</div> 