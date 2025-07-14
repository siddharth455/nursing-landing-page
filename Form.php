<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admission Form</title>
    <style>
        .admission-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgb(215, 219, 226);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .admission-form h2 {
            font-weight: 600;
            color: #2b2b2b;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #004aad;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #003080;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="admission-form">
            <h2 class="text-center mb-4">Admission Open 2026</h2>
            <form id="leadForm">
                <div class="mb-3">
                    <label class="form-label">Enter Name</label>
                    <input class="form-control" type="text" placeholder="Your Full Name" name="name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter Email</label>
                    <input class="form-control" type="email" placeholder="example@mail.com" name="email" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter Number</label>
                    <input class="form-control" type="tel" placeholder="10-digit Mobile Number" name="mobile" maxlength="10" minlength="10" required />
                </div>
                <div class="mb-4">
                    <label class="form-label">Select Course</label>
                    <select class="form-select" name="course" required>
                        <option selected disabled>Select the course</option>
                        <option value="91">BSc Nursing</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Application</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#leadForm').on('submit', function(e) {
                e.preventDefault();
                const formData = $(this).serialize();
                $.ajax({
                    url: 'apply.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        alert("Form submitted successfully!");
                        console.log("Response:", response);
                        $('#leadForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert("Error occurred while submitting.");
                        console.log("Error:", error);
                    }
                });
            });
        });
    </script>
</body>

</html>