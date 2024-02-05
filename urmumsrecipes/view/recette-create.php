{{ include('header.php', {title: 'Ajouter une recette'}) }}
<body>
    <div class="form-container">
        
        <form action="{{path}}store" method="post">
            <label>Nom
                <input type="text" name="nom">
            </label>
            <label>Description
                <input type="text" name="description">
            </label>
            <label>Ingrédients
                <input type="text" name="ingredient">
            </label>
            <label>Étapes de préparation
                <input type="text" name="etapes">
            </label>
     
            <input type="submit" value="Save" class="btn">
        </form>
    </div>
</body>
</html>
