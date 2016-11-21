<!DOCTYPE html>
<html>
<body>


<button onclick="myFunction()">Speichern</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x;
    if (confirm("Ihre Publikation wurde erfasst!") == true) 
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>
