<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Blood Doner Form</title>

</head>
<body>
<div class="container">
    <p class=" h1 text-center mt-5">Blood Doner Form</p>
    <form class="mt-5" action="{{url('form_req')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="name" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="number" required>
        </div>
        <div class="mb-3">
            <label for="bloodGroup" class="form-label">Blood Group</label>
            <select class="form-select" id="bloodGroup" name="group" required>
                <option value="">Choose...</option>
                <option value="A+">A positive</option>
                <option value="A-">A negative</option>
                <option value="B+">B positive</option>
                <option value="B-">B negative</option>
                <option value="AB+">AB positive</option>
                <option value="AB-">AB negative</option>
                <option value="O+">O positive</option>
                <option value="O-">O negative</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input class="form-control" id="address" rows="3" name="address" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Message</label>
            <input class="form-control" id="address" rows="3" name="message" required>
        </div>
        <button type="submit" class="m-1 btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX/1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMp9MvcJ4f/2d4+" crossorigin="anonymous"></script>
</body>
</html>
