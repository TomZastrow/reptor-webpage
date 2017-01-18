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
            <h1>Getting Started</h1>
            <h2>Installation</h2>
            <p>
                Simply clone the GitHub repository into an empty folder on a PHP enabled webserver:
            </p>
            <p>
                <code>git clone https://github.com/TomZastrow/reptor.git</code>
            </p>
            <p>
                Point your browser to that directory and you should see the Reptor startpage:
            </p>
            <p>
                <img src="images/reptorScreenshot.png" />
            </p>
        </p>
        <h2>Exploring</h2>
        <p>
            You can explore the fresh Reptor installation by clicking around - behind some of the buttons, you will see Json- or XML formatted 
            output. If you scroll down to the subdirectory "Photos" and click on it, you'll see a complete example of a Digital Object in Reptor:
        </p>
        <ul>
            <li>Three kinds of metadata:
                <ul>
                    <li>Plain text</li>
                    <li>Dublin Core</li>
                    <li>"Data Type Registry" entries: when clikcing on "Definition", you will see the Json code behind the current DTR entry</li>
                </ul>
            </li>
            <li>A Persistent Identifier (PID)</li>
            <li>Object Data:
                <ul>
            <li>Subdirectories</li>
            <li>Files</li>
                </ul>
            </li>
            <li>Announcements:
                <ul>
                    <li>OAI-PMH view of the</li>
                    <li>ResourceSync</li>
                    <li>Social Media buttons (Facebook, Twitter)</li>
                </ul>
            
            </li>
        </ul>
        
        <h2>Configuration</h2>
        <p>The basic configuration of Reptor is done in the file "config.php". Here you can customize the Reptor installation.</p>
        
        <h2>Administration</h2>
        <p>You can access the admin interface of Reptor by going to the adress /admin </p>

    </div> <!-- /container -->
    <?php
    include 'foot-scripts.php';
    ?>
</body>
</html>
