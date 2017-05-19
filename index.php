<!DOCTYPE html>
<html>
<head>
	<title>LOL Encoder</title>
</head>
<body>

<h1> This is the raw example </h1>

<fieldset>Concat Function (eisikway)<br>
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
</body>
</html>
