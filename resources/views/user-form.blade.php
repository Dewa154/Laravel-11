<div>
    <!-- Well begun is half done. - Aristotle -->
    <h2>User Form</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username" >
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="email" >
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="city" >
        </div>
        <div>
            <button class="button" >Add New User</button>
        </div>
    </form>
</div>

<style>
    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper{
        margin: 10px
    }

    .button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #f2f2f2;
        cursor: pointer;
        margin: 10px;
    }
</style>
