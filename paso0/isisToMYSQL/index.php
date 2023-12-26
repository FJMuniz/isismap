<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MIGRACION ISIS -> MYSQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/old/query/jquery-ui.css">

    <script type="text/javascript" src="/old/query/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/old/query/jquery-ui.js"></script>

    <script type="text/javascript" src="script.js"></script>

</head>

<body>

    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="trabajo">
        <label class="custom-control-label" for="trabajo">procesar</label>
    </div>
    <br><br>

    <div class="input-group">
        desde<input class="form-control" type="text" id="desde" value="<?= isset($_POST['desde']) ? ($_POST['desde'] + $_POST['cuantos']) : "1" ?>">
    </div>

    <div class="input-group">
        cuantos<input class="form-control" type="text" id="cuantos" value="<?= isset($_POST['cuantos']) ? $_POST['cuantos'] : "500" ?>">
    </div>
    <br>


    <button type="submit" id="procesar">procesar</button>
    <button type="submit" id="parar">parar</button>


    <div id="res">

    </div>




</body>

</html>