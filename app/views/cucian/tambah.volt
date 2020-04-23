<title>Cucian</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-header">
            <a href="{{url('/cucian')}}" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="{{url('/cucian/proses')}}">
                <div class="form-group">
                    <label>Nama Cucian</label>
                    <input type="text" name="nama_cucian" autocomplete="off" class="form-control"
                    placeholder="Nama cucian">
                    
                </div>
                <div class="form-group">
                    <label>Kode Cucian</label>
                    <input type="text" name="kode_cucian" autocomplete="off" class="form-control"
                    placeholder="Kode Cucian">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                
            </form>
            {{ flashSession.output() }}

        </div>
    </div>
</div>