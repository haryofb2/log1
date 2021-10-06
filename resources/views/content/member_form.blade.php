@extends('master')

@section('content')
<div class="container">
    <form role="form" action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="hidden" name="_method" value="POST" />
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">no. WA</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="no_wa"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">tempat lahir</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">tanggal lahir</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">link akun instagram</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link_akun_instagram"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">link akun facebook</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link_akun_facebook"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">link akun tiktok</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link_akun_tiktok"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">link akun twitter</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link_akun_twitter"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">link akun youtube</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link_akun_youtube"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">profesi</label>
            <select class="form-control" name="profetion_id" id="exampleFormControlSelect1">
                <option>-- pilih --</option>
                @foreach ($profetion as $p)
                <option value="{{$p->id}}">
                    {{$p->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">detail profesi</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="detail_profesi"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">interest</label>
            <select class="form-control" name="interest_id" id="exampleFormControlSelect1">
                <option>-- pilih --</option>
                @foreach ($interest as $p)
                <option value="{{$p->id}}">
                    {{$p->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">berapa anak yang dimiliki</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="jumlah_anak"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">anak sulung</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tahun_lahir_anak_sulung"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">anak bungsu</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tahun_lahir_anak_bungsu"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">income perbulan</label>
            <select class="form-control" name="income_id" id="exampleFormControlSelect1">
                <option>-- pilih --</option>
                @foreach ($income as $p)
                <option value="{{$p->id}}">
                    {{$p->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">alasan bergabung</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="alasan_bergabung"
                placeholder="text@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">harapan bergabung</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="harapan_bergabung"
                placeholder="text@example.com">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
@endsection
