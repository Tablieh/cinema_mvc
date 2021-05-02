<h1>Ajouter un Film</h1>
<form action="?ctrl=admin&action=addfilm" method="post">
    
    <p> 
        <label>
            titre: 
            <input type="text" name="titre">
        </label>
    </p>
    <p>
    <label > AnneeDeSortie :
            <input type="date" name="AnneeDeSortie" id="">
    </label>
    </p>
    <p>
        <label>
            duree : 
            <input type="number" step="any" name="duree">
        </label>
    </p>
    <p>
        <label>
            resume :
            <textarea name="resume"></textarea>
        </label>
    </p>
    <p> 
        <label>
            note: 
            <input type="number" step="any" name="note">
        </label>
    </p>
    <p>
        <label>
            img: 
            <input type="text" name="img">
        </label>
    </p>
    <p>
        <label>
            trailer: 
            <input type="text" name="trailer">
        </label>
    </p>
    
    <p>
        <input type="submit" name="submit" value="Ajouter le Film">
    </p>
</form>
