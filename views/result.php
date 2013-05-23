<!DOCTYPE html>
<html>
    <head>
        <title>notnotPHP | Home</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="public/lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Id du cours</th>
                        <th>Intitule</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cours as $key => $value) {
                                ?>
                                <tr><td><?php echo strtoupper($value['nom']) ?></td><td><?php echo strtoupper($value['prenom']) ?></td>
                                    <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
