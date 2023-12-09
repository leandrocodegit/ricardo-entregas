
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>@yield('title', 'Meu Site')</title>
</head>
<body>
    <nav>
    <div class="box-container-menu" style="padding: 10px">   
    <a href="/entrega/create"  class="box-container-menu-item">
        <span class="material-symbols-outlined">
            save
            </span>
        <div class="box-container-menu-item__titulo">
            <p>Criar</p> 
        </div>
</a> 
    <a href="/" class="box-container-menu-item">
        <span class="material-symbols-outlined">
            list
            </span>
        <div class="box-container-menu-item__titulo">
            <p>Lista</p> 
        </div>
</a>    
</div>
    </nav>

    <div style="padding: 10px">
        @yield('content')
    </div>

    <footer>
        <!-- Rodapé pode ser adicionado aqui -->
    </footer>

    <style>

        a{
            text-decoration: none;  
            
        }
        .box-container-menu {
    display: flex;
    flex-direction: row;
    padding: 10px 0;

}

.box-container-menu-item {
    background-color: rgb(97, 111, 122);
    color: white;
    text-align: center;
    display: flex;
    flex-direction: row;
    align-items: center;
    border-radius: 2px;
    margin: 2px;
}

.box-container-menu-item:hover {
    background-color: rgb(97, 111, 122) !important;
    opacity: 1;
    cursor: pointer;
}

.box-container-menu-item:nth-child(1) {
    background-color: rgb(92 240 161);
}

.box-container-menu-item:nth-child(2) {
    background-color: rgb(55, 209, 230);
}

.box-container-menu-item:nth-child(3) {
    background-color: rgb(28, 189, 154);
}

.box-container-menu-item:nth-child(4) {
    background-color: rgb(101 53 110);
}

.box-container-menu-item:nth-child(5) {
    background-color: rgb(168, 166, 42);
}

.box-container-menu-item:nth-child(6) {
    background-color: rgb(46 241 125);
}

.box-container-menu-item__titulo {
    padding: 0 15px;
    width: 100%;
}

.material-symbols-outlined {
    font-size: 50px;
}

p {
    font-weight: 200;
    margin: 3px;
    font-size: 18px;
}

@media (max-width: 600px) {
    a{
        width: 100%;
    } 
}
    </style>
</body>
</html>


