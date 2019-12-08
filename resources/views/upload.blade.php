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
    <img src="{{asset('/img/unila.png')}}" width="30" height="30" alt="">
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
        <td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM PILIHAN PELATIHAN </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            
        <div class="form-group">
						
            <b>Pilihan Pelatihan</b><br/>
                        <input  name="pilihanpelatihan" type="checkbox" value="Website"> Website <br/>
                        <input  name="pilihanpelatihan" type="checkbox" value="Augmented Reality"> Augmented Reality <br/>
                        <input  name="pilihanpelatihan" type="checkbox" value="Internet of Things"> Internet of Things <br/>
                        <p>(*boleh memilih lebih dari satu pelatihan, lalu sesuaikan jumlah transaksi pembayaran pelatihan sesuai banyaknya pelatihan yang Anda pilih) </p>

					</div>
 
					<div class="form-group">
						<b>Bank Tujuan Transfer Pembayaran Pelatihan</b> </br>
						            <input type="radio" name="banktujuan" value="BRI">BRI (A.N. Rizki Elvilia Putri No.Rek : 034 010 999 209 134)<br/>  
                        <input type="radio" name="banktujuan" value="BNI" >BNI (A.N. Zagita Faradila No.Rek : 098 278 4976)<br/>  
                        <input type="radio" name="banktujuan" value="Mandiri ">Mandiri (A.N. Robertus Zidan No.Rek : 0739 012 397 661)<br/> 
                        <p>(*pilih salah satu)</p>
                        </div>

                    <div class="form-group">
						<b>File Bukti Pembayaran</b><br/>
						<input type="file" name="file">
            <p>(*Maksimal 200Kb)
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
            <p>(*Masukkan jumlah nominal yang Anda bayarkan)
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
      
    </td>
      </tr>
    </table>
  </form>

<hr>


<br/>


<br/>



<script src="{{asset('/js/jquery.js')}}"></script> 
<script src="{{asset('/js/popper.js')}}"></script> 
<script src="{{asset('/js/bootstrap.js')}}"></script>
</body> 
</html>
 
					
				