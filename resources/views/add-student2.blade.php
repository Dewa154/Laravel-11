<div>
    <h1>Add New Student2</h1>
    <form action="added" method="post">
        @csrf 
        <table border="1">
            <tr>
                <td>
                    <label for="name">Name :</label>
                </td>
                <td>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                </td>
                <td>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Phone :</label>
                </td>
                <td>
                    <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone No." required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Add Student2</button>
                </td>
            </tr>
        </table>
    </form>
</div>
