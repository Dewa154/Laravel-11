<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <h1>User2 Form</h1>

    <!-- //Get Method
    <form action="/user2" method="get">
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form> -->


    <!-- //Post Method -->
    <!-- <form action="/user2" method="post">
    @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form> -->


    <!-- //PUT Method -->
    <!-- <form action="/user2" method="post">
        <input type="hidden" name="_method" value="PUT">
    @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form> -->


    <!-- //PATCH Method -->
    <!-- <form action="/user2" method="post">
        <input type="hidden" name="_method" value="PATCH">
    @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form> -->


    <!-- //Delete Method -->
    <!-- <form action="/user2" method="post">
        <input type="hidden" name="_method" value="put">
    @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form> -->


    <!-- //for match function -->
    <form action="/user2" method="post">
    <input type="hidden" name="_method" value="patch">
    @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Submit</button>
    </form>

</div>
