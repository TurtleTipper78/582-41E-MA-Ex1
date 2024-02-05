
{{ include('header.php', {title: 'Modifier la recette'}) }}
<body>
    <div class="form-container">
        <form action="/582-41E-MA-Ex1-/urmumsrecipes/recette/update" method="post">
            <input type="hidden" name="id" value="{{ recette.id }}">
            <label>Nom
                <input type="text" name="nom" value="{{ recette.nom }}">
            </label>
            <label>Description
                <input type="text" name="description" value="{{ recette.description }}">
            </label>
            <label>Ingrédients
                <input type="text" name="ingredient" value="{{ recette.ingredient }}">
            </label>
            <label>Étapes de préparation
                <input type="text" name="etapes" value="{{ recette.etapes }}">
            </label>

            <input type="submit" value="Save" class="btn">
        </form>
    </div>
</body>
</html>
