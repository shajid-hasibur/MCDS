<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Farmer</title>
    <link rel="stylesheet" href="{{ asset('css/add-farmer.css') }}">
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1></div>
        <div class="nav-bar">
          
            <a class="nav-btn" href="home">Home</a>
            <a class="nav-btn" href="farmer-list">Farmers</a>
            <a class="nav-btn" href="#">Employees</a>
            <a class="nav-btn" href="#">Deliveries</a>
            <a class="nav-btn" href="#">Payments</a>
            <a class="nav-btn" href="#">Reports</a>
            <a class="nav-btn" href="#">Shajid</a>
            <a class="nav-btn" href="#">Settings</a>
        </div>
        <div class="reg-form">
            <div class="title">Add Farmers</div>
        <div class="content">
          <form action="add-farmer" method="POST">
            @csrf
            <div class="user-details">
              <div class="input-box">
                <span class="details">Serial-No:</span>
                <input type="text" name="serial_no" placeholder="Enter the number" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Name of Farmer:</span>
                <input type="text" name="name" placeholder="Enter the name" required>
              </div>
              <div class="input-box">
                <span class="details">Locality of Farmer:</span>
                <input type="text" name="locality" placeholder="Area" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's A/C NO:</span>
                <input type="text" name="farmers_account" placeholder="Bank account number" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's Phone NO:</span>
                <input type="text" name="farmers_phone" placeholder="Phone number" required>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Add Farmer">
            </div>
          </form>
        </div>
      </div>
      <div class="footer"></div>    
    </div>
</body>
</html>