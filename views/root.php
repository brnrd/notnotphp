<!DOCTYPE html>
<html>
    <head>
        <title>notnotPHP | Home</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">notnotPHP</a>
                    <div class="nav-collapse" id="main-menu">
                        <ul class="nav" id="main-menu-left">
                            <li>
                                <a href="https://bitbucket.org/brnrd/notnotPHP" tarket="_blank">Code</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <form class="well form-horizontal" name="form" action="/result" method="post">
                        <fieldset>
                            <div class="control-group">
                                <div class="input-append">
                                    <input class="input-xlarge" type="text" name="query" placeholder="Nom du prof">
                                    <input class="btn" type="submit" value="Chercher">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
