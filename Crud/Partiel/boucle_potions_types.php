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
            <button type="button" class="btn btn-danger btn-sm px-3">
                <i class="fas fa-times"></i>
            </button>
        </td>
    </tr>

<?php endforeach; ?>