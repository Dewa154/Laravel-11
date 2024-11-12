@include('common.header')
<h1>About Page</h1>

<!-- @includeif('common.inner', ['page' => "This is About page"]);  -->

<x-message-banner msg="About User Message" />

<h3>
    Last URL : {{url()->current()}}
</h3>
<h3>
    Last URL : {{url()->previous()}}
</h3>

@include('common.inner', ['page' => "This is About page"]);
 
