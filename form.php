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


</head>

<body>


    <form>
        Name:<input type = "text" name = "name" id="name">
        <input type="submit" id="submit" value="Submit" onclick="return submitdata()">
    </form>
    <div id ="getdata"></div>  
    <p id="msg">  </p>
</body>

</html>
