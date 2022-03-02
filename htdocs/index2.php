<html>
<head>
 <title>Calc Area</title>
 <script lang="javascript">
 function do_calc()
 {
 var width, height, area;
 width = document.getElementById("w").value;
 height = document.getElementById("h").value;
 area = width * height;
 
 document.getElementById("ans").innerHTML = area;
 }
 </script>
</head>
<body>
 <form>
 <input name="width" id="w" placeholder="Width">
 x
 <input name="height" id="h" placeholder="Height">
 =
 <input name="answer" id="a" readonly="readonly">
 <input type="button" id='do_it' value="Do It" onclick="do_calc()">
 </form>
 <div> The answer is <span id="ans">___</span> </div>

 <div class="container">
    <div class="row">
            <div class="col-sm-4">Team A</div>
            <div class="col-sm-4">Team B</div>
    </div>
    <div class="row">
            <div class="col-sm-2">1 of 4</div>
            <div class="col-sm-2">2 of 4</div>
            <div class="col-sm-2">3 of 4</div>
            <div class="col-sm-2">4 of 4</div>
    </div>
    <div class="row">
            <div class="col-sm-2">1 of 4</div>
            <div class="col-sm-2">2 of 4</div>
            <div class="col-sm-2">3 of 4</div>
            <div class="col-sm-2">4 of 4</div>
    </div>
    <div class="row">
            <div class="col-sm-2">1 of 4</div>
            <div class="col-sm-2">2 of 4</div>
            <div class="col-sm-2">3 of 4</div>
            <div class="col-sm-2">4 of 4</div>
    </div>
    <div class="row">
            <div class="col-sm-2">1 of 4</div>
            <div class="col-sm-2">2 of 4</div>
            <div class="col-sm-2">3 of 4</div>
            <div class="col-sm-2">4 of 4</div>
    </div>

</div>


</body>
</html>