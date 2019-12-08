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
<form method="POST" action="/proses_input">
{{csrf_field()}}
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM INPUT DATA </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td> <input name="namapeserta" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><input name="tempatlahir"  size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td> <input name="tanggallahir"  size="30" maxlength="30"></td>
            </tr>
                
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><input name="alamat" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>No. Telepon</td>
              <td>:</td>
              <td><input name="notelepon" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Asal Universitas</td>
              <td>:</td>
              <td><input name="asalsekolahuniv" size="30" maxlength="30"></td>
            </tr>
        </table> 
        <button type="submit" class="btn btn-primary" >Simpan</button>
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