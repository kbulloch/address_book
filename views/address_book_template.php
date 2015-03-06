<html>
<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Your Address Book</h1>
        <h3>Create a new contact</h3>
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

        {% if contacts is empty %}
            <h4>Your address book is currently empty.  Add a contact!</h4>
        {% endif %}

        {% if contacts is not empty %}

            <h3>Search within your contacts</h3>
            <form action="/search_contacts" method="post">
                <div class="form-group">
                    <label for="name_query">Enter first or last name</label>
                    <input id="name_query" name="name_query" class="form-control" type="text">
                </div>
                <button type="submit" class="btn btn-info">Search</button>
            </form>

            <h3>Your contacts</h3>
            <ul>
            {% for contact in contacts %}
                <li>{{ contact.getLastName }}, {{ contact.getFirstName }}</li>
                <ul>
                    <li>{{ contact.getPhoneNumber }}</li>
                    <li>{{ contact.getAddress }}</li>
                </ul>
            {% endfor %}
            </ul>
            <br>

            <form action="/delete_all" method="post">
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Clear contact list</button>
                </div>
            </form>

        {% endif %}
    </div>
</body>
</html>
