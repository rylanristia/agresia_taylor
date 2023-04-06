<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('includes.styles')

    <title>@yield('title')</title>

</head>

<body>

    <!-- navbar  -->
    @include('includes.navbar')
    <!-- end of navbar  -->

    <main>

        @yield('content')

    </main>

    <!-- footer -->
    @include('includes.footer')
    <!-- end of footer  -->


    @include('includes.scripts')
</body>

</html>
