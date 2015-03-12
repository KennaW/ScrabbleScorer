<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabbler.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/score", function() use ($app){
            $userWord = $_GET['wordinput'];
            $wordScore = new Scrabbler();
            $your_score = $wordScore->calculateScore($userWord);
            return $app['twig']->render('score.twig', array('result' => $your_score));


    });

    return $app;
?>
