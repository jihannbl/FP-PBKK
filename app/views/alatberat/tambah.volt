<title>Alat Berat</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-header">
            <a href="{{url('/alatberat')}}" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form method="post" action="{{url('/alatberat/proses')}}">
                <div class="form-group">
                    <label>Nama Alat Berat</label>
                    <input type="text" name="nama_alatBerat" class="form-control" placeholder="Nama Alat Berat">
                </div>
                <div class="form-group">
                    <label>Harga Alat Berat</label>
                    <input type="text" name="harga_alatBerat" class="form-control" placeholder="Harga Alat Berat">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>