@include('common.header')
<h1>About Page</h1>
<h1>Software Developer is {{$user}}</h1>

<h3>
    Current URL : {{url()->current()}}
</h3>
<h3>
    Last URL : {{url()->previous()}}
</h3>

@include('common.inner', ['page' => "This is User-About page"]);
