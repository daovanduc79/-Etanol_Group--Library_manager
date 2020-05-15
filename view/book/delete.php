<?php
include 'view/layout/nav.php';
?>
<div class="container">
    <div class="col-md-12">
        <h1>Are you sure you want to delete this book?</h1>
        <h3><?php echo $books->name; ?></h3>
        <form action="index.php?pages=book&actions=delete" method="post">
            <input type="hidden" name="id" value="<?php echo $books->id; ?>"/>
            <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-danger"/>
                <a class="btn btn-default" href="index.php">Cancel</a>
            </div>
        </form>
    </div>
</div>