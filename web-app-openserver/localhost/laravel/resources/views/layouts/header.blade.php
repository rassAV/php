<style>
    .navi ul {
        padding: 15px 0px;
        list-style-type: none;
        display: flex;
    }
    .navi li {
        font-size: 20pt;
        margin-right: 20px;
    }
    .navi a {
        text-decoration: none;
        color: #333;
        padding: 10px 20px;
        border: 1px solid #333;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    .navi a:hover {
        background-color: #333;
        color: #FFF;
    }
    .menu {
        display: flex;
    }
    header {
        border: 1px solid #333;
        width: 100%;
        background-color: #CCC;
    }
    img {
        padding: 5px 20px;
        width: 80px;
        height: 80px;
    }
</style>
<header>
    <div class="menu">
        <div class="logo">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="30" height="30">
        </div>
        <nav class="navi">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/form">Форма для отправки данных</a></li>
                <li><a href="/data">Таблица с данными</a></li>
            </ul>
        </nav>
    </div>
</header>