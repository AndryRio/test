<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?= 'Choose the notes' ?>
    </h1>
    
    <button onclick="navigateToBasic()"> Basics </button>
    <button onclick="navigateToConstants()"> Constants </button>
    <button onclick="navigateToVariables()"> Variable Variables </button>
    <button onclick="navigateToDataTypes()"> Data Types & Type Casting </button>
    <button onclick="navigateToFloats()"> Floats </button>
    <button onclick="navigateToStringsDataType()"> String Data Type </button>

    <script> 

        function navigateToBasic() {
            window.location.href = 'basic.php';
        }

        function navigateToConstants() {
            window.location.href = 'constants.php';
        }

        function navigateToVariables() {
            window.location.href = 'variable_variables.php';
        }

        function navigateToDataTypes() {
            window.location.href = 'data_types_&_type_casting.php';
        }

        function navigateToFloats() {
            window.location.href = 'floats.php';
        }

        function navigateToStringsDataType() {
            window.location.href = 'strings_data_type.php';
        }

    </script>

    <?php

        ?>
    
</body>
</html>



