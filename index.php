<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Pet Shop</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
    
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="logonom"><span> chez Pupuce</span></div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="admin/index.php">administration</a></li>
                        <li><a href="connexion.php">login</a></li>
                        <li><a href="disconnexion.php">logout</a></li>
                        <li><a href="">panier</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container site">
            <h1 class="text-logo"><span class="glyphicon glyphicon-star"></span> PET SHOP <span class="glyphicon glyphicon-star"></span></h1>
            <div> <img class="image_petfamily"src="https://www.pooch.ca/images/dogs_family.png"/></div>

            <?php


        // session_start();
        //     if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        //         header('Location: connexion.php');
        //         die;
        //     }



                require 'admin/database.php';
                

/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::::::POO::::::::::::::::::::::::::::::::::::::::::::::::::::::::

je n'aurai pas le temps de m'en servir comme il le faudrait, cf.dossier "classes", je prépare juste le terrain pour la suite ...

include ('Person.php');
include ('Client.php');
include ('Employe.php');
include ('Applier.php');


::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::::     FIN POO   ::::::::::::::::::::::::::::::::::::::::::::::::::::*/
			 
                echo '<nav>
                        <ul class="nav nav-pills">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM category');
                $categories = $statement->fetchAll();
                foreach ($categories as $category) 
                {
                    if($category['category_id'] == '1')
                        echo '<li role="presentation" class="active"><a href="#'. $category['category_id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                    else
                        echo '<li role="presentation"><a href="#'. $category['category_id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                }

                echo    '</ul>
                      </nav>';

                echo '<div class="tab-content">';

                foreach ($categories as $category) 
                {
                    if($category['category_id'] == '1')
                        echo '<div class="tab-pane active" id="' . $category['category_id'] .'">';
                    else
                        echo '<div class="tab-pane" id="' . $category['category_id'] .'">';
                    
                    echo '<div class="row">';
                    
                    $statement = $db->prepare('SELECT * FROM product WHERE product.category_type = ?');
                    $statement->execute(array($category['category_id']));

                    
                    while ($item = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/' . $item['picture'] . '" alt="image du produit">
                                    <div class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        <p>' . $item['description'] . '</p>
                                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                    </div>
                                </div>
                            </div>';
                    }
                   
                   echo    '</div>
                        </div>';
                }
                var_dump($item['picture']);
                Database::disconnect();
                echo  '</div>';
            ?>
        </div>
    </body>





</html>