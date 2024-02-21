<?php

    require_once __DIR__.'/classes/categories.php';
    require_once __DIR__.'/classes/products.php';
    require_once __DIR__.'/classes/toy.php';
    require_once __DIR__.'/classes/food.php';
    require_once __DIR__.'/classes/cuccia.php';

    $dogsCategory = new Categories('🐶');
    $catsCategory = new Categories('🐱');

    $allProducts = [];


    $quantityGeneralProduct = 20;
    if(isset($_GET['availability'])){
        $quantityGeneralProduct = $_GET['availability'];
    }

    try{
        $prodottoGenerico = new Products(
            'Pettorina',
            'https://www.delashop.it/wp-content/uploads/2018/11/pettorina-per-cani-in-nylon.jpg',
            7.99,
            $quantityGeneralProduct,
            'descrizione del prodotto',
            $dogsCategory
        );

        $allProducts[] = $prodottoGenerico; 
    }
    catch(Exception $e){
        echo '<h2>Valore quantità prodotto non valido</h2>';
    }




    

    $giocoAnimale = new Toy('Frisbee',
        'Plastica',
         'https://www.fullgadgets.com/data/thumb_cache/_data_prod_img_frisbee-in-plastica-per-cani-max-17_jpg_r_950_700.jpg',
        7.99,
        30,
        'descrizione del prodotto',
        $dogsCategory);

    $allProducts[] = $giocoAnimale;
    

    $ciboAnimale = new Food('Croccantini',
        '14/07/2025',
         'https://www.tigota.it/media/catalog/product/b/i/big_312471_842564_01_m5lcjqgamq6r7vgh.jpg?quality=60&fit=bounds&height=700&width=700&canvas=700:700',
        7.99,
        30,
        'descrizione del prodotto',
        $dogsCategory);

    $allProducts[] = $ciboAnimale;
?>  







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>
    <body>
        
        <header>
            <h1>
                PRODUCT PHP
            </h1>
        </header>



        <main>
            <div class="container">
                <div class="row">
                    <?php
                        foreach($allProducts as $singleProduct){
                    ?>
                     <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleProduct->image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>
                                    <?php echo $singleProduct->name; ?>
                                </h3>

                                <ul>
                                    <li>
                                    <?php echo $singleProduct->category->name; ?>
                                    </li>
                                    <li>
                                        <?php echo $singleProduct->price; ?>
                                    </li>

                                    <li>
                                       Disponibili: <?php echo $singleProduct->availability; ?>
                                    </li>
                                    
                                    <?php
                                        if(get_class($singleProduct) == 'Toy'){ 
                                    ?>
                                    
                                    <li>
                                        Materiale: <?php echo $singleProduct->material; ?>
                                    </li>
                                    
                                    <?php
                                        }
                                        else if(get_class($singleProduct) == 'Food'){
                                    ?>

                                    <li>
                                        Data di Scadenza: <?php echo $singleProduct->expirationDate; ?>
                                    </li>

                                    <?php
                                        }
                                    ?>
                                </ul>

                                <p>
                                    <?php echo $singleProduct->description; ?>
                                </p>
                                
                            </div>
                        </div>
                    </div>   
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>


    </body>
</html>