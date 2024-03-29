

<div id="footer">
    <div class="container-footer">
        <div class="contact-info">
            <p>Телефон: +123456789</p>
            <p>Адрес: ул. Примерная, д. 123</p>
        </div>
        <div class="reserve-form">
            <h2>Забронировать столик</h2>
            <?php echo form_open('restaurant/reserve_table'); ?>

            <label for="name">Ваше имя:</label>
            <input type="text" name="name" required>

            <label for="phone">Ваш телефон:</label>
            <input type="tel" name="phone" required>

            <label for="date">Дата:</label>
            <input type="date" name="date" required>

            <label for="time">Время:</label>
            <input type="time" name="time" required>

            <label for="message">Сообщение:</label>
            <textarea name="message"></textarea>

            <button type="submit">Забронировать столик</button>

            <?php echo form_close(); ?>
        </div>
    </div>    
    <div class="social-icons">
        <a href="#" class="social-icon"><img src="path_to_facebook_icon" alt="Facebook"></a>
        <a href="#" class="social-icon"><img src="path_to_instagram_icon" alt="Instagram"></a>
        <a href="#" class="social-icon"><img src="path_to_vk_icon" alt="VKontakte"></a>
        <a href="#" class="social-icon"><img src="path_to_telegram_icon" alt="Telegram"></a>
    </div>
</div>