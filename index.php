<?php

    require_once __DIR__."/Models/Product.php";    
    require_once __DIR__."/Models/Food.php";
    require_once __DIR__."/Models/Toys.php";
    require_once __DIR__."/Models/DogHouse.php";
    require_once __DIR__."/Models/User.php";


    $productArray = [];

    try {
        $toyOne = new Toys('Osso di Gomma', 'https://www.shoppypet.com/4501/ferplast-pa-6408-osso-in-termoplastica-per-cani.jpg', 5, 'Cane', 25, 'Bone è la risposta per i cani che prediligono la classica forma ad osso', 4 ,'Gomma', true);

        // var_dump($toyOne);

        $productArray[] = $toyOne;

    } 
    catch (Exception $e) {
        echo $e->getMessage();
    }

    try {

        $dogHouseOne = new DogHouse('Letto Mochi', 'https://m.media-amazon.com/images/I/61Pn7D5S4JL._AC_UF1000,1000_QL80_.jpg', 10, 'Gatto', 15, 'Letto rotondo antistress Mochi per gatti e cani di tg piccola', 5 ,'Gomma', 55);

        // var_dump($dogHouseOne);

        $productArray[] = $dogHouseOne;

    } catch (Exception $e) {

        echo '<br><br>'.$e->getMessage();

    }

    try { 

        $foodOne = new Food('Royal Canin', 'https://arcaplanet.vtexassets.com/arquivos/ids/288255/_0006_mini-adult.jpg?v=638242443211300000', 3, 'Cane', 50, 'Le crocchette di Salmone e Riso sono un alimento completo per cani di tutte le taglie', 2 ,'2024-05-05', 'Salmone e Riso', 1000);

        // var_dump($foodOne);

        $productArray[] = $foodOne;

        
    } catch (Exception $e) {
        echo '<br><br>'.$e->getMessage();
    }

    // var_dump($productArray);
    
    $expireDateTwo = new DateTime("2024-12-25");
    $userTwoCreditCard = new CreditCard("Visa", $expireDateTwo);

    $userTwo = new User('Nicola', 'nicola@gmail.com', 'verystrongpassword', $userTwoCreditCard);
    // var_dump( $userTwo );

    function payByCard($user) {

        $today = new DateTime();

        if ($today < $user->userTwoCreditCard->expireDate) {
            echo 'ATTENZIONE: La carta di credito è scaduta';
        } else {
            echo 'Che bello puoi pagare amico mio';
        } 

    }

    // echo payByCard($userTwo);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP OOP 2</title>
</head>
<body>
    <header>
        <h1 class="text-center">
            Il regno degli Animali
        </h1>
    </header>

    <main>
        <section class="container mt-3">

            <div class="row">

                <h3 class="mb-3">
                    I Nostri Prodotti:
                </h3>

                    <div class="col-12 d-flex justify-content-around">

                        <?php
                            foreach ($productArray as $product) {
                        ?>

                            <div class="card col-3" style="width: 18rem;">
                                <img src="<?php
                                            echo $product->img;
                                        ?>" class="card-img-top border-bottom" alt="img">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                            echo $product->name;
                                        ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                            echo $product->description;
                                        ?>
                                    </p>
                                    <h6>
                                        <span>
                                            Prezzo:
                                        </span>
                                        <?php
                                        if ($userTwo->name !== null && $userTwo->email !== null && $userTwo->password !== null) {
                                            echo  $product->getDiscount();
                                        }
                                        ?>
                                        €
                                    </h6>
                                    <?php 
                                        if (get_class($product) == 'Toys') {                                 
                                    ?>
                                    <p>
                                        Materiale: <?php echo $product->material; ?>
                                    </p>
                                    <?php 
                                        } 
                                        else if (get_class($product) == 'Food') {                                 
                                    ?>
                                    <p>
                                        Data di scadenza: <?php echo $product->expireDate; ?>
                                    </p>
                                    <?php 
                                        } 
                                        else if (get_class($product) == 'DogHouse') {                                 
                                    ?>
                                    <p>
                                        Dimensioni: <?php echo $product->size; ?>
                                    </p>
                                    <?php 
                                        } 
                                    ?>

                                    <p class="card-text">
                                        <span>
                                            Per: 
                                        </span>
                                        <?php
                                            echo $product->category;
                                        ?>
                                    </p>
                                    <p class="card-text">
                                        <span>
                                            Categoria: 
                                        </span>
                                        <?php
                                            echo $product->printClass();
                                        ?>
                                    </p>
                                </div>
                            </div>
                                
                        <?php
                            }
                        ?>

                    </div>

            </div>

        </section>
    </main>
</body>
</html>