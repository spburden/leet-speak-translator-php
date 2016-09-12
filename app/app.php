<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetSpeak.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/translation", function() use($app){
        $my_translation = new LeetSpeak();
        $translation_result = $my_translation->leetSpeakConvert($_GET['userInput']);
        return $app['twig']->render('translation.html.twig', array('result' => $translation_result));
    });

    return $app;
?>
