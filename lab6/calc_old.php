<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>lab3 Сіроклин</title>
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <script src="js/calc_script.js"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="head">
                <div class="head-logo"><a href="#"><img src="img/logo.png" /></a></div>
                <div class="head-left">
                    <a href="#" class="a-subscribtion"><span>подписка</span></a>
                    <a href="#" class="a-price"><span>прайс</span></a>
                    <a href="#" class="a-deliver"><span>заказы</span></a>
                    <a href="#" class="a-shop"><span>интернет-магазин</span></a>
                    <a href="#" class="a-report"><span>отчеты</span></a>
                </div>
                <div class="head-right">
                    <div class="login-menu">
                        <div><span>ЛОГИН</span><input type="text"></div>
                        <div><span>ПАРОЛЬ</span><input type="text"></div>
                        <button>ВОЙТИ</button>
                    </div>
                    <div class="litle-menu">
                        <a href="#" class="b-magazine">ГАЗЕТА ></a>
                        <a href="#" class="b-stock">ТОВАРЫ ></a>
                        <a href="#" class="b-friends">ПАРТНЕРЫ ></a>
                        <a href="#" class="b-subscribtion">ПОДПИСКА ></a>
                        <a href="#" class="b-register">РЕГИСТРАЦИЯ ></a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="news"><span>Новости</span></div>
            <div class="title">
                <ul>
                    <li>
                        <span>
                            <span class="title-name">Калькулятор</span>
                            <span class="title-date">[17.10.2023]</span>
                        </span>
                        <div>
                            <form name="calc">
                                <input type="text" name="a_in">
                                <select name="oper">
                                    <option>+</option>
                                    <option>-</option>
                                    <option>*</option>
                                    <option>/</option>
                                    <option>^</option>
                                    <option>sqrt</option>
                                </select>
                                <input type="text" name="b_in">
                            </form>
                            <span class="title-link"><a id="run" href="#">Результат:</a></span>
                            <span id="res">-</span>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
        <footer>
            <div class="left-down-menu">
                <div class="menu">
                    <div class="menu-logo"><img src="img/menu.png" /></div>
                    <ul>
                        <li><a href="lab3.html">ГЛАВНАЯ СТРАНИЦА</a></li>
                        <li><a href="#">КАЛЬКУЛЯТОР</a></li>
                        <li><a href="countdown.html">ОТСЧЁТ 3 СЕКУНДЫ</a></li>
                        <li><a href="#">ПРАЙС-ЛИСТ</a></li>
                        <li><a href="#">КАРТА САЙТА</a></li>
                        <li><a href="#">НОВЫЕ ВАКАНСИИ</a></li>
                        <li><a href="#">ПОДПИСКА</a></li>
                        <li><a href="#">ИНТЕРНЕТ МАГАЗИН</a></li>
                        <li><a href="#">ФАРМ-НАВИГАТОР</a></li>
                        <li><a href="#">КАК К НАМ ПРОЕХАТЬ</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>