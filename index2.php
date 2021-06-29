<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Bootstrap Practice</title>

  </head>
  <body>
    <!-- ナビゲーションメニュー -->
        <div class="container bg-light">
          <h1 class="my-3 h3">マンチェスター・シティ</h1>
          <div class="text-right">
            <button class="btn btn-info">メニュー</button>
            <button class="btn btn-danger">メニュー２</button>
            <button class="btn btn-warning">メニュー３</button>
          </div>
        </div>
    </nav>
    <div class="container py-4" id="picture">
        <h2>メンバー</h2>
        <div class="card-deck">
            <div class="row">
                <div class="card">
                    <a ng-click="collectClick($event)"></a>
                    <img src="2fe1a89cb7b619be157e0c34fd374f25-1.jpg" class="card-img-top" width="260" height="150">
                    <div class="card-body">
                        <h5 class="card-title">ケビン・デブライネ</h5>
                        <p class="card-text">MF</p>
                        <a href="./detail.php" class="stretched-link"></a>
                        <?php class="card-deck"?>
                        <div class="row">
                <div class="card">
                    <a ng-click="collectClick($event)"></a>
                    <img src="2fe1a89cb7b619be157e0c34fd374f25-1.jpg" class="card-img-top" width="260" height="150">
                    <div class="card-body">
                        <h5 class="card-title">ケビン・デブライネ</h5>
                        <p class="card-text">MF</p>
                        <a href="./detail.php" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, Popper.js, Bootstrap JSの順番に読み込む -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
   <!-- フッター -->
   <footer class="text-center bg-dark text-white">
    <p class="py-3">Mancity</p>
</footer>
</html>