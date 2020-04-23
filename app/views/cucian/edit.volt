<title>Cucian</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>EDIT DATA</strong>
        </div>
        <div class="card-header">
            <a href="{{url('/cucian')}}" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="{{ url('/cucian/update/' ~ cucian.id_cucian) }}">
                <div class="form-group">
                    <label>Nama Cucian</label>
                    <input type="text" name="nama_cucian" class="form-control" placeholder="Nama cucian"
                    value="{{cucian.nama_cucian}}">
                </div>
                <div class="form-group">
                    <label>Kode Cucian</label>
                    <input type="text" name="kode_cucian" class="form-control" placeholder="Kode Cucian"
                    value="{{cucian.kode_cucian}}">
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                
            </form>
            {{ flashSession.output() }}

        </div>
    </div>
</div>