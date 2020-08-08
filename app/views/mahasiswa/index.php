<div class="container mt-3">
    <div class="row">
        <div class="col-6">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        <br><br>

            <h3>
                Daftar Mahasiswa
            </h3>

            <?php foreach ( $data['mhs'] as $mhs) : ?>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">

                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a></span>
                    
                    </li>
                </ul>

            <?php endforeach; ?>

        </div>
    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Masukan NRP">
            </div>

            <div class="form-group">
                <label for="email">E-MAIL</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan E-mail">
            </div>


            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="Jurusan Mahasiswa" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan" >Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>

  </div>
</div>