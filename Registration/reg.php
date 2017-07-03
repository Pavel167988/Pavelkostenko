<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Project1</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" href="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <div class="wrapper">
            <div class="header">
<div class="row">
  <a href="#" class="navbar-brand"><img src="../images/logo.png" alt=""></a>
  <div class="col-6 col-sm-3">
   <h3>Project1.Intexsoft.by</h3>
   <span class="data"><?php
       echo date("Y-m-d H:i:s");
       ?></span>
   </div>

   <div class="clearfix hidden-sm-up"><form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="inputPassword">Пароль</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Пароль">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Запомнить</label>
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
           <button type="submit" class="btn btn-primary"><a href="#">Регистрация</a></button>
</form></div>

 
</div>
                </div>
            </div>
            
           
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Intexsoft.Project.Main</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">Lessons</a></li>
<li><a href="#">Talks</a></li>
<li><a href="#">About</a></li>
</ul>
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                <input type="text" class="form-control" placeholder="Search for...">
            </div><!-- /input-группа -->
        </div>
</div>
</div>
</nav>
        <div class="col-sm-3 col-md-2 sidebar">

            <ul class="nav nav-sidebar">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <li class="active"><a href="#">Добавить Уроки <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Lesson1</a></li>
                <li><a href="#">Lesson2</a></li>
                <li><a href="#">Lesson3</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Lesson4</a></li>
                <li><a href="">Lesson5</a></li>
                <li><a href="">Lesson6</a></li>
                <li><a href="">Lesson7</a></li>
                <li><a href="">Lesson8</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Lesson9</a></li>
                <li><a href="">Lesson10</a></li>
                <li><a href="">Lesson11</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>Регистрация</h2>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-xs-3" for="lastName">Фамилия:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="lastName" placeholder="Введите фамилию">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="firstName">Имя:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="firstName" placeholder="Введите имя">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="fatherName">Отчество:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="fatherName" placeholder="Введите отчество">
                    </div>
                </div>
                <div class="form-group">
                  </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                    <div class="col-xs-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:</label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль ещё раз">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
                    <div class="col-xs-9">
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="postalAddress">Адрес:</label>
                    <div class="col-xs-9">
                        <textarea rows="3" class="form-control" id="postalAddress" placeholder="Введите адрес"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Пол:</label>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                            <input type="radio" name="genderRadios" value="male"> Мужской
                        </label>
                    </div>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                            <input type="radio" name="genderRadios" value="female"> Женский
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="agree">  Я согласен с <a href="#">условиями</a>.
                        </label>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <div class="col-xs-offset-3  col-sx-9">
                        <p>Загрузите ваши фотографии на сервер</p>
                        <p><input type="file" name="photo" multiple accept="image/*,image/jpeg">
                            <input type="submit" value="Отправить"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Регистрация">
                        <input type="reset" class="btn btn-default" value="Очистить форму">
                    </div>
                </div>
            </form>

            </div>
        </div>


</div>
     
      
       
        
         
          
           
            
             
              
               
                
                 
                  
                   
                    
                     
                      
                       
                        

<script href="js/jquery-3.2.1.min.js"></script>

       
</body>
</html>