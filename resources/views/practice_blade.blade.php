<h1>How TO use Blade Files</h1>
{{-- <h2>BP'{{ $users }}</h2>,, --}}

@foreach ($users as $user)
    <h5>{{ $user }}</h5>
@endforeach

{{-- Here I am getting the Json Format Data IN That I want to get the 0th Position By Using Script--}}

<script>

    var data = @json($users);
    alert(data[0]);
    console.warn(data[0]);

    </script>