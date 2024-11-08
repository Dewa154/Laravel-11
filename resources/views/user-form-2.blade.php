<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
     <h1>Add New User Part-2</h1>

     <form action="adduser2" method="post">
        @csrf
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">NODE</label>
            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">JAVA</label>
        </div>

        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">MALE</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">FEMALE</label>
            <input type="radio" name="gender" value="Trans-gender" id="trans-gender">
            <label for="trans-gender">Trans-Gender</label>
        </div>

        <div>
            <h5>City</h5>
            <select name="city" id="">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
            </select>
        </div>

        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="100" >
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
     </form>
</div>
