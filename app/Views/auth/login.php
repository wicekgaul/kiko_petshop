<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        /* Tambahkan CSS dasar untuk tampilan lebih menarik */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- <h1>Login</h1> -->

    <!-- Tampilkan pesan error atau success -->
    <?php if (session('error')) : ?>
        <div class="error">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session('success')) : ?>
        <div class="success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <!-- Tampilkan error validasi jika ada -->
    <?php if (isset($validation)) : ?>
        <div class="error">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/login" method="post">
        <!-- Input Email -->
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            value="<?= set_value('email') ?>" placeholder="Enter your email">

        <!-- Input Password -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password"
            placeholder="Enter your password">

        <!-- Submit Button -->
        <button type="submit">Login</button>
    </form>
</body>

</html>