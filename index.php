<?php include 'header.php'; ?>

    <main class="indexpage">
    	<section class="main">
    		    <div class="searchbar">
                <input id="search" type="search" placeholder="Search" class="searchbar__input">
                <i class="searchbar__icon"></i>
            </div><!-- end of searchbar -->

            <div class="dictionary">
                <div class="results">
                    <div class="initial__display">
                        <div class="initial__display__background"></div>
                        <p id="initial__display__letter" class="initial__display__letter">A</p>
                    </div>

                    <div class="results__container"></div><!-- end of results__container -->
                </div><!-- end of results -->

                <div class="letters__bar">
                    <div class="letters__bar__container">
                        <div class="ticker">
                            <span class="ticker__highlight"></span>

                            <div class="ticker__band">
                                <a href="#section_letter-a" data-letter="a" class="ticker__token loaded">
                                    <span class="ticker__token__letter">A</span>
                                </a>

                                <a href="#section_letter-b" data-letter="b" class="ticker__token">
                                    <span class="ticker__token__letter">B</span>
                                </a>

                                <a href="#section_letter-c" data-letter="c" class="ticker__token">
                                    <span class="ticker__token__letter">C</span>
                                </a>

                                <a href="#section_letter-d" data-letter="d" class="ticker__token">
                                    <span class="ticker__token__letter">D</span>
                                </a>

                                <a href="#section_letter-e" data-letter="e" class="ticker__token">
                                    <span class="ticker__token__letter">E</span>
                                </a>

                                <a href="#section_letter-f" data-letter="f" class="ticker__token">
                                    <span class="ticker__token__letter">F</span>
                                </a>

                                <a href="#section_letter-g" data-letter="g" class="ticker__token">
                                    <span class="ticker__token__letter">G</span>
                                </a>

                                <a href="#section_letter-h" data-letter="h" class="ticker__token">
                                    <span class="ticker__token__letter">H</span>
                                </a>

                                <a href="#section_letter-i" data-letter="i" class="ticker__token">
                                    <span class="ticker__token__letter">I</span>
                                </a>

                                <a href="#section_letter-j" data-letter="j" class="ticker__token">
                                    <span class="ticker__token__letter">J</span>
                                </a>

                                <a href="#section_letter-k" data-letter="k" class="ticker__token">
                                    <span class="ticker__token__letter">K</span>
                                </a>

                                <a href="#section_letter-l" data-letter="l" class="ticker__token">
                                    <span class="ticker__token__letter">L</span>
                                </a>

                                <a href="#section_letter-m" data-letter="m" class="ticker__token">
                                    <span class="ticker__token__letter">M</span>
                                </a>

                                <a href="#section_letter-n" data-letter="n" class="ticker__token">
                                    <span class="ticker__token__letter">N</span>
                                </a>

                                <a href="#section_letter-ñ" data-letter="ñ" class="ticker__token">
                                    <span class="ticker__token__letter">Ñ</span>
                                </a>

                                <a href="#section_letter-o" data-letter="o" class="ticker__token">
                                    <span class="ticker__token__letter">O</span>
                                </a>

                                <a href="#section_letter-p" data-letter="p" class="ticker__token">
                                    <span class="ticker__token__letter">P</span>
                                </a>

                                <a href="#section_letter-q" data-letter="q" class="ticker__token">
                                    <span class="ticker__token__letter">Q</span>
                                </a>

                                <a href="#section_letter-r" data-letter="r" class="ticker__token">
                                    <span class="ticker__token__letter">R</span>
                                </a>

                                <a href="#section_letter-s" data-letter="s" class="ticker__token">
                                    <span class="ticker__token__letter">S</span>
                                </a>

                                <a href="#section_letter-t" data-letter="t" class="ticker__token">
                                    <span class="ticker__token__letter">T</span>
                                </a>

                                <a href="#section_letter-u" data-letter="u" class="ticker__token">
                                    <span class="ticker__token__letter">U</span>
                                </a>

                                <a href="#section_letter-v" data-letter="v" class="ticker__token">
                                    <span class="ticker__token__letter">V</span>
                                </a>

                                <a href="#section_letter-w" data-letter="w" class="ticker__token">
                                    <span class="ticker__token__letter">W</span>
                                </a>

                                <a href="#section_letter-x" data-letter="x" class="ticker__token">
                                    <span class="ticker__token__letter">X</span>
                                </a>

                                <a href="#section_letter-y" data-letter="y" class="ticker__token">
                                    <span class="ticker__token__letter">Y</span>
                                </a>

                                <a href="#section_letter-z" data-letter="z" class="ticker__token">
                                    <span class="ticker__token__letter">Z</span>
                                </a>
                            </div><!-- end of ticker__band -->
                    </div>
                </div><!-- end of letters__bar -->
            </div><!-- end of dictionary -->
    	</section><!-- end of main -->

    	<aside class="aside">
    		<div class="aside__container">
    			<div class="aside__header">
    				<h4 class="aside__header__title">Información de usuario</h4>
    			</div><!-- end of aside__header -->

    			<div class="aside__body">
    				<div class="user__settings">
                        <div class="user__settings__image">
                            <img src="img/user-img.jpg">
                        </div>
                        <div class="user__settings__information">
                            <p class="user__settings__name">Susana Taranco</p>
                            <p class="user__settings__email">tarancosan@gmail.com</p>

                            <a href="#" class="user__settings__link link">Editar mis datos</a>
                        </div>
                    </div>

                    <div class="user__preferences">
                        <form class="preferences__form">
                            <table class="form__table">
                                <tr class="form__row">
                                    <th colspan="2" class="form__title">Preferencias de búsqueda</th>
                                </tr>

                                <tr class="form__row">
                                    <td class="form__cell-label">
                                        <label class="input-label" for="input-000">
                                            <span class="input-label-content">Preferencia 1 <span class="color-red">*</span>:</span>
                                        </label>
                                    </td>

                                    <td class="form__cell-input">
                                        <input type="text" name="input-000" id="input-000">
                                    </td>
                                </tr>


                                <tr class="form__row">
                                    <td class="form__cell-label">
                                        <label class="input-label" for="input-001">
                                            <span class="input-label-content">Preferencia 2:</span>
                                        </label>
                                    </td>

                                    <td class="form__cell-input">
                                        <input type="text" name="input-001" id="input-001">
                                    </td>
                                </tr>

                                <tr class="form__row">
                                    <td class="form__cell-label">
                                        <label class="input-label" for="input-002">
                                            <span class="input-label-content">Preferencia 3: <span class="doubt-sign ion-help-circled"></span></span>
                                        </label>

                                        <div class="doubt">Edison bulb hashtag art party subway tile tilde, hammock prism crucifix.</div>
                                    </td>

                                    <td class="form__cell-input">
                                        <select>
                                            <option class="default" selected>- Select -</option>
                                            <option>Goalkeeper</option>
                                            <option>Defenders</option>
                                            <option>Midfielders</option>
                                            <option>Forwards</option>
                                        </select>
                                        <span class="icon ion-arrow-down-b"></span>
                                    </td>
                                </tr>
                                <tr class="form__row">
                                    <td class="form__cell">
                                        <button type="submit" value="send" class="button">Guardar</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <p>Kinfolk etsy 3 wolf moon, qui  est  authentic fanny pack sunt fap vice readymade paleo.  Plaid placeat kale chips nisi.  Lyft adipisicing vegan authentic beard.  Slow-carb +1 hashtag aliqua, cold-pressed blue bottle deep v farm-to-table consectetur.  Edison bulb hashtag art party subway tile tilde, hammock prism crucifix.  Keffiyeh qui  cornhole duis, ea nulla  anim  3 wolf moon put a bird on it cray mollit  aliqua tumblr in.  Umami pabst whatever, truffaut banjo hammock shoreditch vape glossier bitters leggings gentrify cardigan.</p><p>Seitan sapiente bicycle rights, delectus lomo meggings gluten-free.  Paleo 8-bit irony, viral bespoke drinking vinegar cupidatat  fam readymade shoreditch aute  neutra af venmo plaid.  Vexillologist qui  listicle pitchfork tote bag af.  Leggings heirloom listicle waistcoat.  Leggings umami chillwave, pabst delectus forage normcore freegan direct trade.  Messenger bag labore aliquip intelligentsia.  Meggings voluptate  pitchfork pork belly.</p><p>Eiusmod knausgaard banjo, lyft vegan man braid enamel pin et.  Distillery gluten-free mixtape pour-over, cray meggings try-hard intelligentsia seitan art party selvage fingerstache blog.  You probably haven't heard of them incididunt vexillologist pariatur, kale chips kinfolk elit.  Humblebrag tote bag velit  excepteur  fap bespoke.  Messenger bag meggings irure  pickled.  Do cred art party, deserunt  aliquip flannel laboris  photo booth hella glossier pug reprehenderit.  Ex irony occupy fingerstache jianbing.</p>
    			</div><!-- end of aside__header -->
    		</div><!-- end of aside__container -->
    	</aside><!-- end of aside -->
    </main><!-- end of indexpage -->

<?php include 'footer.php'; ?>
