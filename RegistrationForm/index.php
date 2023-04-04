

    <?php require_once 'include/header.php'?>
    <body>
        <h1>Hello World!</h1>
    </body>
    <?php require_once 'include/footer.php'?>

    <h3 class="text-center">registration for IT Conference</h3>
<form action="actionpage.php">
    <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputFname1" >

    <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLname1" >

    <div class="mb-3">
    <label for="datepicker" class="form-label" >Date of Birth</label>
    <input type="text" class="form-control" id="datepicker">

    <div class="mb-3">
    <label for="specialty" class="form-label">Specialty</label><br><br>
    <input type="radio" name="specialty" >
    <label for="DA">Database Admin</label><br>
    <input type="radio" name="specialty" >
    <label for="SD">Software Developer</label><br>
    <input type="radio" name="specialty" >
    <label for="WA">Web Administrator</label><br>
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="cn" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputLname1" >

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="height:50px; width: 2000px;">Submit</button>
</form>
