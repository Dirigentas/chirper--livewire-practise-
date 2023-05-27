<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
</head>

<body>
    <livewire:counter />
    <br>
    <livewire:show-posts />
    <br>
    <livewire:post.show :chirps="$chirps" />





    @livewireScripts
</body>

</html>
