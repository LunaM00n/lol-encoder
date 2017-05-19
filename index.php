<!DOCTYPE html>
<html>
<head>
	<title>LOL Encoder</title>
</head>
<body>

<h1> This is the raw example </h1>

<fieldset><b>Concat Function</b> (eisikway)<br>
String 1<input type="text" id="firstname">
<br>
String 2<input type="text" id="lastname">
<br>
<button type="button" onclick="concat()">Concat</button><br>
Output<br><textarea id="name"></textarea>
</fieldset>

<script>
function concat(){
var fname = document.getElementById('firstname').value;
var lname = document.getElementById('lastname').value;
var symbol=prompt("Symbol?");
var name=fname.concat(symbol,lname);
document.getElementById('name').value=name;
}

</script>

<fieldset><b>Encoding Function</b> (@art0flunam00n)<br>
String<br><textarea id="in"></textarea>
<button type="button" onclick="base64encode()">b64->en</button>
<button type="button" onclick="base64decode()">b64->en</button><br>
</fieldset>

<script>
function base64encode(){
	var input=document.getElementById('in').value;
	document.getElementById('in').value=btoa(input);
}
function base64decode(){
	var input=document.getElementById('in').value;
	document.getElementById('in').value=atob(input);
}

</script>
</body>
</html>
