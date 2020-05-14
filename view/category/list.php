<?php

include 'view/layout/nav.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container">
    <div class="col-md-12">
        <a href="index.php?pages=category&actions=add" class="btn btn-success btn-sm" style="margin-left: 92.5%">Thêm
            mới</a>
        <div class="card">
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?php echo $category->id ?></td>
                        <td>
                            <h6 class="title text-truncate"><img width="70" height="100"
                                                                 src="images/<?php echo $category->image ?>"</h6>
                        </td>
                        <td>
                            <div class="price-wrap">
                                <var class="price"><?php echo $category->name ?></var>
                            </div>
                        </td>
                        <td class="text-right">
                            <a title="" href="index.php?pages=category&actions=edit&id=<?php echo $category->id; ?>"
                               class="btn btn-success btn-sm">Edit</a>
                            <a href="index.php?pages=category&actions=delete&id=<?php echo $category->id; ?>"
                               class="btn btn-danger btn-sm"> × Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- card.// -->
    </div>
</div>
<!--container end.//-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>