<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Recettes </title>
</head>
<body>
{% for recette in recettes %}

    <h1> {{ recette.nom }} </h1>
    <p> {{ recette.description }} </p>
    <p> {{ recette.ingredient }} </p>
    <p> {{ recette.etapes }} </p>

  {% endfor %}
</body>
</html>