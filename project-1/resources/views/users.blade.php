<h1>User Page</h1>
@if ($user == 'mamun')
    <h4>hello {{ $user }}</h4>
@elseif($user == 'apu')
    <h4>hi {{ $user }}</h4>
@endif

@for ($i = 1; $i <= 10; $i++)
    <p>
        {{ $i }}
    </p>
@endfor

@foreach ($users as $user)
    <span>{{ $user }}</span>
@endforeach
