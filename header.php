<style>
  .header{
    background: var(--blue);
    height: 60px;
    display: flex;
    justify-content: space-between;
    place-items: center;
    padding: 0 20px;
  }

  .logo, .link, .welcome {
    color: var(--white);
  }

  .logo:hover, .link:hover {
    color: var(--white);
    text-decoration: none;
  }

  .link:first-child {
    margin-right: 5px;
  }

  h1, .welcome  {
    margin: 0;
  }

  .welcome {
    font-size: 16px;
  }

</style>

<header class="header">
  <a class="logo" href="/phperos-app">
    <h1>PHPeros</h1>
  </a>

  <?php if (!empty($user)): ?>

    <p class="welcome">Hola <?=$user['name'];?></p>

  <?php endif;?>
</header>



<!--
    <span>
      <a class="link" href="login.php">Login</a>
      <a class="link" href="register.php">SignUp</a>
    </span>
 -->