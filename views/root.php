<!DOCTYPE html>
<html>
    <head>
        <title>notnotPHP | Home</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="public/lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="public/lib/css/style.css" rel="stylesheet" type="text/css">
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
                    <a class="brand" href="/notnotPHP/notnotPHP">notnotPHP</a>
                    <div class="nav-collapse" id="main-menu">
                        <ul class="nav" id="main-menu-left">
                            <li>
                                <a href="https://bitbucket.org/brnrd/notnotPHP" tarket="_blank">Code</a>
                            </li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <form class="navbar-form pull-right">
                                    <div class="input-append">
                                        <input type="text" id="search_input" placeholder="Recherche" class="input-xxlarge"></input>
                                        <button class="btn" id="clear_input">Effacer</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="page_title">
                        <h1>Pour chercher, c'est par là ↑</h1>
                        <h3>Et les résultats, ce sera ici</h3>
                    </div>
                    <table id="table" class="table table-bordered table-striped table-hover table-condensed">
                        <thead>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Année</th>
                        <th>Intitule</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cours as $item) {
                                ?>
                                <tr><td><?php echo strtoupper($item['nom']) ?></td><td><?php echo strtoupper($item['prenom']) ?></td><td><?php echo strtoupper($item['annee']) ?></td><td><?php echo strtoupper($item['intitule']) ?></td>
                                    <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="public/lib/js/jquery/jquery-2.0.0.min.js"></script>
        <script type="text/javascript" src="public/lib/js/jquery/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="public/lib/js/script.js"></script>
    </body>
</html>
