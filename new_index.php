<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- <script src="app.js"></script> -->
    <title>Hello, world!</title>
  </head>
  <body>
    
    <?php
        $url = "localhost:3000/get_items";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($ch);
        curl_close($ch);
        // echo $result;
        $result = json_decode($result,true);
        // echo '<pre>';
        // print_r($result);
        // echo "HOLA AMIGOS";
        // print_r($result['items']);
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <!-- <main class="dashboard">
        <article class="restaurant-panel">
          <nav class="nav-bar">
            <a href="#" class="menu"><svg t="1586137513350" class="icon" viewBox="0 0 1024 1024" version="1.1"
                xmlns="http://www.w3.org/2000/svg" p-id="1243" width="18" height="18">
                <path d="M199.68 300.032m-49.152 0a4.8 4.8 0 1 0 98.304 0 4.8 4.8 0 1 0-98.304 0Z" p-id="1244"></path>
                <path
                  d="M402.432 343.04 829.44 343.04c23.552 0 44.032-19.456 44.032-44.032S852.992 256 829.44 256L402.432 256c-23.552 0-44.032 19.456-44.032 44.032S377.856 343.04 402.432 343.04z"
                  p-id="1245"></path>
                <path d="M199.68 512m-49.152 0a4.8 4.8 0 1 0 98.304 0 4.8 4.8 0 1 0-98.304 0Z" p-id="1246"></path>
                <path
                  d="M829.44 468.992 402.432 468.992c-23.552 0-44.032 19.456-44.032 44.032s19.456 44.032 44.032 44.032L829.44 557.056c23.552 0 44.032-19.456 44.032-44.032S852.992 468.992 829.44 468.992z"
                  p-id="1247"></path>
                <path d="M199.68 724.992m-49.152 0a4.8 4.8 0 1 0 98.304 0 4.8 4.8 0 1 0-98.304 0Z" p-id="1248"></path>
                <path
                  d="M829.44 680.96 402.432 680.96c-23.552 0-44.032 19.456-44.032 44.032s19.456 44.032 44.032 44.032L829.44 769.024c23.552 0 44.032-19.456 44.032-44.032S852.992 680.96 829.44 680.96z"
                  p-id="1249"></path>
              </svg></a>
            <a href="#" class="title">Aromas</a>
            <div class="search-bar">
              <div class="input-group">
                <button class="btn">
                  <svg t="1585652817188" class="search" viewBox="0 0 1024 1024" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" p-id="1034" width="14" height="14">
                    <path
                      d="M888.703059 847.158363 733.373365 691.826622c50.040696-59.650565 80.190367-136.551002 80.190367-220.507136 0-189.613522-153.703661-343.318206-343.31616-343.318206-189.616592 0-343.31923 153.703661-343.31923 343.318206s153.703661 343.318206 343.31923 343.318206c85.053118 0 162.867368-30.94171 222.838228-82.163301l155.141406 155.141406c11.174504 11.17655 29.300326 11.17655 40.47483 0C899.859144 876.440269 899.859144 858.334913 888.703059 847.158363zM470.248595 757.416456c-158.006663 0-286.10004-128.090307-286.10004-286.097994 0-158.006663 128.093377-286.099017 286.10004-286.099017s286.079574 128.093377 286.079574 286.099017C756.32817 629.326149 628.254236 757.416456 470.248595 757.416456z"
                      p-id="1035"></path>
                  </svg>
                </button>
                <input type="search" class="form-control" name="search" placeholder="Search" />
              </div>
            </div>
          </nav> -->

          <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div>
<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="list-item-1">Item 1</h4>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum porro ad nihil, corrupti id, temporibus illo iusto libero voluptatum neque a facere reiciendis dolores nobis est nulla labore quos ullam.</p>
  <h4 id="list-item-2">Item 2</h4>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, sint. Eos voluptate similique neque accusantium tenetur reiciendis consectetur! Atque, assumenda! Perferendis consectetur unde placeat voluptas velit, laborum minima cupiditate, perspiciatis quos doloremque eligendi facilis atque mollitia, natus sequi ex maxime? Cupiditate voluptatem, esse optio deserunt aliquid corrupti nesciunt sed tempora.</p>
  <h4 id="list-item-3">Item 3</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ab amet nulla, animi sit vitae architecto, voluptatem fugit autem necessitatibus sapiente dolores. Error dolor laborum laudantium saepe delectus ea, iste atque nam aut consequatur ex nihil quia repellendus porro quasi fugit eveniet nulla provident, amet dicta temporibus dolorem ab voluptatem explicabo. Perferendis quasi voluptatum pariatur, odio ipsa tempore numquam incidunt impedit veritatis repellendus vero assumenda perspiciatis tempora vitae quod eligendi quae. Autem deleniti laboriosam amet quaerat inventore eos quo quasi voluptate, doloremque error itaque fugit eum. Tenetur maiores dicta dolore sint perspiciatis, voluptate fuga voluptates sequi odit omnis culpa neque?</p>
  <h4 id="list-item-4">Item 4</h4>
  <p>...</p>
</div>
<p align="right">POKEMON</p>
  </body>
</html>