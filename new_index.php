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
    <link rel="stylesheet" href="pokemon.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        

         <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aromas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col border">
    <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div>
    </div>
    <div class="col border">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="list-item-1">Item 1</h4>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque voluptas vel veritatis eius ut iusto numquam debitis, dolore laboriosam aliquid quia inventore, laudantium vero excepturi doloremque quidem, eum necessitatibus cum a exercitationem? Est vitae rerum fugiat atque error! Praesentium, eius repellendus eum facilis molestiae asperiores tenetur iusto fugit dicta repellat eaque velit. Nulla pariatur voluptates voluptas nesciunt? Possimus non ad quia labore harum. Possimus velit quidem debitis laboriosam pariatur alias dolorum repellendus natus porro ullam minus est, et sunt deserunt quas animi quam expedita, quae nulla placeat atque in beatae explicabo! Totam expedita, nostrum quasi eum et rem labore est quia dolor eveniet similique quaerat ipsum praesentium fuga nihil aliquam aperiam illum atque iure cupiditate nulla commodi repellat, animi architecto. Consequuntur ad commodi nisi voluptatem nobis vitae explicabo nostrum. Totam ipsum saepe amet iste, rem aperiam in nisi distinctio voluptas perferendis ipsam enim, a illum dignissimos earum omnis, dicta neque sit. Nesciunt harum voluptatibus fuga ea neque. Ab magnam repellat veniam consectetur rem voluptate voluptates quisquam totam repudiandae temporibus, vero voluptatem provident eos tempora. Error adipisci, beatae dolores voluptas unde, tenetur voluptates cupiditate, suscipit quaerat rem corporis quibusdam nam quod quos. Cumque quod blanditiis fuga earum, hic qui laudantium repellat quisquam ipsum voluptas alias iure ad nobis ab perferendis provident doloribus facere doloremque repudiandae ut odit excepturi numquam. Repellendus minima dignissimos, placeat iusto nihil totam tempora, sint quod porro sequi voluptate! Dolorum in, natus recusandae aperiam nihil harum voluptatibus doloribus nemo esse illo provident nulla beatae neque voluptas amet iure, consectetur cumque minima, odit facilis consequatur excepturi. Saepe iusto, maxime nam, odio soluta iste neque ducimus dolores enim earum dignissimos eveniet deleniti minus totam nesciunt nobis accusamus numquam eligendi illum odit deserunt nulla sapiente pariatur modi. Vero architecto beatae molestias eaque esse voluptatum in blanditiis eius magni consequuntur consectetur qui mollitia aliquam earum error, explicabo a! Asperiores vel tempora at quisquam dolor rem blanditiis dignissimos nisi earum aspernatur expedita nobis tenetur repudiandae quia in omnis facere quidem nihil animi totam, non pariatur alias ipsum voluptas. Nostrum maiores consequuntur, fugit quo, nam quibusdam voluptates sint ullam laboriosam, asperiores ab tenetur ad reiciendis! Quae ratione qui minus exercitationem, suscipit beatae reprehenderit sit distinctio sapiente illum ullam quas repudiandae vel dolorem expedita fugit. Error modi vero, amet consectetur nostrum praesentium quod et aliquam distinctio magnam, dicta facere eveniet molestiae saepe ratione ad reprehenderit consequatur eligendi! Maiores provident beatae sunt eaque ipsam est quis quas aut nam tenetur voluptas eius quidem veritatis, ex perspiciatis cupiditate, laudantium magnam magni minima rem. Accusamus natus cupiditate ducimus quod laboriosam et tenetur dolorum? Tenetur beatae excepturi consequatur sapiente ratione corrupti sunt nemo illo consequuntur? Consectetur, atque nesciunt necessitatibus error eum soluta, voluptate quidem culpa vitae sit facere alias iure quod. Tenetur, dolorem! Ipsum non, aperiam cupiditate, ratione odio voluptatem labore tempora tempore commodi dolorum distinctio sit! Consequatur illo quos aut labore sunt excepturi sapiente! Veniam natus non libero eligendi autem dicta quos recusandae quis ex cumque, temporibus dolore suscipit ducimus id sint, provident, fuga neque blanditiis! Nulla asperiores aperiam tempora saepe, molestiae odit autem unde non voluptatibus rerum officia voluptas alias inventore esse at laudantium cum. Quaerat minus nam ea doloribus error fuga iure. Eius quae, repellendus nam vel nesciunt, perspiciatis voluptatibus alias ipsa laboriosam, cupiditate pariatur? Rem tempora nihil quis quia vero consequuntur soluta. Blanditiis incidunt soluta iusto tempore, veritatis voluptates fugiat ut? Tempore accusantium possimus fugiat alias culpa libero aut ducimus, rem pariatur molestiae, perspiciatis voluptatibus aperiam earum praesentium ut. Voluptas nostrum sequi iusto reprehenderit cum quis quam maiores odit tempore dolores, non laudantium facere voluptate magni quasi commodi sapiente deserunt dolorem. Officiis doloremque explicabo sunt nesciunt. Numquam totam vero soluta eveniet eligendi corrupti perspiciatis repellendus recusandae rerum officiis, debitis explicabo quos. Quisquam laboriosam natus quis reiciendis aspernatur. Consequatur corporis, quasi quam fugit nobis quis, odio adipisci debitis deleniti provident reiciendis eveniet rem minima ex? Officia sed repellendus distinctio velit dolores rem ea, exercitationem possimus nisi cupiditate iste nesciunt a veniam dolore tenetur deleniti. Voluptates, ab eveniet. Magnam, exercitationem consectetur. Placeat nisi, numquam id assumenda reprehenderit tempore. Hic, repellat deleniti quas voluptatibus qui tempora mollitia iusto consequuntur dolores, commodi ea laudantium aut necessitatibus nulla repellendus atque autem dolore ipsa magnam, cum voluptatem nam. Pariatur veritatis tenetur magnam tempore modi sunt quo ducimus odit odio laboriosam unde consequatur quod facere quos, rem ab quis itaque at deleniti? Voluptas aut sapiente odio beatae, consequuntur odit repellat eum, voluptate eligendi voluptatem vitae rem doloribus mollitia sint porro ipsum hic adipisci aperiam quidem, voluptatum quia quis? Quod tempore dolorum sapiente error! Quidem aliquam minima veniam optio ipsam, eligendi aut id maiores itaque fuga doloribus voluptas nemo, soluta molestiae! Rem libero itaque deserunt veritatis optio dolor maiores magni eius ut. Molestiae voluptatem possimus optio reiciendis culpa aliquam, nam recusandae mollitia dolor quasi? Quasi expedita quam nisi porro hic modi ratione ab animi deleniti aut. Fuga nam quisquam alias deleniti totam aspernatur in aliquam unde odio, molestiae quaerat ipsum dolorum iure, illo laboriosam, asperiores sapiente! Pariatur sint cum aperiam quae, sit veniam autem voluptate vero expedita deleniti voluptatum. Delectus fugit aliquid facilis dignissimos obcaecati magnam aspernatur veniam iste expedita, consequatur assumenda saepe provident exercitationem. Autem, quibusdam, rerum omnis porro qui aspernatur nostrum vitae impedit enim cupiditate repellat tenetur dignissimos? Consequuntur tempore a id assumenda nobis sit numquam culpa neque eius veritatis similique earum sapiente vero odio at, iure, rem ipsam tenetur nam quasi unde! Eos cum, ducimus accusamus aspernatur necessitatibus porro perferendis, veritatis culpa consectetur autem totam dolorum laboriosam! Sed ipsam perspiciatis eius delectus totam molestias. Adipisci quidem ea id doloremque eius non quibusdam quo laudantium ratione iure accusamus reprehenderit quod, rem ut labore asperiores nam quia fuga incidunt? Culpa placeat ex ea rem temporibus veniam quia aliquid sequi fugiat pariatur totam nobis magnam sunt iste sed at, voluptas facere? Qui praesentium consectetur facere quia veniam aperiam et tenetur quaerat sequi in? Minima quibusdam animi quod, deleniti aspernatur asperiores, fuga, quos voluptates blanditiis rem velit non voluptas? Earum, iusto? Nihil accusantium asperiores, debitis sed quia sapiente, placeat alias cumque recusandae vel fugiat.</p>
  <h4 id="list-item-2">Item 2</h4>
  <p>...</p>
  <h4 id="list-item-3">Item 3</h4>
  <p>...</p>
  <h4 id="list-item-4">Item 4</h4>
  <p>...</p>
</div>
    </div>
    <div class="col border">
      Column
    </div>
  </div>
</div>
  </body>
</html>