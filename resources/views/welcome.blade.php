<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Tech Carnival 2022</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="/css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="body"></div>
    </div>
    <div class="row body">
        <div class="box">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="border: 1px solid #ddd;padding:50px;margin-top:50px;">
                <h2 style="margin-top:50px;text-align:center;">Tech Carnival 2022</h2>

                <form style="margin-top:50px;text-align:center" method="get" action="{{ route('register') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-success">Register</button>
                </form>
                <form style="margin-top:20px;text-align:center" method="get" action="{{ route('login') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-success">Log in</button>
                </form>
                <form style="margin-top:20px;text-align:center" method="get" action="{{ route('checkin') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-success">Test</button>
                </form>

            </div>
        </div>
    </div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
</body>

</html>