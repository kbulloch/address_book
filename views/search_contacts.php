<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Search Results</h1>
        {% for contact in matching_contacts %}
            <ul>
                <li>{{ contact.getLastName }}, {{ contact.getFirstName }}</li>
                <ul>
                    <li>{{ contact.getPhoneNumber }}</li>
                    <li>{{ contact.getAddress }}</li>
                </ul>
            </ul>
        {% endfor %}
        <p><a href="/">Home</a></p>
    </div>
</body>
</html>
