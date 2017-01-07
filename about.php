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
    <body>
        <?php
        include 'navbar.php';
        ?>
        <div class="container theme-showcase" role="main" style="margin-top:50px;">
            <h1>About</h1>
            <img src="images/winter1.png" style="float:right;"/>
            <p>
                Reptor is a PHP application which turns a webserver into a data repository. It demonstrates the functionality of a modern data repository along the recommendations 
                of the Research Data Alliance (RDA).  All data is stored in an arbitrary filesystem or a part of it. Only a PHP enabled webserver with access to this filesysytem 
                is necessary to run Reptor.
            </p>
            <p>
                Currently it offers:
            <table>
                <tr><td style="width:130px;"><img src="images/metadata.png"><br/></br/></td><td>Untyped metadata handling by supporting several types of serialised metadata (plain text, key-value pairs, XML formats)</td></tr>
                <tr><td><img src="images/pid.png"><br/></br /></td><td>PID handling, independent of the used PID system (DOI, Handle, URN etc.)</td></tr>
                <tr><td><img src="images/objectdata.png"><br/></br/></td><td>Access to the object data (bitstreams) stored on the filesystem and taking care of permission management</td></tr>
                <tr><td><img src="images/dtr.png"><br/></br /></td><td>Integration of Data Type Registries (DTR)</td></tr>
                <tr><td><img src="images/oai.png"><br/></br /></td><td>OAI-PMH</td></tr>
                <tr><td><img src="images/resourcesync.png"><br/></br /></td><td>ResourceSync (partially</td></tr>
            </table>
        </p>


    </div> <!-- /container -->
    <?php
    include 'foot-scripts.php';
    ?>
</body>
</html>
