<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    //session_start
    session_start();
    if(empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    //new silex object
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('address_book_template.php', array('contacts' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use ($app) {
        return $app['twig']->render('create_contact.php');
    });

    $app->post("/search_contacts", function() use ($app) {
        //return twig render
    });

    return $app;
?>
