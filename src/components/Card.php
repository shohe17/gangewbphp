<!-- Card -->
<div class="card">

    <!-- Card image -->
    <img class="card-img-top" src="<?php echo $post['image_at']; ?>" alt="Card image cap">

    <!-- Card content -->
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title"><a><?php echo $post['title']; ?></a></h4>
            <div>
                <a method="post" href="/posts/delete.php?id=<?php echo $post['id']; ?>">
                    <i class="fas fa-trash text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                </a>
                <a href="/posts/edit.php?id=<?php echo $post['id']; ?>">
                    <i class="fas fa-pen text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                </a>
            </div>
        </div>
        <hr>
    </div>
    <!-- Card footer -->
    <div class="rounded-bottom lighten-3 text-center pt-3">
        <ul class="list-unstyled list-inline font-small">
            <li class="list-inline-item pr-2 grey-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
            <li class="list-inline-item pr-2"><a href="#" class="grey-text"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item"><a href="#" class="grey-text"><i class="far fa-heart pr-1"> </i>5</a></li>
        </ul>
    </div>

</div>
<!-- Card -->