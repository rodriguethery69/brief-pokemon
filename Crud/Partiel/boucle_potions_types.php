<?php foreach ($potions as $potion): ?>
    
    <tr>
        <th scope="row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked />
            </div>
        </th>
        <td>
            <?= $potion['titre'] ?>
        </td>
        <td>
            <?= $potion['prix'] ?>
        </td>
        <td>
            <?= $potion['nom_type'] ?>
        </td>
        <td>
            <a class="btn btn-primary" href="edit.php?id=<?php echo $potion['ID']; ?>">Editer</a>
        </td>
        <td>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $potion['ID']; ?>">Supprimer</a>
        </td>
    </tr>

<?php endforeach; ?>