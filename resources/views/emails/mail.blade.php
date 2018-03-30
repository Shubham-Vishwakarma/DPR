<!--<strong> Dear {{ $name }}</strong>,<br />
<p>Your Registration has been succesfully done.</p><br />
<p>
  Your Credentials are as follows:<br />
  User Name: {{$name}}<br />
  Password: {{$pass}}<br />
</p>
<p>{{ $end }}</p>-->

<html>
<head>
  <style>

  </style>
</head>
<body style="font-size : 1.5em;">
<div style="align:center;">
  &nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/logo-head.png" alt="PMAY1" style="max-height: 150px; align: center;">
</div>
<br/>
<strong style="color : #303F9F"> Dear {{ $name }}</strong>,<br />
<p style="color : #303F9F">Your Registration has been succesfully done.</p>
<p style="color : #303F9F">
  Your Credentials are as follows:</p>
<strong style="color : #009688">
  User Name: {{$name}}<br />
  Password: {{$pass}}<br />
</strong>
<p style="color : #5C6BC0; font-size:0.9em;">{{ $end }}</p>
</body>
</html>
