<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class ="d-flex justify-content-end">
                <a href ="{{ url('student') }}" class = "btn btn-primary">student list</a>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto d-grid gap2">
                <form action="{{ url('students', $student->id) }}" method="POST">   
                @csrf
                @method('PUT')
        <div>
            <label class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">phone Number</label>
            <input type="text" name="phone" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control"/>
        </div>

        <ddiv class="form-group mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control"/>
        </div>

        <ddiv class="form-group mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="Province" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Zip Code</label>
            <input type="text" name="Zip" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Birthda</label>
            <input type="date" name="Birthdate" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <button>Save Changes</button>
        </div>
    </div>
</div>    
</form>
</body>
</html>