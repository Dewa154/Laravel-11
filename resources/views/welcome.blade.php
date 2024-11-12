<h1>Welcome Page</h1>
<!-- <a href="/about">About</a> -->
 <a href="{{URL::to('/about')}}">About</a>
 <br>
 <a href="{{URL::to('/home')}}">Home</a>

<br>
 <a href="{{URL::to('about-user', ['anil'])}}">About Anil</a>
 <br>

 <a href="{{url('home/profile/anil') }}">Go To Anil Page</a>
 <br>
