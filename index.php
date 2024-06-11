<html>
<body>


<form method="get" action="<?php echo $_SERVER ['PHP_SELF'];?>">
    Name : <input type="text" name ="fname">
    <input type="submit">
 </form>

<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    $name = $_POST ['fname'];
    if (empty($name)){
        echo "Name is enqte";
    } else {
        echo ucwords($name) ;
    }
}
?>



</body>

</html>