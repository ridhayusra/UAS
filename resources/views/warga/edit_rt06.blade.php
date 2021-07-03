@extends('layouts.master')

@section('content')

    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
            <h2>EDIT DATA</h2>
        </div>
                            @if(session('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{session('sukses')}}
                                </div>
                            @endif
                         
            <div class="row">
            <div class="col-md-8">
            <div class="widget">
            <div class="widget-header clearfix">
								<h3><i class="icon ion-ios-compose-outline"></i> <span>Masukkan Data Baru</span></h3>
							</div>
                            <div class="widget-content">
                            <form action="/warga/{{$warga->id}}/update_rt06" method="POST" id="form1"> 
                             {{csrf_field()}}
                                <div class="form-horizontal" >
									<div class="form-group">
										<label class="col-md-2 control-label">NIK</label>
										<div class="col-md-10">
                                        <input name="NIK" type="number" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK" value="{{$warga->NIK}}" required>
										</div>
									</div>
									
                                    <div class="form-group">
										<label class="col-md-2 control-label">Nama</label>
										<div class="col-md-10">
                                        <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$warga->Nama}}"required>
										</div>
									</div>
                                
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                            <input name="Tempat_lahir" type="text" class="form-control " id="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{$warga->Tempat_lahir}}"  required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                            <input name="TTL" type="date" class="form-control float-right" id="tanggal" aria-describedby="emailHelp" value="{{$warga->TTL}}" required> 
                                        </div>  
                                    </div>
                                   

                                    <div class="form-group">
										<label class="col-md-2 control-label">Jenis Kelamin</label>
										<div class="col-md-10">
											<select class="form-control" name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example">
                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="L" @if($warga->Jenis_Kelamin == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($warga->Jenis_Kelamin == 'P') selected @endif>Perempuan</option>
											</select>
										</div>
                                    </div>  

                                    <div class="form-group">
										<label class="col-md-2 control-label">Agama</label>
										<div class="col-md-10">
											<select class="form-control" name="Agama" class="form-select" id="agama" aria-label="Default select example" value="{{$warga->Agama}}">
                                                <option selected disabled>Pilih Agama</option>
                                                <option value="Islam" @if($warga->Agama == 'Islam') selected @endif>Islam</option>
                                                <option value="Kristen" @if($warga->Agama == 'Kristen') selected @endif>Kristen</option>
                                                <option value="Katolik" @if($warga->Agama == 'Katolik') selected @endif>Katolik</option>
                                                <option value="Hindu" @if($warga->Agama == 'Hindu') selected @endif>Hindu</option>
                                                <option value="Buddha" @if($warga->Agama == 'Buddha') selected @endif>Buddha</option>
                                                <option value="Konghucu" @if($warga->Agama == 'Konghucu') selected @endif>Konghucu</option>
                                                <option value="Lainnya" @if($warga->Agama == 'Lainnya') selected @endif>Lainnya</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">Alamat</label>
										<div class="col-md-10">
											<textarea class="form-control" name="Alamat" class="form-control" id="alamat" rows="3" required>{{$warga->Alamat}}</textarea>
										</div>
									</div>

                                        <div class="form-group">
										<label class="col-md-2 control-label">RW</label>
										<div class="col-md-10">
											<select class="form-control" name="RW" id="RW" aria-label="Default select example" onchange="tampilkan()">
                                                <option selected disabled>Pilih RW</option>
                                                <option value="06" @if($warga->RW == '06') selected @endif>06</option>
                                                <option value="07" @if($warga->RW == '07') selected @endif>07</option>
											</select>
										</div>
                                        <label class="col-md-2 control-label">RT</label> 
                                        <div class="col-md-10">
											<select class="form-control" name="RT" class="form-select" id="RT" aria-label="Default select example">
                                                <option selected disabled>Pilih RT</option>
											</select>
										</div>
                                    </div>  
                                    <button type="submit" class="btn btn-warning btn-sm">Update</button>	
								</div>
                                </form>
							</div>
						</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function tampilkan(){
        var cek = document.getElementById("form1").RW.value;
        if(cek=="06"){
            document.getElementById("RT").innerHTML="<option value='06'>06</option><option value='03'>03 </option>"; 
        }
        else if(cek=="07"){
            document.getElementById("RT").innerHTML="<option value='04'>04</option><option value='02'>02</option>";
        }
        
    }
</script>
@stop
@section('content1')
            <h1>Edit data warga</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif
            <div class="row">
           
            
            
            <form action="/warga/{{$warga->id}}/update" method="POST"> 
                    {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input name="NIK" type="number" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK" value="{{$warga->NIK}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$warga->Nama}}"required>
                </div>
                <div class="row g-3">
                        <div class="col-sm">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input name="Tempat_lahir" type="text" class="form-control " id="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{$warga->Tempat_lahir}}"  required>
                        </div>
                        <div class="col-sm">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input name="TTL" type="date" class="form-control float-right" id="tanggal" aria-describedby="emailHelp" value="{{$warga->TTL}}" required> 
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example" >
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L" @if($warga->Jenis_Kelamin == 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if($warga->Jenis_Kelamin == 'P') selected @endif>Perempuan</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <select name="Agama" class="form-select" id="agama" aria-label="Default select example" value="{{$warga->Agama}}">
                                <option selected>Pilih Agama</option>
                                <option value="Islam" @if($warga->Agama == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if($warga->Agama == 'Kristen') selected @endif>Kristen</option>
                                <option value="Katolik" @if($warga->Agama == 'Katolik') selected @endif>Katolik</option>
                                <option value="Hindu" @if($warga->Agama == 'Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if($warga->Agama == 'Buddha') selected @endif>Buddha</option>
                                <option value="Konghucu" @if($warga->Agama == 'Konghucu') selected @endif>Konghucu</option>
                                <option value="Lainnya" @if($warga->Agama == 'Lainnya') selected @endif>Lainnya</option>
                            </select>
                    </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea name="Alamat" class="form-control" id="alamat" rows="3" required>{{$warga->Alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
                </div>
            </div>
@endsection
        


           
    


