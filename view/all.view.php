<main>
	<h2>Vue liste</h2>



	<table>

        <?php foreach ($data as $d):?>
            <tr>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['categorie'] ?></td>
                <td><?php echo $d['descr'] ?></td>
                <td><a href="delete.php?id=<?php echo $d['id'] ?>">Sup</a></td>

            </tr>

        <?php endforeach; ?>

    </table>
</main>
