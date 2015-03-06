<html>
<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Your Address Book</h1>
        <h2>Create a new contact</h2>
            <form action="/create_contact" method="post">
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input id="first_name" name="first_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input id="last_name" name="last_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone number</label>
                    <input id="phone_number" name="phone_number" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" name="address" class="form-control" type="text">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
    </div>
</body>
</html>