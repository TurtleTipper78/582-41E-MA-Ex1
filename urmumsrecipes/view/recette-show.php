{{ include('header.php', {title: 'Détails de la recette'}) }}
<body>
<h1>Détails de la recette</h1>
    <div class="table-container">
        <table>
        <th>Nom</th>
                <th>Description</th>
                <th>Ingrédients</th>
                <th>Étapes de préparation</th> 
                <th>Delete</th>
            </tr>
            <tr>
                    <td><a href="#">{{ recette.nom }}</a></td>
                    <td>{{ recette.description }}</td>
                    <td>{{ recette.ingredient }}</td>
                    <td>{{ recette.etapes }}</td> 
                    <td>
                <form action="/582-41E-MA-Ex1-/urmumsrecipes/recette/destroy" method="post">
                    <input type="hidden" name="id" value="{{recette.id}}">
                    <input type="submit" value="Delete" class="btn">
                </form>
        </table>
    </div>
</body>
</html>
