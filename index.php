

<?php include('nav.php') ?>

<h1>Welcome to Citi Bank</h1>

<div class="bg" style="background-image: url('https://arizent.brightspotcdn.com/c2/7a/59e1e7d64c338fd5a7bf7fdf81fb/citi.jpg');">
  <div class="center" style="position: absolute; top: 60%; left: 20%;">
    <ul>
      <li class="operations"><a href="transfer_money.php"><button class="btn" id="red">View All Users</button></a></li>
      <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">Trasnfer Money</button></a></li>
      <li class="operations"><a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a></li>
    </ul>
  </div>
</div>
<style>
  body {
    background-color: #4285F4;
  }
</style>


<!-- About us -->
<section id="about" class="container" >
    <h2 class="heading" style="color:black" >About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="img/bank-building.png" alt="citi Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="h3" style="color:black">Citi Bank</span>
          </div>
          <div class="mt-2">
            <span class="h5">It is a Basic Banking System where transactions take place
              between users.You can create a account in the bank.It can transfer Money between multiple accounts,view all Customer's data 
              and view all the past transactions and you can contact us.</span>
          </div>
          <a href="#services" class="btn btn-outline-danger mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section>


<!-- Contact us -->
<section class="mx-auto" id="contact" style="width: 600px">
    <br/>
    <h2 class="heading" >Contact Us</h2>
    <form>
      <div class="row mb-3" >
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter your E-Mail">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Your City" aria-label="City">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </section>

<?php include('footer.php') ?>

</body>

</html>