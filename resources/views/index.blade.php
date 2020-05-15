<html>
	<head>
		<title>Сайт v2.0</title>
		<link rel="icon" href="https://mycsgo.cc/favicon.ico?v=2">
		
		<link rel="stylesheet" href="CSS_Сайт.css" type="text/css">
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>	
		<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
		<script src="https://use.fontawesome.com/b16ad455ab.js"></script>
		
		<script src="menu.js"></script>
		<script src="Price_List.js"></script>
		<script src="wicart.js"  type="text/javascript"></script>
	</head>
<body>
<div class="all">
	<div class="header">
	<div class="logo-background">
	<div class="logo"></div></div>
	<a href="#home" onclick="openbox_2('home'); return false"><div class="home"><div class="home_icon"></div>Главная</div></a>
	
	<button type="button" class="steam-login">Войти через steam</button>
	
	</div>
		<div class="hidden">
			<a href="#market" onclick="openbox('market'); return false">
			<div class="nav" title="Market">
			<div class="market_icon"></div>
			</div></a>
			<a class="WASD" href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)">
			<div class="nav" title="Basket"><a class="WASD" href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)">
			<div class="Basket_icon"><i class="fa fa-cart-plus fa-2x" aria-hidden="true"><a class="WASD" href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></i></div>
			</div>
			
		</div>
			
			
			<div class="Content">
				<div class="market_background" id="market">
				<div class="market">
				<div class="modal__content"></div>
				<div class="market-header"><div class="market-title">Выберите скины</div>
				<a href="#market" onclick="openbox('market_close'); return false"><div class="market-close" title="close"><i class="fa fa-times fa-fw" aria-hidden="true"></i></div></a>
				</div>
				<div class="market-form">
					<div class="d1">
						<form class="Search-form">
						<input type="Search" placeholder="Ведите название">
						</form>
					</div>
					<div class="d1_min">
						<form class="Number-form_min">
						<input type="number" placeholder="Мин.цена">
						</form>
					</div>
					<div class="d1_max">
						<form class="Number-form_max">
						<input type="number" placeholder="Макс.цена">
						</form>
					</div>
				</div>
				<div class="market-list-mini">
				
				<a href="#" class="buy" onclick="cart.addToCart(this, '001', priceList['001'])">
				<div class="item">
				<div class="price_222">74487,60 <i class="fa fa-rub" aria-hidden="true"></i></div>
				<img class="img" src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-MhMj5aoTTl3Ju6dBlhf3T-oL8i2u4ohQ0JwavdcTCJxhoaVmG_Fnoxua9hcS4vJrIznRjuHZx7XeLmRflhUxLP7NsgfPNTV-eGeUXSwZKyJQd/360fx360f" alt="">
				<div class="text">★ Штык-нож M9 <p>Автотроника</div>
				</div></a>
				
				<a href="#" class="buy" onclick="cart.addToCart(this, '002', priceList['002'])">
				<div class="item">
				<div class="price_222">11199 <i class="fa fa-rub" aria-hidden="true"></i></div>
				<img class="img" src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD4eOskYKZlsj4OrzZglRd6dd2j6fApdX03ley-EdkMWjzJtCdclM2ZlrS_ALtxu-7hZW5uJmczHJhvSAh-z-DyBAi1xKI/360fx360f" alt="">
				<div class="text">★ Тычковые ножи<p>Убийство</div>
				</div></a>
				
				<a href="#" class="buy" onclick="cart.addToCart(this, '003', priceList['003'])">
				<div class="item">
				<div class="price_222">52630,82 <i class="fa fa-rub" aria-hidden="true"></i></div>
				<img class="img" src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqPP7I6vdk3lu-M1wmeySyoD8j1yglB89IT6mOo_GIQ82NFjS_1nol-ftg57pupqbmCAy7iUisXbYlxK-iU1IOuJuhaGACQLJIyTq34k/360fx360f" alt="">
				<div class="text">★ Нож-бабочка<p>Волны</div>
				</div></a>
				
				<a href="#" class="buy" onclick="cart.addToCart(this, '004', priceList['004'])">
				<div class="item">
				<div class="price_222">21628,07 <i class="fa fa-rub" aria-hidden="true"></i></div>
				<img class="img" src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfwObaZzRU7dCJlo-cnvLLMrXugmJW7ddOhfvA-4vwt1i9rBsoDDWiZtHAbFc2Mg7SrFW8wOq8jJO86pjAzntr7CEnsX_dnhbhhklPbbBpjPKcHw2AR_se0_ywIGs/360fx360f" alt="">
				<div class="text">★ StatTrak™ Нож Боуи Зуб тигра</div>
				</div></a>
				</div>
				</div>
				</div>
			
				<div class="home_1" id="home">
				<div class="home_news"><div class="news_Stonks"></div></div>
				</div>
			</div>

			
<!---Форма для магазина-------------------------------->
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right">[закрыть]</a>
<h4>Введите ваши контактные данные</h4>

<form id="formToSend">
<input id="fio" type="text" placeholder="Ваши фамилия и имя"  class="" />
<input id="city" type="text" placeholder="Город"  class="text-input"/>
<input id="phone" type="text" placeholder="Контактный телефон" class="text-input"/>
<input id="email" type="text" placeholder="Электронная почта" class="" />
<br>
<textarea id="question" placeholder="Адрес"></textarea>
<br>
<b>Доставка:</b>
<br>
<select id="delivery">
<option value="-">-</option>
<option value="Почта РФ">Почта РФ</option>
<option value="EMS">EMS</option>
<option value="DHL">DHL</option>
<option value="TNT">TNT</option>
</select>
<br>
<input type="checkbox" value="V"> Предоплата
</form>
<button onclick="cart.sendOrder('formToSend,overflw,bsum');" href="#">Отправить заказ</button>
</div>
<!----------------------------------------------------->
</body>
</html>
