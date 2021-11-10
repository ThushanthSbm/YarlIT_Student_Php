<h1>Create</h1>

<form action ="{{route('employees.store')}}" method = "POST">

@csrf
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname">
<br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname">
<br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">
<br>
<label for="bsalary">Basic Salary</label>
<input type ="text" name="bsalary" id="bsalary">
<br>
<input type="submit" value="Save">
</form>