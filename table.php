<table border='1'>
    <tr>
        <td>id</td>
        <td>название</td>
        <td>описание</td>
        <td>цена</td>
        <td>id категории</td>
        <td></td>
    </tr>
    <?php
        foreach ($items as $key => $value) {
        	echo "<tr>";
        	echo "<td>" . $value['id'] . "</td>";
        	echo "<td>" . $value['title'] . "</td>";
    		echo "<td>" . $value['description'] . "</td>";
			echo "<td>" . $value['price'] . "</td>";
			echo "<td>" . $value['category_id'] . "</td>";
			$id = $key + 1;
			echo "<td><a href=\"admin.php?id=$id\">Редактировать</a></td>";
        	echo "</tr>";
        }
    ?>
</table>