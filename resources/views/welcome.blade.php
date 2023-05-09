<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

        <header>
            <nav>
            <h1>La mia prima web page in Laravel</h1>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('sponsor')}}">Sponsor</a></li>
                </ul>
            </nav>
        </header>

        

        <main>
            <p>{{$welcome_message}}</p>

            <h3>Linguaggi:</h3>
            <ul>
                @foreach ($Linguaggi as $linguaggio)
                    <li>{{$linguaggio}}</li>
                @endforeach
            </ul>

            <h3>Studenti:</h3>
            @if (count($students) == 0)
                <h4>Nessuno studente</h4>
            @else
                <ul>
                    @foreach ($students as $student)
                        <li>{{$student}}</li>
                    @endforeach
                </ul>
            @endif
            
        </main>

    </body>
</html>