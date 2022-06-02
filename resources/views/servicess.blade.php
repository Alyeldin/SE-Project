<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="style.css">
    <!--BOOTSTRAP LINK-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
    .signup-form{
    height:500px;
    width:600px;
    margin-top:5%;
    margin-left:25%;
}
.Signup-head{
    padding:8px;
}
.signup-content .radio{
    margin:10px 10px;
}
.signup-content2 .input{
    width:400px;
    padding:10px;
    margin:10px;
    color:#fff;
}
.signup-content2 .tarikh{
    margin:10px;
    padding:10px;
    color:#fff;
}
.signup-content2  .person{
    padding:10px;
    margin:10px;
    color:#fff;
}
.signup-content2 .travel{
    margin:20px 20px;
}
.signup-content2 .travel2{
    padding:5px;
}
.signup-content2 .submit-btn{
    border:none;
    outline:none;
    width:200px;
    padding:10px;
    margin-left:200px;
}
</style>
</head>
<body>
    <form>

        <div class="signup-form bg-dark">

            <div class="Signup-head bg-warning">
                <h1>Reserve Your Services</h1>
            </div>

            <div class="signup-content">
                <input type="radio" class="radio" name="r">
                <label class="text-white">Change  SpareParts</label>
                <input type="radio" class="radio" name="r">
                <label class="text-white">Change Oil Change</label>
            </div>

            
            <div>

            <label class="text-white" style="margin-left:10px;">Day</label>
            <input type="date" class="tarikh bg-dark text-white">
</div>

            
            <label class="text-white travel">Travel Class</label>
            <select class="bg-dark text-white travel2">
                <option></option>
                <option>First Class/1A</option>
                <option>AC 2tier/2A</option>
                <option>AC 3tier/3A</option>
                <option>Executive class chair car/Economy Class</option>
                <option>AC Chair Car</option>
                <option>Sleeper Class</option>
                <option>Second Class</option>
                <option>General</option>
            </select>

            <input type="submit" value="Reserve if available" class="submit-btn bg-warning">
        </div>
        </div>
    </form>
</body>
</html>