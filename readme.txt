 <?php foreach ($data as $item) : ?>

          <tr>
            <td><?= $sl ?></td>
            <td><img src="https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png" alt=""></td>
            <td><?php echo $item->PLAYERID; ?></td>
            <td><?php echo $item->FULLNAME; ?></td>
            <td><?php echo $item->CLUBNAME; ?></td>
            <td><?php echo $item->DOB; ?></td>
            <td><?php echo $item->POSITION; ?></td>
            <td><?php echo $item->NATIONALITY; ?></td>
            <td><?php echo $item->NUMBER; ?></td>
            <td>
              <span class="action_btn">
                <a href="?action=show&PLAYERID=<?= $item->PLAYERID ?>">Edit</a>
                <a href="?action=delete&playerId=<?= $item->PLAYERID ?>">Remove</a>
              </span>
            </td>
          </tr>
          <?php $sl = $sl + 1 ?>
<?php endforeach; ?>