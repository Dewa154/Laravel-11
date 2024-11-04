@include('common.header')
<h1>About Page</h1>
<h1>Software Developer is {{$user}}</h1>

@include('common.inner', ['page' => "This is User-About page"]);
