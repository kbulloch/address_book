<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if(empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

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

        //get user input
        $last_name_query = strtoupper($_POST['last_name_query']);
        //also add first name searching

        $matching_contacts = array();

        //foreach loop thru contact list
        foreach ($_SESSION['list_of_contacts'] as $a_contact) {
            if (strtoupper($a_contact->getLastName()) == $last_name_query) {
                array_push($matching_contacts, $a_contact);
            }
        }

        //output to new array with matching contacts
        //send matching_contacts array to search_contacts.php

        return $app['twig']->render('search_contacts.php', array('matching_contacts' => $matching_contacts))
    });

    $app->post("/delete_all", function() use ($app) {

        Contact::deleteAll();
        return $app['twig']->render('delete_all.php');

    });

    return $app;
?>
