<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body style="margin-top: 50px;">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="/crud/classes">Laravel Table Admin Demo</a>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/crud/classes">classes</a></li>
                <li><a href="/crud/nationalities">nationalities</a></li>
                <li><a href="/crud/riders">riders(with foreign key)</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <h2>@yield('title')</h2>
    <?php if (!empty($message)): ?>
        <div class="alert alert-<?= e($message['type']) ?> alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= e(HTML::transform($message['text'])) ?>
        </div>
    <?php endif; ?>
    @yield('sub_content')
</div>
<div id="footer">
    <div class="container">
        <p class="pull-right">
          Github: <a href="https://github.com/shin1x1/laravel-table-admin">Laravel-Table-Admin</a><br>
          Laravel: v<?= e(\Illuminate\Foundation\Application::VERSION) ?><br>
        </p>
    </div>
</div>
</body>
</html>