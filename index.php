<!DOCTYPE html>
<html>
  <head>
    <title>Login & Signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        form {
          background-color: #fff;
          border: 1px solid #ddd;
          border-radius: 4px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, .15);
          padding: 20px;
          margin: 50px auto;
          max-width: 400px;
        }
        input[type=text], input[type=password], input[type=email], input[type=tel] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 20px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        button[type=submit]:hover {
            background-color: #45a049;
        }
        h2 {
            text-align: center;
        }
        #link {
            text-align: center;
        }
    </style>
  </head>

  <body>
    <form id="login-form">
      <h2>Login</h2>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
      <div id="link">Don't have an account? <a href="#signup-form">Sign up here</a></div>
    </form>

    <form id="signup-form">
      <h2>Sign Up</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Sign Up</button>
      <div id="link">Already have an account? <a href="#login-form">Log in here</a></div>
    </form>

  </body>
</html>