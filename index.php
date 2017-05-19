<!DOCTYPE html>
<html>
<head>
	<title>LOL Encoder</title>
	<meta charset="utf-8">
</head>
<body>

<h1> This is the raw example </h1>

<fieldset><b>Concat</b> (eisikway)<br>
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

<fieldset><b>Encoder</b> (@art0flunam00n)<br>
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

<fieldset><b>Repeater</b> (@art0flunam00n)<br>
String<br><textarea id="repeat"></textarea>
Number of Repeat <input type="text" id="number"><br>
<button type="button" onclick="repeaterFunction()">Repeat</button>
<button type="button" onclick="clearFunction()">Clear</button>

</fieldset>

<script>
function repeaterFunction(){
	var input=document.getElementById('repeat').value;
	var num=document.getElementById('number').value;
	document.getElementById('repeat').value=input.repeat(num);
}
function clearFunction(){
		document.getElementById('repeat').value="";
}

</script>

<fieldset><b>Text Conversion</b> (Kyaw Thi Ha)<br>
String<br><textarea id="gs"></textarea><br>
<button type="button" onclick="toLowerCase()">toLower</button>
<button type="button" onclick="toUpperCase()">toUpper</button><br>

</fieldset>

<script>
function toLowerCase(){
var os = document.getElementById("gs").value;
var cs = os.toLowerCase();
document.getElementById("gs").value=cs;
}

function toUpperCase(){
var os = document.getElementById("gs").value;
var cs = os.toUpperCase();
document.getElementById("gs").value=cs;
}
</script>

</body>
</html>
