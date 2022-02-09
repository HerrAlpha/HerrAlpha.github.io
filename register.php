<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PO MAR Transport - Daftar</title>
    <script defer src="js/bootstrap.bundle.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<body>
   
    <div class="row" style="padding-left: 25%; padding-right: 25%; padding-top: 10%;">
        <div class="col align-self-center">
        <div class="card align-self-center" style="width: 100%;">
        <div class="card-body">
        <div class="row">
        <div class="col">
            <h2>
                Selamat datang
            </h2>
            <p>Silahkan mengisi pendaftaran agar memudahkan anda saat melakukan booking tiket.</p>
        </div>
    </div>
        <form class="row g-3">
        <div class="col-md-6">
    <label for="frontName" class="form-label">Nama Depan*</label>
    <input type="name" class="form-control" id="frontName" required>
    <div class="invalid-feedback">
      Nama tidak boleh kosong!
    </div>
  </div>
  <div class="col-md-6">
    <label for="lastName" class="form-label">Nama Belakang*</label>
    <input type="name" class="form-control" id="lastName" required>
  </div>
  <div class="col-md">
    <label for="NIK" class="form-label">NIK*</label>
    <input type="IDNumber" class="form-control" id="NIK" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email*</label>
    <input type="email" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password*</label>
    <input type="password" class="form-control" id="inputPassword4" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address*</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2 (opsional)</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Kota*</label>
    <input type="text" class="form-control" id="inputCity" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Provinsi*</label>
    <select id="inputState" class="form-select" required>
      <option selected>Choose...</option>
      <option>Nangroe Aceh Darussalam</option>
      <option>Sumatera Utara</option>
      <option>Sumatera Barat</option>
      <option>Riau</option>
      <option>Jambi</option>
      <option>Sumatera Selatan</option>
      <option>Kepulauan Riau</option>
      <option>Bengkulu</option>
      <option>Lampung</option>
      <option>Banten</option>
      <option>DKI Jakarta</option>
      <option>Jawa Barat</option>
      <option>Jawa Tengah</option>
      <option>D.I. Yogyakarta</option>
      <option>Jawa Timur</option>
      <option>Bali</option>
      <option>Nusa Tenggara Barat</option>
      <option>Nusa Tenggara Timur</option>
      <option>Kalimantan Barat</option>
      <option>Kalimantan Tengah</option>
      <option>Kalimantan Timur</option>
      <option>Kalimantan Selatan</option>
      <option>Kalimantan Utara</option>
      <option>Sulawesi Utara</option>
      <option>Gorontalo</option>
      <option>Sulawesi Barat</option>
      <option>Sulawesi Tengah</option>
      <option>Sulawesi Tenggara</option>
      <option>Sulawesi Selatan</option>
      <option>Maluku Utara</option>
      <option>Maluku</option>
      <option>Papua Barat</option>
      <option>Papua</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Kode Pos*</label>
    <input type="text" class="form-control" id="inputZip" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck" required>
        <p>Setuju dengan Syarat dan Ketentuan yang berlaku. <a href="#">S&K</a></p>
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Daftar</button>
  </div>
</form>
        <div class="row">
            <div class="col-md">
                <p>Sudah memiliki akun? Silahkan langsung <a href="login.php">Masuk</a></p>
                <p>* harus diisi</p>
            </div>
        </div>
        </div>

    </div>
        </div>
    </div>
    
</body>
</html>