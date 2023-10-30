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
    <br /><br />
    <button onclick="navigateToArrayDataType()"> Array Data Type </button>
    <button onclick="navigateToPhpOperators()"> PHP Operators </button>
    <button onclick="navigateToLoops()"> Loops </button>
    <button onclick="navigateToSwitchStatement()"> Switch Statement </button>
    <button onclick="navigateToMatchExpression()"> Match Expression </button>
    <button onclick="nagigateToReturnDeclareTickableStatements()"> Return, Declare & Tickable Statements </button>
    <br /><br />
    <button onclick="navigateToIncludeRequire()"> Include and Require </button>
    <button onclick="navigateToHtmlTest()"> Html Test </button>
    <button onclick="navigateToFunctions()"> Functions </button>
    <button onclick="navigateToFunctionParameters()"> Function Parameters </button>


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
        function navigateToArrayDataType() {
            window.location.href = 'array_data_type.php';
        }
        function navigateToPhpOperators(){
            window.location.href = 'php_operators.php';
        }
        function navigateToLoops(){
            window.location.href = 'loops.php';
        }
        function navigateToSwitchStatement() {
            window.location.href = 'switch_statement.php';
        }
        function navigateToMatchExpression() {
            window.location.href = 'match_expression.php';
        }
        function nagigateToReturnDeclareTickableStatements () {
            window.location.href = 'return_declare_tickable_statements.php';
        }
        function navigateToIncludeRequire () {
            window.location.href = 'include_require.php';
        }
        function navigateToHtmlTest() {
            window.location.href = 'home_test.php';
        }
        function navigateToFunctions() {
            window.location.href = 'functions.php';
        }
        function navigateToFunctionParameters() {
            window.location.href = 'function_parameters.php';
        }
        

    </script>

    <?php

        ?>
    
</body>
</html>



