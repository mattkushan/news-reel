<!DOCTYPE html>
<?php include 'simple_html_dom.php'; ?>

<body>

<?php
echo file_get_html('http://www.npr.org')->plaintext; 
?>


</body>

</html>

