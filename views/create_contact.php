<html>
<head>
    <title>Contact Created</title>
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
        <p><a href="/">Home</a></p>
    </div>
</body>
</html>
