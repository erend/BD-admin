<br>
<form action="" method="post">
    id записи: <?php echo $_GET['id']; ?><br>
    Название: <input type="text" name="title" value="<?php echo $item['title'];?>"><br>
    Описание: <textarea name="description" rows="5" cols="50"><?php echo $item['description']; ?></textarea><br>
    Цена: <input type="text" name="price" value="<?php echo $item['price'];?>"><br>
    id категории: <input type="text" name="category_id" value="<?php echo $item['category_id'];?>"><br />
    <input type="submit" value="Сохранить" />
</form>