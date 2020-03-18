<!DOCTYPE html>
<html>

<head>
    <title>calculator</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;
        }
        main {
            display: flex;
            flex-direction: column;
            margin: eerst0px;
        }
        h1 {
            margin-left: 5px;
        }
        #input {
            display: flex;
            flex-direction: column;            
            width: 100px;
        }
        .balkjes {
            margin: 5px;
        }
        #output{
            height: 30px;
        }
        #buttons {
            display: flex;
            flex-direction: row;
        }
        .oporator {
            width: 30px;
            height: 30px;
            margin: 5px;
        }
    </style>
</head>

<body>

    <header></header>

    <main>

        <h1>calculator</h1>

        <form action="" method="get" class="form">
            <div id="input">
                <input type="number" name="eerst" class="balkjes" placeholder="first number">
                <input type="number" name="tweets" class="balkjes" placeholder="second number">
            </div>

            <div id="buttons">
                <input type="submit" class="oporator" name="operator" value="plus">
                <input type="submit" class="oporator" name="operator" value="min">
                <input type="submit" class="oporator" name="operator" value="keer">
                <input type="submit" class="oporator" name="operator" value="deel">
                <input type="submit" class="oporator" name="operator" value="modulus">

            </div>
        </form>

        <?PHP

        if (isset($_GET["eerst"]) && isset($_GET["tweets"])) {  
            switch ($_GET["operator"]) {
            case 'plus':
                $uitkomst = $_GET["eerst"] + $_GET["tweets"];
                echo $uitkomst;
                break;
            case 'min':
                $uitkomst = $_GET["eerst"] - $_GET["tweets"];
                echo $uitkomst;
                break;
            case 'keer':
                $uitkomst = $_GET["eerst"] * $_GET["tweets"];
                echo $uitkomst;
                break;
            case 'deel':
                $uitkomst = $_GET["eerst"] / $_GET["tweets"];
                echo $uitkomst;
                break;
            case 'modulus':
                $uitkomst = $_GET["eerst"] % $_GET["tweets"];
                echo $uitkomst;
                break;
            }
        }
        
        ?>

    </main>
    
    <footer></footer>

</body>

</html>