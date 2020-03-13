<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <style>
    .container {
      text-align: center;
      margin: 10px auto;
    }

    .page-header {
      font-family: sans-serif;
      color: #636363;
    }

    .form-group {
      display: block;
      width: 100%;
      margin: 5px 0;
      text-align: left;
    }

    .form-control {
      width: 75%;
      display: block;
      padding: 6px;
      border-radius: 5px;
      margin-top: 8px;
      border: 1px solid grey;
    }

    .btn {
      padding: 8px 16px;
      border-radius: 4px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 15px;
    }

    .btn-primary {
      color: #fff;
      background: #1b74c2;
      border: 1px solid #1b74c2;
    }

    .btn-primary:hover {
      background: #218ceb;
      border: 1px solid #218ceb;
      cursor: pointer;
    }

    .text-center {
      text-align: center;
    }

    .pl-2 {
      padding-left: 20%;
    }

    .text-danger {
      color: red;
    }

    .notice {
      font-size: 13px;
    }

    .message-input {
      resize: none;
    }

    .session-message {
      background: #8dcc5a;
      color: #fff;
      font-size: large;
      text-align: center;
      width: 100%;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="page-header">Contact Us</h1>
    <div class="pl-2">
    <form action="{{ route('contact.send') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Name:<label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your name" required >
        <span class="text-danger notice"> * This field is mandatory</span>
      </div>
      <div class="form-group">
        <label for="useremail">Email:<label>
        <input type="email" class="form-control" name="useremail" id="useremail" placeholder="Enter your email id" required >
        <span class="text-danger notice"> * This field is mandatory</span>
        </div>
        <div class="form-group">
          <label for="usermessage">Message:<label>
          <textarea class="form-control message-input" name="usermessage" id="usermessage" rows="8" placeholder="Enter your message here" required ></textarea>
          <span class="text-danger notice"> * This field is mandatory</span>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Contact Us">
      </div>
    </form>
    </div>
  </div>
</body>
</html>