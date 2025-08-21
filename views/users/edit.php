<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body {
            background-color: #ffe6f0; /* Light Pink */
            font-family: Arial, sans-serif;
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
            width: 95%;
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
            
            input[type="text"], input[type="email"] {
                font-size: 14px !important;
                padding: 10px !important;
            }
            .btn {
                font-size: 14px !important;
                padding: 10px !important;
            }
        }
    </style>
</head>
<body>
    <h1>Edit User</h1>
     <?php if (!empty($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form action="index.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
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

