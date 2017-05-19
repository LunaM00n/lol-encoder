<!DOCTYPE html>
<html>
<head>
	<title>LOL Encoder</title>
</head>
<body>

<h1> This is the raw example </h1>

<textarea id="input">
</textarea>


<button type="button" onclick="base64EncodeFunction()">b64->en</button>
<button type="button" onclick="base64DecodeFunction()">b64->de</button>

<script>
var input=document.getElementById("input").value;

function base64EncodeFunction(){
	document.getElementById("input").value = btoa(input);
}

function base64DecodeFunction(){
	document.getElementById("input").value = atob(input);
}
</script>
</body>
</html>
