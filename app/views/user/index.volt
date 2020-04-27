{% extends 'template/master.volt' %}
{% block title %}
<title>User</title>
{%endblock%}
{% block content %}
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>USER</strong>
        </div>
        {{ flashSession.output() }}
        <div class="card-header">
            <a href="{{ url('user/tambah') }}" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus"
                    style="padding-right: 7px;"></span>Input</a>
                </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Nama User</th>
                        <th>Tipe User</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    {% for u in user %}
                    <tr>
                        <td>{{ u.username }}</td>
                        <td>{{ u.tipe }}</td>
                        <td>
                            <a href="{{url('user/edit/'~u.id_user) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{url('user/hapus/'~u.id_user) }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{%endblock%}