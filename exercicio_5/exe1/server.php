<?php

$name = $_GET['name'];

if (isset($_COOKIE["name" . $name])) { ?>

    <html>


    <body style="background: <?php echo $_COOKIE["color" . $name]; ?>">

    </body>
    
    <script>
        alert("<?php echo "Nome: " . $_COOKIE["name" . $name]; ?> \n <?php echo "Email: " . $_COOKIE["email" . $name]; ?> \n <?php echo "Estado civil: " . $_COOKIE["maritalStatus" . $name]; ?> \n <?php echo "Cor preferida: " . $_COOKIE["color" . $name]; ?>");
    </script>

    </html>

<?php
} else {
    header('Location: ./form.html');
}
?>  