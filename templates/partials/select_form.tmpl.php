<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <p class="otst" style="font-size: 1.5em; text-align: center;">Для формирования кода информера выберите нужные параметры:</p>
    <table border="0" cellspacing="0" cellpadding="15" align="center" style="text-align:center;border: solid 2px #cccccc;border-radius: 8px;width: 100%;">
        <tr>
            <td colspan="3" style="font-size: 1.5em; background-color: #dddddd;">
                <input id="tags" name="city" type="text" style="margin-left: 25px;font-size: 1.0em;width: 300px;" placeholder="Введите название города"/></p>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center">
                <p><label for="color_fon">Прозрачный фон:</label> <input type='checkbox' name='transpar' value='1' /></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <p><label for="color_fon">Выберите шрифт:</label>
                    <select name='font_family' class='font_family'/>
                    <option value="Aldrich" STYLE="font-family: Aldrich;" selected>Aldrich</option>
                    <option value="Bad Script" STYLE="font-family: Bad Script;">Bad Script</option>
                    <option value="Comfortaa" STYLE="font-family: Comfortaa;">Comfortaa</option>
                    <option value="Indie Flower" STYLE="font-family: Indie Flower;">Indie Flower</option>
                    <option value="Fira Code" STYLE="font-family: Fira Code;">Fira Code</option>
                    <option value="Forum" STYLE="font-family: Forum;">Forum</option>
                    <option value="Jura" STYLE="font-family: Jura;">Jura</option>
                    <option value="El Messiri" STYLE="font-family: El Messiri;">El Messiri</option>
                    <option value="Kurale" STYLE="font-family: Kurale;">Kurale</option>
                    <option value="Kelly Slab" STYLE="font-family: Kelly Slab;">Kelly Slab</option>
                    <option value="Lobster" STYLE="font-family: Lobster;">Lobster</option>
                    <option value="Marck Script" STYLE="font-family: Marck Script;">Marck Script</option>
                    <option value="Neucha" STYLE="font-family: Neucha;">Neucha</option>
                    <option value="Open Sans" STYLE="font-family: Open Sans;">Open Sans</option>
                    <option value="Oswald" STYLE="font-family: Oswald;">Oswald</option>
                    <option value="Pangolin" STYLE="font-family: Pangolin;">Pangolin</option>
                    <option value="Play" STYLE="font-family: Play;">Play</option>
                    <option value="Poiret One" STYLE="font-family: Poiret One;">Poiret One</option>
                    <option value="Pacifico" STYLE="font-family: Pacifico;">Pacifico</option>
                    <option value="Press Start 2P" STYLE="font-family: Press Start 2P;">Press Start 2P</option>
                    <option value="Pattaya" STYLE="font-family: Pattaya;">Pattaya</option>
                    <option value="Roboto" STYLE="font-family: Roboto;">Roboto</option>
                    <option value="Ruslan Display" STYLE="font-family: Ruslan Display;">Ruslan Display</option>
                    <option value="Russo One" STYLE="font-family: Russo One;">Russo One</option>
                    <option value="Rubik Mono One" STYLE="font-family: Rubik Mono One;">Rubik Mono One</option>
                    <option value="Seymour One" STYLE="font-family: Seymour One;">Seymour One</option>
                    <option value="Stalinist One" STYLE="font-family: Stalinist One;">Stalinist One</option>
                    <option value="Underdog" STYLE="font-family: Underdog;">Underdog</option>
                    </select>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" style="background-color: #dddddd;">
                <h1>Выберите цвет фона и текста для вашего информера</h1></td></tr>
        <tr>
            <td> <div class="form-item">
                    <label for="color_fon">Цвет фона:</label> <input type="text" id="color_fon" name="color_fon" value="#2A88CD" style="width:60px;" />
                </div>
                <div id="picker_fon" style="padding-top:20px;"></div></td>
            <td><div class="form-item">
                    <label for="font_text">Цвет текста:</label> <input type="text" id="font_text" name="font_text" value="#ffffff" style="width:60px;"/>
                </div>
                <div id="picker_font_text" style="padding-top:20px;"></div></td>
            <td><div class="form-item">
                    <label for="font_tempo">Цвет температуры:</label> <input type="text" id="font_tempo" name="font_tempo" value="#ffffff" style="width:60px;"/>
                </div>
                <div id="picker_font_tempo" style="padding-top:20px;"></div></td>
        </tr>

        <tr>
            <td colspan="3" align="center" style="background-color: #dddddd;">
                <h1>Выберите тип графики</h1></td></tr>
        <tr>
            <td colspan="3" align="center">
                <p><br /></p>
                <p class="otst"><br /></p>
                <input type="radio" class="radio" id="radio-28" name="weather_tip_img" value="classic" checked>
                <label for="radio-28"> № 1 (Classic) <img src="assets/img/img_8_svg.png" height="80"  style="margin-bottom: -30px;"/> </label>
                <p class="otst"><br /></p>
                <input type="radio" class="radio" id="radio-29" name="weather_tip_img" value="ht">
                <label for="radio-29"> № 2 (Hi-Tech) <img src="assets/img/img_9_svg.png" height="80"  style="margin-bottom: -30px;"/> </label>
                <p class="otst"><br /></p>
                <input type="radio" class="radio" id="radio-30" name="weather_tip_img" value="neon">
                <label for="radio-30"> № 3 (Neon) <img src="assets/img/img_10_svg.png" height="80"  style="margin-bottom: -30px;"/> </label>
                <p class="otst"><br /></p>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center" style="background-color: #dddddd;">
                <h1>Выберите нужный вам тип информера</h1></td></tr>
        <tr>
            <td colspan="3" align="center">
                <input type="radio" class="radio" id="radio-1" name="weather_tip" value="1" checked="checked">
                <label for="radio-1"> Информер № 1</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-2" name="weather_tip" value="2">
                <label for="radio-2"> Информер № 2</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-3" name="weather_tip" value="3">
                <label for="radio-3"> Информер № 3</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-4" name="weather_tip" value="4">
                <label for="radio-4"> Информер № 4</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-5" name="weather_tip" value="5">
                <label for="radio-5"> Информер № 5</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-6" name="weather_tip" value="6">
                <label for="radio-6"> Информер № 6</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-7" name="weather_tip" value="7">
                <label for="radio-7"> Информер № 7</label>
                <p><br /></p>

                <input type="radio" class="radio" id="radio-8" name="weather_tip" value="8">
                <label for="radio-8"> Информер № 8</label>
                <p><br /></p>

                <input type='submit' name="submit" value='Сформировать код информера' class="knop">

            </td>
        </tr>
    </table>
</form>
