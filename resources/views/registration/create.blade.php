<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
<div style="background-image:url('img/11.jpg');" >
  <style>
  a {
  text-decoration: none;
}

label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #00DDDD;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;

}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #00DDDD, #009999);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #00DDDD, #009999);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #00DDDD, #009999);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

  </style>
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>REGISTER</h2>
        <div class="underline-title"></div>
      </div>
    
    @if(!auth()->check() )
    
    <form method="POST"  class="form" action="/register">
        {{ csrf_field() }}
        <label for="name" style="padding-top:13px">
            &nbsp;Name
          </label>
        <input id="name" class="form-content" type="text" name="name" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="email" style="padding-top:22px">&nbsp;Email
          </label>
        <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="SUBMIT" />

      </form>
    @else
        <h1>
        Anda Sudah login
        </h1>
    @endif
 
    </div>
  </div>
  </div>
</body>
</html>
