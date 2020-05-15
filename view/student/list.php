<?php

include 'view/layout/nav_2.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
    <div class="col-md-12">
        <div class="">
            <form class="classNameHere" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                    <div class="input-group-btn">
                        <a href="index.php?pages=book&actions=add" class="btn btn-success btn-sm"
                           style="margin-left: 590px">Thêm mới</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="">
            <div class="card">
                <table class="table table-hover shopping-cart-wrap">
                    <thead class="text-muted">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col" width="200" class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <a href="#">
                        <?php foreach ($students as $key => $student): ?>
                            <tr>
                                <td><?php echo ++$key ?></td>
                                <td>
                                    <h6 class="title text-truncate"><?php echo $student->img ?></h6>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price"><?php echo $student->name ?></var>
                                    </div>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price"><?php echo $student->email ?></var>
                                    </div>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price"><?php echo $student->status ?></var>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <a title="" href="./index.php?pages=edit&id=<?php echo $student->id; ?>"
                                       class="btn btn-success btn-sm">Edit</a>
                                    <a href="./index.php?pages=delete&id=<?php echo $student->id; ?>"
                                       class="btn btn-danger btn-sm"> × Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </a>
                    </tbody>
                </table>
            </div>
        </div> <!-- card.// -->
    </div>
</div>
<!--container end.//-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>