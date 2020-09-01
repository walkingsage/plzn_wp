<?php
/**
 * Template name: Главная страница
 */

get_header(); ?>
<?php global $redux_demo; ?>
<main class="main">
        <section id="aboutme" class="about__me">
            <div class="container">
                <div class="about__me__content">
                    <div class="title">
                        <?php echo $redux_demo['about_me_title']; ?>
                    </div>
                    <div class="name">
                        <span class="line"></span>
                            алексей пилизин
                        <span class="line"></span>
                    </div>
                    <div class="subtitle">
                        <?php echo $redux_demo['about_me_subtitle']; ?>
                    </div>
                    <div class="about__me__main">
                        <div class="left">
                            <a class="top__socials socials" href="tel:893234234"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                            <a class="down__socials socials" href="mailto:pilizin-alexey@mail.ru"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a class="button svyaz" href="#contact">
                                связаться
                            </a>
                        </div>
                        <div class="center">
                            <img class="alexey" src="<?php echo $redux_demo['pilizin_photo']['url']; ?>" alt="Алексей Пилизин">
                        </div>
                        <div class="right">
                            <a class="top__socials socials" href="https://www.instagram.com/pilizinaleksey/?igshid=19x666unxoec0" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a class="down__socials socials" href="https://vk.com/pilizin_aleksey" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a class="button to__gallery" href="#gallery">
                                смотреть работы
                            </a>
                        </div>
                        <div style="display: none;" class="socials__bottom">
                            <a class="top__socials socials" href="tel:<?php echo $redux_demo['phone_number']; ?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                            <a class="down__socials socials" href="mailto:<?php echo $redux_demo['email_value']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a class="top__socials socials" href="<?php echo $redux_demo['instagram_value']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a class="down__socials socials" href="<?php echo $redux_demo['vk_value']; ?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        </div>
                        <div style="display: none;" class="buttons__bottom">
                            <a class="button svyaz" href="#contact">
                                связаться
                            </a>
                            <a class="button to__gallery" href="#gallery">
                                смотреть работы
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="display: none;" class="zoom">
            <div class="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <img src="img/test.jpg" alt="zoom photos">
            <div class="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="close">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
        <section id="gallery" class="gallery__title">
            <div class="container">
                <div class="gallery__title__main">
                    <div class="title gallery__tit">
                        <?php echo $redux_demo['portfolio_title']; ?>
                    </div>
                    <div class="subtitle gallery__sub__fitnes">
                        <?php echo $redux_demo['portfolio_fitness_subtitle']; ?>
                    </div>
                    <div style="display: none;" class="subtitle gallery__sub__food">
                        <?php echo $redux_demo['portfolio_food_subtitle']; ?>
                    </div>
                    <div class="choise">
                        <a class="to__fitnes active" href="#photos">фитнес-фотосессия</a>
                        <a class="to__food" href="#photos">фуд-фотосессия</a>
                    </div>
                </div>
            </div>
                <div id="photos" class="gallery">
                    <div class="gallery__fitnes">
                        <!-- <img src="img/pic1.jpg" alt="">
                        <img src="img/pic2.jpg" alt="">
                        <img src="img/test.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic3.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic5.jpg" alt="">
                        <img src="img/pic3.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic5.jpg" alt="">
                        <img src="img/test.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic3.jpg" alt="">
                        <img src="img/pic1.jpg" alt="">
                        <img src="img/pic2.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic5.jpg" alt="">
                        <img src="img/pic3.jpg" alt="">
                        <img src="img/pic4.jpg" alt="">
                        <img src="img/pic5.jpg" alt=""> --> 
                        <?php 
                            global $redux_demo;
                            $myGalleryIDs = explode(',', $redux_demo['opt-gallery']);
                            foreach($myGalleryIDs as $myPhotoID):
                                $photoArray = wp_get_attachment($myPhotoID);
                            ?>
                                    <img src="<?php echo wp_get_attachment_url( $myPhotoID ); ?>" class="img-rounded" alt="<?php echo $photoArray[title]; ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div style="display: none;" id="photos" class="gallery__food">
                        <!-- <img src="img/fpic1.jpg" alt="">
                        <img src="img/fpic2.jpg" alt="">
                        <img src="img/fpic3.jpg" alt="">
                        <img src="img/fpic4.jpg" alt="">
                        <img src="img/fpic5.jpg" alt="">
                        <img src="img/fpic6.jpg" alt="">
                        <img src="img/fpic3.jpg" alt="">
                        <img src="img/fpic3.jpg" alt="">
                        <img src="img/fpic2.jpg" alt="">
                        <img src="img/fpic4.jpg" alt="">
                        <img src="img/fpic5.jpg" alt="">
                        <img src="img/fpic6.jpg" alt="">
                        <img src="img/fpic4.jpg" alt="">
                        <img src="img/fpic5.jpg" alt="">
                        <img src="img/fpic6.jpg" alt="">
                        <img src="img/fpic3.jpg" alt="">
                        <img src="img/fpic2.jpg" alt="">
                        <img src="img/fpic4.jpg" alt="">
                        <img src="img/fpic5.jpg" alt="">
                        <img src="img/fpic6.jpg" alt="">
                        <img src="img/fpic3.jpg" alt="">
                        <img src="img/fpic2.jpg" alt=""> -->
                        <?php 
                            global $redux_demo;
                            $myGalleryIDs = explode(',', $redux_demo['opt-gallery-food']);
                            foreach($myGalleryIDs as $myPhotoID):
                                $photoArray = wp_get_attachment($myPhotoID);
                            ?>
                                    <img src="<?php echo wp_get_attachment_url( $myPhotoID ); ?>" class="img-rounded" alt="<?php echo $photoArray[title]; ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="contact__main">
                    <div class="title">
                        <?php echo $redux_demo['contact_title']; ?>
                    </div>
                    <div class="subtitle">
                        <?php echo $redux_demo['contact_subtitle']; ?>
                    </div>
                    <form id="contact__form">
                        <div class="fields">
                            <input type="text" name="name" class="input input__name" placeholder="Введите имя" required>
                            <input type="tel" name="phone" id="number" class="input input__phone" placeholder="Введите телефон" required>
                            <input style="display: none;" type="text" name="sub" class="input" value="Обратная связь с сайта">
                            <textarea name="message" cols="1" rows="10" class="input input__text" placeholder="Введите текст сообщения"></textarea>
                            <div class="submit__data">
                                <input class="check" type="checkbox" required>
                                <p>Соглашаюсь на <a id="to__soglashenie" class="active">обработку персональных данных</a></p>
                            </div>
                            <div class="contact__socials">
                                <div style="display: none;" class="socials__mobile">
                                    <a class="mail" href="mailto:<?php echo $redux_demo['email_value']; ?>"><?php echo $redux_demo['email_value']; ?></a>
                                    <a class="socials mail__icon" href="mailto:<?php echo $redux_demo['email_value']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                    <a class="socials phone__icon" href="tel:<?php echo $redux_demo['phone_number']; ?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                                    <a class="phone" href="tel:<?php echo $redux_demo['phone_number']; ?>"><?php echo $redux_demo['phone_number']; ?></a>
                                </div>
                                <div class="socials__mail">
                                    <a class="mail" href="mailto:<?php echo $redux_demo['email_value']; ?>"><?php echo $redux_demo['email_value']; ?></a>
                                    <a class="socials" href="mailto:<?php echo $redux_demo['email_value']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                </div>
                                <div class="socials__phone">
                                    <a class="socials" href="tel:<?php echo $redux_demo['phone_number']; ?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                                    <a class="phone" href="tel:<?php echo $redux_demo['phone_number']; ?>"><?php echo $redux_demo['phone_number']; ?></a>
                                </div>
                            </div>
                            <input id="submit" value="Отправить" type="submit">
                        </div>
                        <div style="display: none;" class="note">
                            <div class="title">
                                Успешно
                            </div>
                            <div class="subtitle">
                                Ваше сообщение отправлено, я свяжусь с вами в ближайшее время!
                            </div>
                            <div class="socials">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div style="display: none;" class="obrabotka">
            <i class="fa fa-close close__obrabotka" aria-hidden="false"></i>
            <div class="container">
                <div class="obrabotka__main">
                    <div class="title">
                        соглашение на обработку персональных данных
                    </div>
                    <div class="soglashenie">
                        <ol>
                            <li>Настоящим я, далее – «Субъект Персональных Данных», во исполнение требований Федерального закона от 27.07.2006 г. № 152-ФЗ «О персональных данных» (с изменениями и дополнениями) свободно, своей волей и в своем интересе даю свое согласие Организации «ИП Пилизин», далее – «<a href="http://pilizin.ru">www.pilizin.ru</a>», на обработку своих персональных данных, указанных при отправке контактных данных путем заполнения веб-формы на сайте <a href="http://pilizin.ru/">www.pilizin.ru</a>, направляемой (заполненной) с использованием Сайта, с установкой соответствующей галочки в поле с согласием обработки персональных данных.</li>
                            <li>Под персональными данными я понимаю любую информацию, относящуюся ко мне как к Субъекту Персональных Данных, в том числе мои фамилию, имя, отчество, контактные данные (телефон, факс, электронная почта, почтовый адрес). Под обработкой персональных данных я понимаю сбор, систематизацию, накопление, уточнение, обновление, изменение, использование, распространение, передачу, в том числе трансграничную, обезличивание, блокирование, уничтожение, бессрочное хранение и любые другие действия (операции) с персональными данными.</li>
                            <li>Обработка персональных данных Субъекта Персональных Данных осуществляется исключительно для обратной связи с Субъектом Персональных Данных <a href="http://pilizin.ru/">www.pilizin.ru</a> с последующим звонком на указанный Субъектом Персональных Данных контактный телефон.</li>
                            <li>Датой выдачи согласия на обработку персональных данных Субъекта Персональных Данных является дата отправки контактной веб-формы с сайта <a href="http://pilizin.ru/">www.pilizin.ru</a>.</li>
                            <li>Обработка персональных данных Субъекта Персональных Данных может осуществляться с помощью средств автоматизации и/или без использования средств автоматизации в соответствии с действующим законодательством РФ и внутренними положениями сайта <a href="http://pilizin.ru/">www.pilizin.ru</a>.</li>
                            <li>Сайт <a href="http://pilizin.ru/">www.pilizin.ru</a> ruпринимает необходимые правовые, организационные и технические меры или обеспечивает их принятие для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных, а также принимает на себя обязательство сохранения конфиденциальности персональных данных Субъекта Персональных Данных.</li>
                            <li>Компания обязуется не передавать полученные персональные данные третьим лицам, за исключением следующих случаев:
                                <ul type='disc'>
                                    <li>По запросам уполномоченных органов государственной власти РФ только по основаниям и в порядке, установленным законодательством РФ</li>
                                    <li>Стратегическим партнерам, которые работают с Компанией для предоставления продуктов и услуг, или тем из них, которые помогают Компании реализовывать продукты и услуги потребителям. Мы предоставляем третьим лицам минимальный объем персональных данных, необходимый только для оказания требуемой услуги или проведения необходимой транзакции.</li>
                                </ul>
                            </li>
                            <li>Я ознакомлен(а), что:
                                <ul type='disc'>
                                    <li>согласие может быть отозвано мною на основании письменного заявления в произвольной форме;</li>
                                    <li>предоставление персональных данных третьих лиц без их согласия влечет ответственность в соответствии с действующим законодательством Российской Федерации.</li>
                                </ul>
                            </li>
                        </ol>
                        <div class="bottom__text">Утверждено и действительно на сайте <a href="http://pilizin.ru/">www.pilizn.ru</a> <br> с «01» «сентября» «2020» года</div>
                    </div>  
                </div>
            </div>
        </div>
        <div style="display: none;" class="politika">
            <i class="fa fa-close close__politika" aria-hidden="false"></i>
            <div class="container">
                <div class="politika__main">
                    <div class="title">
                        политика конфиденциальности
                    </div>
                    <div class="soglashenie">
                        Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые Пилизиниым Алексеем Владимировичем (далее – Оператор).
                        <ol>
                            <li>Общие положения
                                <ol class="inner">
                                    <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
                                    <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <a href="http://www.pilizin.ru/">http://www.pilizin.ru</a>.</li>
                                </ol>
                            </li>
                            <li>Основные понятия, используемые в Политике.
                                <ol class="inner">
                                    <li>Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;</li>
                                    <li>Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);</li>
                                    <li>Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу <a href="http://www.pilizin.ru/">http://www.pilizin.ru</a>;</li>
                                    <li>Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;</li>
                                    <li>Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;</li>
                                    <li>Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</li>
                                    <li>Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;</li>
                                    <li>Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта <a href="http://www.pilizin.ru/">http://www.pilizin.ru</a>;</li>
                                    <li>Пользователь – любой посетитель веб-сайта <a href="http://www.pilizin.ru/">http://www.pilizin.ru</a>;</li>
                                    <li>Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;</li>
                                    <li>Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;</li>
                                    <li>Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;</li>
                                </ol>
                            </li>
                        </ol>
                        <div class="bottom__text">Утверждено и действительно на сайте <a href="http://pilizin.ru/">www.pilizn.ru</a> <br> с «01» «сентября» «2020» года</div>
                    </div>  
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>