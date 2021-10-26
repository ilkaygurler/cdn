CSS:
.gitphp {
	background-color: #fefefe;
	box-shadow: 0 10px 8px -8px rgb(0 0 0 / 12%);
	border: 1px solid rgba(0, 0, 0, .05);
	border-radius: 2px;
	padding: 17px
}

.gitbutton {
	display: flex;
	justify-content: center;
	cursor: pointer
}

.gitT,
.gitT a {
	text-align: center;
	font-size: 20px
        color: #48525c
}

.button {
	margin: 10px 10px 15px 10px;
}

HTML:
<div class='gitphp'>
   <h2 class='gitT'>ilkaygurler.com'dan ayrılıyorsunuz.</h2>
   <h2 class='gitT'>Yönlendirilen adres: <a rel='noreferrer' target='_blank'><span id='siteurl'/></a></h2>
   <div class='gitbutton'><a class='button' href='/'>Geri Dön</a> <a class='button' onclick='visitPage();'>Devam Et</a></div>
</div>
