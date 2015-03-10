<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagram.php";

    use Symfony\Component\Debug\Debug;
Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_result", function() use($app) {
         $input_word = new Anagram;
         //$possible_matches= new Anagram;
         $final_result = $input_word->generateAnagram($_GET['input_word'], $_GET['possible_matches']);

         return $app['twig']->render('view_result.twig', array( 'result' => $final_result));
    });

    // $app->get("/view_result", function() use($app) {
    //      return $app['twig']->render("/");
    // });
    // $app->get("/", function() use ($app) {
    //     return $app['twig']->render('form.twig');
    // });
    //
    // $app->get("/view_title_case", function() use($app) {
    //     $my_TitleCaseGenerator = new TitleCaseGenerator;
    //     $title_cased_phrase = $my_TitleCaseGenerator->makeTitleCase($_GET['phrase']);
    //     return $app['twig']->render('title_cased.twig', array('result' => $title_cased_phrase));
    // });

    return $app;
?>
