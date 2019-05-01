<!doctype html>
<html>
<head>
    <meta charset="utf-08">
    <title>Main Form</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script>
function submitdata()
{
 var name=document.getElementById( "name" ).value;
 $.ajax({
  type: 'POST',
  url: 'formtest.php',
  data: {
   'name':name
  },
  success: function(html){
   $('#getdata').append(html);
  }
 });
	
 return false;
}
</script>

<style>
div.form {
    display: inline-block;
    text-align: center;
    width:1200px;
}
body{
    font-family: 'Slabo 27px', serif;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 
</head>

<body>

<div class="form">
    <form>
        Name:<input type = "text" name = "name" id="name">
        <input type="submit" id="submit" value="Submit" onclick="return submitdata()">
    </form>
</div>

    <div id ="getdata" style="text-align: center; border: 3px solid green;"></div>  
    <p id="msg">  </p>
</body>

</html>
