<x-layout>

    <h2>Registration</h2>
    <br>
    <form action="/students" method="post">


        @csrf
        <div>
            <label type="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
        </div>
        <br>

        <div>
            <label type="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <br>
        </div>

        <br>
        <div>
            <label for="grade_id">Grade Id</label>
            <select id="grade_id" name="grade_id">
                @foreach ($grades as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <br>


        <input type="submit" class="btn btn-primary">
        


    </form>

    {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
       
        <div class="row bg-info py-5">
            <div class="col-6">
                <h2>Registration</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Address:</label>
                        <textarea class="form-control" name="address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="form-label">Gender:</label>
                        <select class="form-control" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" name="department" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="parttime">
                        <label class="form-check-label" for="parttime">Part-time Student</label>
                    </div>

                    <div class="form-group">
                        <label for="joined_date" class="form-label">Joined Date:</label>
                        <input type="date" class="form-control" name="joined_date" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <h3>Registered Students</h3>
                <ul class="list-group">
                    <li class="list-group-item">John Doe - john@example.com - 2023-01-15</li>
                    <li class="list-group-item">Jane Smith - jane@example.com - 2023-02-20</li>
                    <li class="list-group-item">Alex Johnson - alex@example.com - 2023-03-25</li>
                </ul>
                
            </div>
        </div>
    </div>
</body>
</html> --}}


    {{-- 
    <!DOCTYPE html>
    <html>

    <head>
        <title>Add New Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body style="background-color:violet">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="main-content my-5">
                    <h1>Add New Student</h1>
                    <div class="alert alert-success">
                        Success Message!
                    </div>
                    <form action="" method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                        <br>
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" class="form-control" required>
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control" required>
                        <br>
                        <label for="gender">Gender:</label>
                        <select name="gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <br>
                        <label for="courses">Department:</label>
                        <input type="text" name="department" class="form-control" required>
                        <br>
                        <label for="part_time">Is Part-Time Student:</label>
                        <input type="checkbox" name="parttime" class="form-check-input" value="1">
                        <br><br>
                        <label for="joining_date">Joining Date:</label>
                        <input type="date" name="joining_date" class="form-control" value="">
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success">Add Student</button>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-end">
                                        <a href="/student-list" class="btn btn-primary">View List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html> --}}




</x-layout>
