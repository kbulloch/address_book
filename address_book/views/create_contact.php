<html>
<head>
    <title>Create a Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>You created a new contact! Wow. Good job.</h2>
        <p>{{ newcontact.getLastName }}, {{ newcontact.getFirstName }}</p>
        <ul>
            <li>{{ newcontact.getPhoneNumber }}</li>
            <li>{{ newcontact.getAddress }}</li>
        </ul>
    </div>
</body>
</html>
