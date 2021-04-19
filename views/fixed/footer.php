
    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer class="well bg_2">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <h3>O nama</h3>

                    <p>Mi smo salon specijalizovan za prodaju najkvalitetnijih sigurnosnih i sobnih vrata. Naš zadatak je
                    da na domaćem tržištu prikupimo najkvalitetnije proizvode u jednu prodavnicu, što će
                    omogućiti kupcima da naprave pravi izbor pri kupovini. </p>
					
					<br/><br/>
					<img src="images/payment.jpg" alt="nacini placanja">

                </div>
                <div class="col-sm-4">
                    <h3>Naša ponuda</h3>
                    <ul class="list">
                    <?php 
                    $categories = getAllCategories();
                    foreach($categories as $category):
                    
                    
                    ?>
                        <li>
                            <a href="index.php?page=doors&catid=<?=$category->id?>"><?=$category->name?></a>

                        </li>
                    <?php endforeach; ?>


                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3>Kontaktirajte nas</h3>

       <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                        <input type="hidden" name="form-type" value="contact"/>
                        <fieldset>
                            <label>
                                <input type="text"
                                       name="name"
                                       placeholder="Ime i prezime"
                                       data-constraints="@LettersOnly @NotEmpty"/>
                            </label>


                            <label>
                                <input type="text"
                                       name="email"
                                       placeholder="E-mail"
                                       data-constraints="@Email @NotEmpty"/>
                            </label>


                            <label>
        <textarea name="message" placeholder="Poruka..."
                  data-constraints="@NotEmpty"></textarea>
                            </label>

                            <div class="mfControls">
                                <button class="btn_1" type="submit">Pošaljite poruku</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
            <div class="row rowwr">
                <div class="col-sm-4 flright"></div>
                <div class="col-sm-4 flright">
                    <ul class="social-list">
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 flright">
                    <div class="copy">
                        Bata Vrata © <span id="copyright-year"></span><br/> Sva prava zadržana.
                        <!-- {%FOOTER_LINK} -->
                    </div>
		<a href="index.php?page=login">...</a>
                </div>
            </div>
        </div>
    </footer>

</div>
<script src="js/script.js"></script>

</body></html>