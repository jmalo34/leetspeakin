<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakTranslator.php";

    $app = new Silex\Application();
    $app['debug'] = TRUE;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app)
    {
        return $app['twig']->render('leetspeak.html.twig');
    });

    $app->get('translated', function() use($app)
    {
        $my_LeetspeakTranslator = new LeetspeakTranslator;
        $translated = $my_LeetspeakTranslator->translate($_GET['phrase']);
        return $app['twig']->render('translated.html.twig', array('phrase' => $translated));
    });

    return $app;

 ?>
