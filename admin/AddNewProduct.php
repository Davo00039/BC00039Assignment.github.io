<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
            crossorigin="anonymous">
    <script src="JS/Product_Manage_Script.js"></script>
</head>
<body>
    <form action="AddNewProductProcess.php" method="post" onsubmit="return ValidateForm()" enctype="multipart/form-data" style="padding: 2% 20%;">
        <table >
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pruduct price</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"  accept="image/*">Product image</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div>
                <button class="btn btn-lg btn-primary" type="submit" onclick="ClearForm()">
                        Submit
                </button>
            </div>     
        </table>
    </form>
</body>
</html>