<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">Search.ai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto my-auto text-center">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Communities">Community</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://forms.gle/NzqkqYraCzvbrz1cA">Contribute</a>
        </li>
        <?php if(isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']["user_name"]; ?>
          </a>
          <ul >
            
          </ul>
        </li>
        <form action="allcode.php" method="POST">
            <li><button class="btn logout_btn" name="logout_btn" type="submit">Logout</button></li>
        </form>
        <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
            <ul>
                <li class="nav-item">
                <a class="nav-link ms-auto text-center" href="register.php">
                  <button class="btn btn-free">Try it for free</button>
                </a>
              </li>
            </ul>
            <?php endif ; ?>
    </div>
  </div>
</nav>



<style>
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap');
    ul li a {
    font-size: 20px;
    font-family: 'Source sans 3', serif;
    color: #f2f2f4 !important;
  }
  ul li a:hover {
    text-shadow: -0px 0px 30px #0ff;
  }
  .btn-free {
    background: teal;
    color: #fff;
    border-radius: 20px;
  }
  .navbar-brand {
    font-family: 'Pacifico', cursive;
    font-size: 40px;
    color: #f2f2f4 !important;
  }
  .navbar {
    background-color: #20047a;
    box-shadow: 2px 2px 2px #c7c7c9;
  }
  ::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nms;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: start !important;
    color: #20047a;

}
.logout_btn{
  color: #f2f2f4 !important ;
  font-size: large;
  font-weight: bold;
  font-family: 'Source sans 3', cursive;
  letter-spacing: 1px;
}
.logout_btn:hover {
  color: black !important;
  text-shadow: -20px 10px 30px #0ff;
}
</style>