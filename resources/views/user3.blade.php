<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <h1>
        User Login
    </h1>
    <form action="/user3" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Login</button>
    </form>
</div>
