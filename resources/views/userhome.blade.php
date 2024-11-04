<h1>User Home</h1>
<h1>{{$user}}</h1>

<!-- <h1>{{rand()}}</h1> -->
<!-- <h2>{{$users[1]}}</h2> -->

@if ($user == 'anil')
    <h2>This is anil</h2>
@elseif ($user == 'same')
    <h2>This is same</h2>
@else 
    <h2>This is other user</h2>
@endif


<div>
    @foreach($users as $user)
    <h3>{{ $user }}</h3>
    @endforeach
</div>

<div>
    @for($i =0; $i<10; $i++)
    <h3>{{ $i }}</h3>
    @endfor
</div>

<!-- we write without blade templete so do this. But Never write like this  -->
<!-- <h1><?php echo $user ?></h1> -->