<!DOCTYPE html>
<html lang="pl">
<head>
    @include("includes.head")
</head>
<body>
    @include("includes.header")
<article>
    <div id="content">
        @yield("content")
    </div>
</article>
@include("includes.footer")
</body>
</html>
