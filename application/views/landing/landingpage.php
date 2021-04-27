<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/landingstyles.css" />
  <title>Landing Page</title>
</head>

<body>
  <nav class="nav">
    <div class="container">
      <h1 class="logo"><a href="/index.html">Grand Master Course </a></h1>
      <ul>
        <li><a href="#" class="current">Home</a></li>
        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
        <li><a href="#">Registration</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </nav>

  <div class="hero">
    <div class="container">
      <h1>Welcome to Grand Master Course</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis,
        molestias. Sapiente dolore asperiores dignissimos corporis.
      </p>
    </div>
  </div>

  <section class="container content">
    <h2>Content One</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet
      officiis sint eaque explicabo dolorem voluptatum architecto vero. Quod
      qui provident facere deserunt aperiam, dolorum suscipit perferendis
      nisi, unde fugit repellat ex architecto rem ipsa laborum dolorem
      doloremque quasi nesciunt itaque maxime ea sit cum minima. At voluptatem
      soluta quos?
    </p>
    <h3>Content Two</h3>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor
      inventore voluptatum sed ex cumque animi porro molestiae, mollitia
      soluta voluptas provident atque adipisci saepe a quod, nostrum commodi
      dolore exercitationem eius quaerat vitae aperiam magnam distinctio.
      Tempore suscipit maxime, vitae eaque, omnis facilis aperiam possimus
      neque, blanditiis nulla cupiditate repellat.
    </p>
  </section>

  <script src="<?= base_url('assets'); ?>/dist/js/landingscript.js"></script>
</body>

</html>