<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
{{--@include('home-page.nav')--}}
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @yield('content')

            {{--<h1 class="my-4">Page Heading--}}
                {{--<small>Secondary Text</small>--}}
            {{--</h1>--}}

            {{--<!-- Blog Post -->--}}
            {{--<div class="card mb-4">--}}
                {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{--<div class="card-body">--}}
                    {{--<h2 class="card-title">Post Title</h2>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>--}}
                    {{--<a href="#" class="btn btn-primary">Read More &rarr;</a>--}}
                {{--</div>--}}
                {{--<div class="card-footer text-muted">--}}
                    {{--Posted on January 1, 2017 by--}}
                    {{--<a href="#">Start Bootstrap</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Blog Post -->--}}
            {{--<div class="card mb-4">--}}
                {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{--<div class="card-body">--}}
                    {{--<h2 class="card-title">Post Title</h2>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>--}}
                    {{--<a href="#" class="btn btn-primary">Read More &rarr;</a>--}}
                {{--</div>--}}
                {{--<div class="card-footer text-muted">--}}
                    {{--Posted on January 1, 2017 by--}}
                    {{--<a href="#">Start Bootstrap</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Blog Post -->--}}
            {{--<div class="card mb-4">--}}
                {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{--<div class="card-body">--}}
                    {{--<h2 class="card-title">Post Title</h2>--}}
                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>--}}
                    {{--<a href="#" class="btn btn-primary">Read More &rarr;</a>--}}
                {{--</div>--}}
                {{--<div class="card-footer text-muted">--}}
                    {{--Posted on January 1, 2017 by--}}
                    {{--<a href="#">Start Bootstrap</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Pagination -->--}}
            {{--<ul class="pagination justify-content-center mb-4">--}}
                {{--<li class="page-item">--}}
                    {{--<a class="page-link" href="#">&larr; Older</a>--}}
                {{--</li>--}}
                {{--<li class="page-item disabled">--}}
                    {{--<a class="page-link" href="#">Newer &rarr;</a>--}}
                {{--</li>--}}
            {{--</ul>--}}

        </div>

        {{--<!-- Sidebar Widgets Column -->--}}
        {{--<div class="col-md-4">--}}

            {{--<!-- Search Widget -->--}}
            {{--<div class="card my-4">--}}
                {{--<h5 class="card-header">Search</h5>--}}
                {{--<div class="card-body">--}}
                    {{--<div class="input-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                        {{--<span class="input-group-btn">--}}
                {{--<button class="btn btn-secondary" type="button">Go!</button>--}}
              {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Categories Widget -->--}}
            {{--<div class="card my-4">--}}
                {{--<h5 class="card-header">Categories</h5>--}}
                {{--<div class="card-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<ul class="list-unstyled mb-0">--}}
                                {{--<li>--}}
                                    {{--<a href="#">Web Design</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">HTML</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Freebies</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<ul class="list-unstyled mb-0">--}}
                                {{--<li>--}}
                                    {{--<a href="#">JavaScript</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">CSS</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Tutorials</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Side Widget -->--}}
            {{--<div class="card my-4">--}}
                {{--<h5 class="card-header">Side Widget</h5>--}}
                {{--<div class="card-body">--}}
                    {{--You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
{{--@include('home-page.footer')--}}

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
