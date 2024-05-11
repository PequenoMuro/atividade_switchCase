
    <style>
        body {
            background-color: rgb(21, 21, 21); 
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 85vh;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            font-family: Arial, sans-serif;
            color: white;
            font-size: 120px; 
            text-align: center;
            
        }

        .favcolor {
            color: white;
            font-size: 120px; 
            text-align: center;
        }
           

    </style>
</head>
<body>
<div>
<?php
$favcolor = $_POST["favcolor"];

switch ($favcolor) {
case "vermelho":
echo "<b>SUA COR FAVORITA É VERMELHO</b>";
break;
case "azul":
echo "<b>SUA COR FAVORITA É AZUL</b>";
break;
case "verde":
echo "<b>SUA COR FAVORITA É VERDE</b>";
break;
default:
echo "<b >Sua cor favorita não é vermelho, azul ou verde!</b>";

}
?>

</div>
</body>
</html>