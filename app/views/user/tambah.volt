{% extends 'template/master.volt' %}
{% block title %}
<title>User</title>
{%endblock%}
{% block content %}
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>TAMBAH DATA</strong>
        </div>
            {{ flashSession.output() }}
        <div class="card-header">
            <a href="{{url('/user')}}" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="{{url('/user/proses')}}">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"
                        placeholder="Username">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control"
                        placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Tipe User</label>
                    <select class="form-control" id="tipe" name="tipe">
                        <option value="master">Master</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>
            

        </div>
    </div>
</div>
{%endblock%}