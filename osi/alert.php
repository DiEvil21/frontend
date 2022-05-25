<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="js/scroll.js"></script>
	<title>Ось | Образовательная среда</title>
</head>
<body>
	
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Оставьте заявку</h2>
        
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input  class="form-control rounded-3" placeholder="Имя">
            <label for="floatingInput">Ваше Имя</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" class="form-control rounded-3" placeholder="ваш телефон">
            <label for="floatingPassword">Телефон</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" id="hui">Отправить
            <script>
              
            </script>
          </button>
          <small class="text-muted">Нажимая "Отправить", вы соглашаетесь на обработку ваших персональных данных</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Иные способы связи</h2>
          <a class="a-class" href="mailto:wyfoopoofoo@gmail.com">
            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="button">
               Написать на почту
            </button>
          </a>
          <a class="a-class" href="https://t.me/vkus_vody">
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="button" >
              Написать в Telegram
            </button>
          </a>
          
        </form>
      </div>
    </div>
  </div>
  <script>
              hui.onclick = function() {
                alert( "Мы с вами свяжемся." );
              }
  </script>

  	
</body>
</html>