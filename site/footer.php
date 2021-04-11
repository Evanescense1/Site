 <?php if (empty($_COOKIE['messages_cookies'])): ?>
<div class="messages_cookies">
	<div class="messages_cookies-wrp">
		<a href="#" class="messages_cookies-close"></a>
		Мы используем cookie-файлы, чтобы получить статистику, которая помогает нам улучшить 
		сервис для Вас с целью персонализации сервисов и предложений. Вы можете прочитать 
		подробнее о cookie-файлах или изменить настройки браузера. Продолжая пользоваться 
		сайтом без изменения настроек, вы даёте согласие на использование ваших cookie-файлов.
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
	$('.messages_cookies-close').click(function(){
		$('.messages_cookies').hide(100);
		document.cookie = "messages_cookies=true; max-age=31556926";
		return false;
	});
});
</script>
</div>	
<?php endif; ?>
		<div id="footer">
            	<footer>
	<p>&#169 2021 Tutoring Academy»</p>
	</footer>
        </div>
    </body>
</html>