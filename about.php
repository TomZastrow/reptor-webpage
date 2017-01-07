<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <title>Reptor Software</title>
    </head>
    <body style="font-size:1.6em;">
        <?php
        include 'navbar.php';
        ?>
        <div class="container theme-showcase" role="main" style="margin-top:50px;">
            <h1>About</h1>
            <img src="images/winter1.png" style="float:right;"/>
            <p>
                Reptor is a PHP application which turns a webserver into a data repository. It demonstrates the functionality of a modern data repository along the recommendations of the Research Data Alliance (RDA). Currently it offers:
            <ul>
                <li>Untyped metadata handling by supporting several types of serialised metadata (plain text, key-value pairs, XML formats)</li>
                <li>PID handling, independent of the used PID system (DOI, Handle, URN etc.)</li>
                <li>Access to the object data (bitstreams) stored on the filesystem and taking care of permission management</li>
                <li>Integration of Data Type Registries (DTR)</li>
                <li>OAI-PMH</li>
                <li>ResourceSync (partially)</li>
            </ul>

            All data is stored in an arbitrary filesystem or a part of it. Only a PHP enabled webserver with access to this filesysytem is necessary to run Reptor. 
        </p>

    </div> <!-- /container -->
    <?php
    include 'foot-scripts.php';
    ?>
</body>
</html>
