<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <h2 align="center">Aplikasi Pengajuan PKL</h2>
    <form action="{{ route('kelompok.insert') }}" method="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">JUDUL PENGAJUAN KEGIATAN</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Pengajuan" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="asal_kampus" class="form-label">UNIVERSITAS</label>
            <input name="asal_kampus" type="text" class="form-control" placeholder="Masukkan Universitas Anda" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">INSTANSI TUJUAN</label>
                <select name="instansi" class="form-select" aria-label="Default select example">
                    <option selected>Silahkan pilih instansi tujuan--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
        </div>
    </form>   
    <form action="{{ route('mahasiswa.insert') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        <p align="center"><strong>DATA MAHASISWA</strong></p>
        <table class="table table-bordered; rounded" id="dynamicTable">  
            <tr>
                <!-- <th>NIM</th>
                <th>NAMA</th>
                <th>PROGRAM STUDI</th>
                <th>Action</th> -->
            </tr>
            <tr>  
                <td><input type="text" name="mahasiswa[0][nim_mhs]" placeholder="Masukkan NIM" class="form-control" /></td>  
                <td><input type="text" name="mahasiswa[0][nama_mhs]" placeholder="Masukkan Nama" class="form-control" /></td>  
                <td><input type="text" name="mahasiswa[0][prodi_mhs]" placeholder="Masukkan Prodi" class="form-control" /></td>  
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
            </tr>  
        </table>
    </form>  
    <button type="submit" class="btn btn-success">KIRIM PENGAJUAN</button>
    <br>
</div>
   
<script type="text/javascript">
    var i = 0;      
    $("#add").click(function(){ 
        ++i; 
        $("#dynamicTable").append('<tr><td><input type="text" name="mahasiswa['+i+'][nim_mhs]" placeholder="Masukkan NIM" class="form-control" /></td><td><input type="text" name="mahasiswa['+i+'][nama_mhs]" placeholder="Masukkan Nama" class="form-control" /></td><td><input type="text" name="mahasiswa['+i+'][prodi_mhs]" placeholder="Masukkan Prodi" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    }); 
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
</script>
</body>
</html>