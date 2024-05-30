<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.welcome') }}</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>
    <p>{{ __('messages.language') }}</p>
    <ul>
        <li><a href="{{ url('language/en') }}">{{ __('messages.english') }}</a></li>
        <li><a href="{{ url('language/ar') }}">{{ __('messages.arabic') }}</a></li>
    </ul>
</body>
</html>
