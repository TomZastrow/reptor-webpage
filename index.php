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

        <div class="container theme-showcase" role="main" >
            <div style="width:1000px;">
                <div >
                    <img src="images/header.png" />
                </div>

                <h2>Reptor Repository Software</h2>
                <p>Reptor is a PHP application which turns a webserver into a data repository. It demonstrates the functionality of a modern data repository along the recommendations of the Research Data Alliance (RDA).</p>
         
                    <div  >
                        <img src="images/fileListing.png" />
                    </div>

                <br /><hr />

                <div class="row" style="width:1400px;">
                    <div class="col-md-3" >
                        <img src="images/metadata.png" />
                    </div>
                    <div class="col-md-3">
                        <img src="images/pid.png" />
                    </div>
                    <div class="col-md-3">
                        <img src="images/objectdata.png" />
                    </div>
                </div>
                <div class="row" style="width:1400px;">
                    <div class="col-md-3" >
                        <strong>Metadata:</strong> Reptor can handle several kinds of metadata, stored together with the object data. This includes plain text, Dublin Core and entries of the Data Type Registry.
                    </div>
                    <div class="col-md-3">
                        <strong>Persistent Identifier:</strong> Any kind of PID can be assigned to a Digital Object, including DOIs, Handles, URNs. The shortref.org service is supported out of the box.
                    </div>
                    <div class="col-md-3">
                        <strong>Object Data:</strong> Any folder hierarchy on a webserver can be easily turned into a digital data repository.
                    </div>
                </div>


                <div style="margin: auto; width:20%;margin-top:30px;" >
                    <a href='#'><button class="btn btn-primary">Click here for a quickstart :-)</button></a>
                </div>
            </div>
        </div> <!-- /container -->
        <?php
        include 'foot-scripts.php';
        ?>
    </body>
</html>
