<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> 
	<title>Daftar Pelatihan</title> 
</head> 
<style type="text/css">
      .navbar-inverse{
  background-color:  #87CEFA;
       }
    </style>
<body> 
	
<h4>Pelatihan Proyek Teknologi Informasi</h4>
<nav class="navbar navbar-expand-lg navbar-inverse">

  <a class="navbar-brand" href="">
    <img src="{{asset('/img/unila.png')}}" width="30" height="30" alt="Malas Ngoding">
  </a>

  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<div class="links">
                    @if(auth()->check())
                    <a>Hai, {{ auth()->user()->name }}</a>
                    <a href="/logout">Logout</a>
                    @else
                    <a href="{{ url('/') }}">
                    @endif
                </div>
    
    <ul class="nav navbar-nav navbar-right"> 
      @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-outline-light mr-2">Home</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                @endif
            @endauth
         @endif
</ul>
    
    <span class="navbar-text mr-3">
   
         </span>
  </div>

</nav>
<br/>
<br/>
@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
<form action="/upload/proses" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM DATA PENDAFTAR</font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            
        <div class="form-group">
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
                        <th width="1%">Nama Peserta</th>
							          <th>Tempat Lahir</th>
                        <th width="1%">Tanggal lahir</th>
                        <th>Alamat</th>
                        <th width="1%">No Telepon</th>
                        <th width="1%">Asal Universitas</th>
                        <th width="1%">Pilihan Pelatihan</th>
							          <th>Bank Tujuan</th>
                        <th width="1%">File</th>
							          <th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
          @foreach($peserta as $a)
						<tr>
                        
                            <td>{{$a->namapeserta}}</td>
                            <td>{{$a->tempatlahir}}</td>
                            <td>{{$a->tanggallahir}}</td>
                            <td>{{$a->alamat}}</td>
                            <td>{{$a->notelepon}}</td>
                            <td>{{$a->asalsekolahuniv}}</td>
							
						
						@endforeach 
          @foreach($pelatihan as $i)
						
                        
                            <td>{{$i->pilihanpelatihan}}</td>
                            <td>{{$i->banktujuan}}</td>
							<td><img width="150px" src="{{ url('/data_file/'.$i->file) }}"></td>
							<td>{{$i->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $i->id }}">HAPUS</a></td>
						</tr>
						@endforeach 
					</tbody>
				</table>
			</div>
		</div>
	</div>

<script src="{{asset('/js/jquery.js')}}"></script> 
<script src="{{asset('/js/popper.js')}}"></script> 
<script src="{{asset('/js/bootstrap.js')}}"></script>
</body> 
</html>
 
					
				