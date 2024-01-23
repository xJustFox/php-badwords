<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Bad Words</title>
</head>

<body>
    <div class="container-fluid my-vh my-bg-black">
        <div class="row justify-content-center align-items-center my-vh">
            <div class="col-4 my-bg-gray rounded-1 py-2">
                <!-- Form -->
                <form action="textForm.php" method="GET">
                    <div class="row">
                        <div class="col-12 text-center text-white  mb-4">
                            <h1>Bad Words</h1>
                        </div>
                        <!-- Input Name -->
                        <div class="col-6 mb-3">
                            <label for="badWord" class="form-label text-white">Choose the word to censor:</label>
                            <input type="text" class="form-control form-control-sm" name="badword" id="badWord" placeholder="Insert word..." required>
                        </div>
                        <!-- Input Text -->
                        <div class="col-12 mb-3">
                            <label for="text_input" class="form-label text-white">Textarea:</label>
                            <textarea class="form-control form-control-sm" name="text" id="text_input" rows="4" placeholder="Write whatever you want..." required></textarea>
                        </div>
                        <!-- Button Submit -->
                        <div class="col-12 mb-3 d-flex justify-content-end ">
                            <button class="btn btn-sm btn-primary " type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>