<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body {
            background-color: #ffe6f0; /* Light Pink */
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            width:90%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #d63384;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .btn {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #d63384;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #b32d6f;
        }
        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
         @media (max-width: 480px) {
            body {
                padding: 10px !important;
            }
            .container {
            width:95% !important;
            max-width:none !important;
                margin: 20px auto !important;
                padding: 15px !important;
            }
            h2 {
                font-size: 18px !important;
            }
            input[type="text"], input[type="email"], .btn {
                font-size: 14px !important;
                padding: 10px !important;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Add User</h2>
    <?php if (!empty($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form method="post" action="index.php?action=store" onsubmit="return validateForm()">
        <label>Name</label>
        <input type="text" name="name" id="name">

        <label>Email</label>
        <input type="email" name="email" id="email">

        <button type="submit" class="btn">Save</button>
    </form>
</div>

<script>
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    if(name === "" || email === "") {
        alert("All fields are required!");
        return false;
    }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!email.match(emailPattern)) {
        alert("Invalid email format!");
        return false;
    }
    return true;
}
</script>
</body>
</html>

