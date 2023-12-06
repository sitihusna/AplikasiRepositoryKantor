

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center">Data Inventaris Kantor</h1>
    <h1 class = "text-center">Kantor Ngoding Pintar</h1>

    <!-- awal row -->
    <div class="row">
        <!-- awal col -->
        <div class="col-md-8 mx-auto">
            <!-- awal card -->
            <div class="card">
                <div class="card-header bg-info text-light">
                Form Input Data Barang
                </div>
                <div class="card-body">
                  <!-------Awal Form---------->
                  <form method="POST">
                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
                        <input type="text" name="tkode" class="form-control"  placeholder="Masukkan Kode Barang">
                      </div>

                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                        <input type="text" name="tnama" class="form-control"  placeholder="Masukkan Nama Barang">
                      </div>

                  <div class="mb-3">
                        <label class="form-label">Satuan</label>
                          <select class="form-select" name="tsatuan">
                            <option selected>-pilih-</option>
                            <option value="Pembelian">Pembelian</option>
                            <option value="Hibah">Hibah</option>
                            <option value="Bantuan">Bantuan</option>
                            <option value="Sumbangan">Sumbangan</option>
                          </select>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                          <input type="number" name="tjumlah" class="form-control" placeholder="Masukkan Jumlah Barang">
                        </div>
                        </div>

                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label">Asal Barang</label>
                          <select class="form-select" name="tasal">
                            <option selected>-pilih-</option>
                            <option value="Pembelian">Pembelian</option>
                            <option value="Hibah">Hibah</option>
                            <option value="Bantuan">Bantuan</option>
                            <option value="Sumbangan">Sumbangan</option>
                          </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Tanggal Diterima</label>
                          <input type="date" name="ttanggal_diterima" class="form-control" placeholder="Masukkan Jumlah Barang">
                        </div>
                        </div>

                    <div class="text-center">
                      <hr>
                      <button class ="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                      <button class ="btn btn-danger" name="bkosongkan" type="reset">Kosongkan</button>
                    </div>

                  </div>
                      </form>
                  <!-------Akhir Form---------->
                </div>
                <div class="card-footer bg-info">
            </div>
        </div>
        <!-- akhir card -->
        </div>
        <!-- akhir col -->
    </div>
      <!-- akhir row -->

      <!--------------------------DATA INPUT---------------------------------->
      <!-- awal card -->
      <div class="row">
      <div class="col-md-10 mx-auto">
      <div class="card mt-3">
                <div class="card-header bg-info text-light">
                Form Input Data Barang
                </div>
                <div class="card-body">
                  <div class="cl-md-6 mx-auto">
                    <form method="POST">
                      <div class="input-group mb-3">
                        <input type="text" name="tcari" class="form-control"placeholder="Masukkan Kata Kunci">
                        <button class="btn btn-primary name="bcari" type="submit">Cari</button>
                        <button class="btn btn-danger name="breset" type="submit">Reset</button>
                      </div>

                    </form>
                  </div>
                  <table class ="table table-striped table-hover table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Asal Barang</th>
                      <th>Jumlah</th>
                      <th>Tanggal diterima</th>
                      <th>Aksi</th>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>INV-2022-001</td>
                      <td>Printer Epson</td>
                      <td>Pembelian</td>
                      <td>1</td>
                      <td>2022-06-01</td>
                      <td>
                        <a href="#"class="btn btn-warning">Edit</a>
                        <a href="#"class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="card-footer bg-info">
            </div>
        </div>
        </div>
        </div>
      
      <!-- akhir card -->

      
<!-------------------------JAVASCRIPT---------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>