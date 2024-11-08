<div>
    <!-- Well begun is half done. - Aristotle -->
    <h2>User Form</h2>

    <!-- <div>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div style="color:red">
            {{$error}}
        </div>
        @endforeach
        @endif
    </div> -->

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username" value="{{old('username')}}"
            class="{{$errors -> first('username') ? 'input-error' : ''}}" >
            <span style="color:red" >@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="email" value="{{old('email')}}" 
            class="{{$errors -> first('email') ? 'input-error' : ''}}" >
            <span style="color:red" >@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="city" value="{{old('city')}}" 
            class="{{$errors -> first('city') ? 'input-error' : ''}}" >
            <span style="color:red" >@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>User Skills</h4>
            <input type="checkbox" name="skills" value="PHP" id="php">
            <label for="php">PHP</label>

            <input type="checkbox" name="skills" value="Node" id="node">
            <label for="node">NODE</label>

            <input type="checkbox" name="skills" value="Java" id="java">
            <label for="java">JAVA</label>
    
            <span style="color:red" >@error('skills'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button class="button" >Add New User</button>
        </div>
    </form>
</div>

<style>
    input {
        border: black 1px solid;
        border-radius: 2px;
        color: black;
    }
    .input-wrapper{
        margin: 10px;
    }

    .button{
        border: black 1px solid;
        height: 25px;
        width: 150px;
        border-radius: 2px;
        color: black;
        background-color: #f2f2f2;
        cursor: pointer;
        margin: 10px;
    }
    .input-error{
        border: red 1px solid;
        border-radius: 2px;
        color: red;
    }
</style>
