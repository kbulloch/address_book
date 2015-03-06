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

    //home page route
    $app->get("/", function() use ($app) {
        //render the home page
        return $app['twig']->render('address_book_template.php', array('contacts' => Contact::getAll()));
    });

    //create a new contact route
    $app->post("/create_contact", function() use ($app) {

        //create a new contact based on user input
        $contact = new Contact($_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['address']);
        $contact->save();

        //render the new contact page
        return $app['twig']->render('create_contact.php', array('newcontact' => $contact));

    });

    //search in contacts route
    $app->post("/search_contacts", function() use ($app) {

        //get user search input
        $name_query = strtoupper($_POST['name_query']);

        //send matching contacts to new array
        $matching_contacts = array();
        foreach ($_SESSION['list_of_contacts'] as $searched_contact) {
            if (strtoupper($searched_contact->getLastName()) == $name_query || strtoupper($searched_contact->getFirstName()) == $name_query) {
                array_push($matching_contacts, $searched_contact);
            }
        }

        //render the search results page
        return $app['twig']->render('search_contacts.php', array('matching_contacts' => $matching_contacts));

    });

    //delete all cotacts route
    $app->post("/delete_all", function() use ($app) {

        //delete all contacts
        Contact::deleteAll();
        return $app['twig']->render('delete_all.php');

    });

    return $app;
?>
