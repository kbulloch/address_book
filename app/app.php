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

        $contact = new Contact($_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['address']);
        $contact->save();

        return $app['twig']->render('create_contact.php', array('newcontact' => $contact));

    });

    $app->post("/search_contacts", function() use ($app) {
        //return twig render
    });

    $app->post("/delete_all", function() use ($app) {

        Contact::deleteAll();
        return $app['twig']->render('delete_all.php');

    });

    return $app;
?>
