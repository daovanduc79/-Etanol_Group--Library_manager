<?php

include 'view/layout/nav_2.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="container">
    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
            <tr>
                <th scope="col">Borrow</th>
                <th scope="col">Student</th>
                <th scope="col">Book Borrow</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($borrows as $borrow): ?>
                    <td>
                        <figure class="media">
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">Borrow</h6>
                                <dl class="param param-inline small">
                                    <dt>Borrow ID :</dt>
                                    <dd><?php echo $borrow->id; ?></dd>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Borrow Date</dt>
                                    <dd><?php echo $borrow->borrow_date; ?></dd>
                                </dl>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Return Date</dt>
                                    <dd><?php echo $borrow->return_date; ?></dd>
                                </dl>
                            </figcaption>
                        </figure>
                    </td>

                    <td>
                        <?php foreach ($students as $key => $student): ?>
                            <figure class="media">
                                <div class="img-wrap"><img src="<?php echo $student->img; ?>"></div>
                                <figcaption class="media-body">
                                    <h6 class="title text-truncate">Student</h6>
                                    <dl class="param param-inline small">
                                        <dt>Student ID :</dt>
                                        <dd><?php echo $student->id; ?></dd>
                                    </dl>
                                    <dl class="param param-inline small">
                                        <dt>Name :</dt>
                                        <dd><?php echo $student->name; ?> </dd>
                                    </dl>
                                    <dl class="param param-inline small">
                                        <dt>Class :</dt>
                                        <dd><?php echo $student->class; ?> </dd>
                                    </dl>
                                    <dl class="param param-inline small">
                                        <dt>Email :</dt>
                                        <dd><?php echo $student->email; ?> </dd>
                                    </dl>
                                </figcaption>
                            </figure>
                        <?php endforeach; ?>
                    </td>

                    <td>
                    <?php foreach ($books as $key => $book): ?>
                        <figure class="media">
                            <div class="img-wrap"><img src="<?php echo $book->img; ?>"></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">Book</h6>
                                <dl class="param param-inline small">
                                    <dt>Book ID:</dt>
                                    <dd><?php echo $book->id; ?></dd>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Name :</dt>
                                    <dd><?php echo $book->name; ?> </dd>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Category :</dt>
                                    <dd><?php echo $book->category; ?> </dd>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Status :</dt>
                                    <dd><?php echo $book->status; ?> </dd>
                                </dl>
                            </figcaption>
                        </figure>
                        </td>
                    <?php endforeach; ?>
                    <td>
                        <?php echo $borrow->amount; ?>
                    </td>
                    <td>
                        <?php echo $borrow->status; ?>
                    </td>
                    <td class="text-right">
                        <a title="" href="./index.php?pages=edit_book&id=<?php echo $borrow->id; ?>"
                           class="btn btn-success btn-sm">Edit</a>
                        <a href="./index.php?pages=delete_book&id=<?php echo $borrow->id; ?>"
                           class="btn btn-danger btn-sm"> × Remove</a>
                    </td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</article>