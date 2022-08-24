<!--
    for loop
    foreach loop
    for else loop
    wile loop
--->

@for ($i=0; $i<=10; $i++)
    <h2>La valeur de i est : {{ $i }}</h2>
@endfor

@foreach ($coord as $item)
    <p>{{ $item }}</p>
@endforeach