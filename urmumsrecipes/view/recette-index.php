{{ include('header.php', {title: 'Accueil'}) }}
<body>
    <h1>Recettes</h1>
    <div class="table-container">
        <table>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Ingrédients</th>
                <th>Étapes de préparation</th> 
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            {% for recette in recettes %}
                <tr>
                    <td><a href="{{path}}recette/show/{{ recette.id }}">{{ recette.nom }}</a></td>
                    <td>{{ recette.description }}</td>
                    <td>{{ recette.ingredient }}</td>
                    <td>{{ recette.etapes }}</td> 
                    <td>
                    <a href="{{path}}recette/edit/{{ recette.id }}" class="btn">Modifier</a></td>
                    </td>
                    <td>
                        <form action="{{path}}recette/destroy" method="post">
                            <input type="hidden" name="id" value="{{recette.id}}">
                            <input type="submit" value="Delete" class="btn">
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </table>
    </div>
    <a href="{{path}}recette/create" class="btn-add">Ajouter une recette</a>
</body>
</html>

