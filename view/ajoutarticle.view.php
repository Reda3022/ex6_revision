<?php include './view/header.view.php' ?>
<main>
    <div>
        <ul>
            <?php foreach ($erreurs as $e): ?>
                <li>
                    <?php echo $e; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--action ="" : traitement sur la page en cours-->
    <form action="" method="post">

        <p>
            <label for="categorie">Categorie *</label>
            <!--<input type="text" id="categorie" name="categorie" value ="<?php /*echo $categorie; */ ?>" >-->
            <select name="cat" id="cat">
                <option value="">--Please choose Categorie--</option>
                <?php foreach ($data1 as $d): ?>
                    <option value=" "><?php echo $d['nom'] ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label for="description">description *</label>
            <input type="text" id="description" name="desc" value="<?php echo $description; ?>">
        </p>

        <p>
            <label for="prix">Prix</label>
            <input type="text" id="prix" name="prix" value="<?php echo $prix; ?>">
        </p>


        <p>
            <label for="image">Image</label>
            <input type="text" id="image" name="image" value="<?php echo $image; ?>">
        </p>
        <label for="eval">evaluation *</label>
        <select name="eval" id="eval">
            <option value="">--Please choose evaluation--</option>
            <?php foreach ($data as $d): ?>
                <option value=" "><?php echo $d['evaluation'] ?></option>
            <?php endforeach; ?>
        </select>


        <p>
            <button type="submit" name="btbEnvoi" value="envoi">Ajouter</button>
        </p>


        <!--utilisable pour la détection de la réception du formulaire-->
        <input type="hidden" name="frm1" value="frm1">

    </form>
</main>

<?php include './view/footer.view.php' ?>

