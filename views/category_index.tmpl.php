<select name="category">
    <?php foreach ($this->categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach; ?>
</select>