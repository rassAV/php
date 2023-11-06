<style>
.navi ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}
.navi li {
    font-size: 20pt;
    margin-left: 20px;
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
    color: #fff;
}
.menu {
    padding: 30px 20px;
    border: 1px solid #333;
    display: flex;
}
</style>
<header>
    <div class="menu">
        <div class="logo">
            <img src="{{ asset('logo.jpg') }}" alt="Logo" width="30" height="30">
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