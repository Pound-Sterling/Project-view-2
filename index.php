<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
</head>

<body>
    <nav class="nav">
        <div class="nav__img-wrapper">
            <img src="images/logo.svg" alt="">
        </div>
        <button class="nav__menu" id="menu">
            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0833 1H1V12.0833H12.0833V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M29.4993 1H18.416V12.0833H29.4993V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M29.4993 18.416H18.416V29.4993H29.4993V18.416Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.0833 18.416H1V29.4993H12.0833V18.416Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </button>
        <nav class="nav__nav">
            <ul class="nav__nav-list">
                <li class="nav__nav-item">
                    <a>
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M22.9368 4.65479C19.8568 2.55479 16.0534 3.53479 14.0001 5.93812C11.9468 3.53479 8.14342 2.54312 5.06342 4.65479C3.43009 5.77479 2.40342 7.66479 2.33342 9.65979C2.17009 14.1865 6.18342 17.8148 12.3084 23.3798L12.4251 23.4848C13.3118 24.2898 14.6768 24.2898 15.5634 23.4731L15.6918 23.3565C21.8168 17.8031 25.8184 14.1748 25.6668 9.64812C25.5968 7.66479 24.5701 5.77479 22.9368 4.65479V4.65479ZM14.1168 21.6415L14.0001 21.7581L13.8834 21.6415C8.33009 16.6131 4.66675 13.2881 4.66675 9.91645C4.66675 7.58312 6.41675 5.83312 8.75009 5.83312C10.5468 5.83312 12.2968 6.98812 12.9151 8.58645H15.0968C15.7034 6.98812 17.4534 5.83312 19.2501 5.83312C21.5834 5.83312 23.3334 7.58312 23.3334 9.91645C23.3334 13.2881 19.6701 16.6131 14.1168 21.6415Z" fill="#F8F8F8" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav__nav-item">
                    <a>
                        <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M16.4253 1.8125C16.6106 1.81251 16.791 1.87341 16.9407 1.98643C17.0904 2.09946 17.2016 2.25877 17.2583 2.44144L18.2208 5.539C18.6251 5.74381 19.0118 5.974 19.3811 6.23319L22.4541 5.54806C22.6353 5.508 22.824 5.52853 22.9932 5.6067C23.1624 5.68488 23.3033 5.81666 23.3956 5.98306L25.8211 10.3312C25.9137 10.4976 25.9529 10.69 25.9331 10.8809C25.9133 11.0718 25.8355 11.2513 25.7108 11.3934L23.6021 13.804C23.6328 14.2662 23.6328 14.7301 23.6021 15.1924L25.7108 17.6066C25.8355 17.7487 25.9133 17.9282 25.9331 18.1191C25.9529 18.31 25.9137 18.5024 25.8211 18.6688L23.3956 23.0187C23.3031 23.1848 23.1621 23.3162 22.9929 23.3941C22.8237 23.4719 22.6351 23.4922 22.4541 23.4519L19.3811 22.7668C19.0136 23.0242 18.6251 23.2562 18.2226 23.461L17.2583 26.5586C17.2016 26.7412 17.0904 26.9005 16.9407 27.0136C16.791 27.1266 16.6106 27.1875 16.4253 27.1875H11.5743C11.3891 27.1875 11.2086 27.1266 11.0589 27.0136C10.9092 26.9005 10.798 26.7412 10.7413 26.5586L9.78057 23.4628C9.37741 23.2586 8.98854 23.0255 8.61682 22.765L5.54557 23.4519C5.36439 23.492 5.1756 23.4715 5.0064 23.3933C4.8372 23.3151 4.69633 23.1833 4.60407 23.0169L2.17857 18.6688C2.08595 18.5024 2.04672 18.31 2.06654 18.1191C2.08635 17.9282 2.16419 17.7487 2.28882 17.6066L4.39757 15.1924C4.36703 14.7313 4.36703 14.2687 4.39757 13.8076L2.28882 11.3934C2.16419 11.2513 2.08635 11.0718 2.06654 10.8809C2.04672 10.69 2.08595 10.4976 2.17857 10.3312L4.60407 5.98125C4.69658 5.81518 4.83757 5.68377 5.00674 5.60593C5.17592 5.52809 5.36457 5.50783 5.54557 5.54806L8.61682 6.235C8.98782 5.97581 9.37632 5.742 9.78057 5.53719L10.7431 2.44144C10.7996 2.25936 10.9102 2.10047 11.0592 1.9875C11.2082 1.87453 11.3879 1.81327 11.5726 1.8125H16.4236H16.4253ZM15.7848 3.625H12.2148L11.2208 6.82769L10.5506 7.16662C10.2211 7.33362 9.903 7.52378 9.59857 7.73575L8.97907 8.17075L5.80107 7.46025L4.01607 10.6647L6.19482 13.1624L6.14232 13.9309C6.11718 14.3098 6.11718 14.6902 6.14232 15.0691L6.19482 15.8376L4.01257 18.3353L5.79932 21.5397L8.97732 20.8311L9.59682 21.2643C9.90125 21.4762 10.2193 21.6664 10.5488 21.8334L11.2191 22.1723L12.2148 25.375H15.7883L16.7858 22.1705L17.4543 21.8334C17.7835 21.6668 18.101 21.4766 18.4046 21.2643L19.0223 20.8311L22.2021 21.5397L23.9871 18.3353L21.8066 15.8376L21.8591 15.0691C21.8843 14.6896 21.8843 14.3086 21.8591 13.9291L21.8066 13.1606L23.9888 10.6647L22.2021 7.46025L19.0223 8.16713L18.4046 7.73575C18.101 7.52335 17.7835 7.33318 17.4543 7.16662L16.7858 6.8295L15.7866 3.625H15.7848ZM13.9998 9.0625C15.3922 9.0625 16.7276 9.63538 17.7121 10.6551C18.6967 11.6748 19.2498 13.0579 19.2498 14.5C19.2498 15.9421 18.6967 17.3252 17.7121 18.3449C16.7276 19.3646 15.3922 19.9375 13.9998 19.9375C12.6074 19.9375 11.2721 19.3646 10.2875 18.3449C9.30295 17.3252 8.74982 15.9421 8.74982 14.5C8.74982 13.0579 9.30295 11.6748 10.2875 10.6551C11.2721 9.63538 12.6074 9.0625 13.9998 9.0625V9.0625ZM13.9998 10.875C13.0716 10.875 12.1813 11.2569 11.5249 11.9367C10.8686 12.6166 10.4998 13.5386 10.4998 14.5C10.4998 15.4614 10.8686 16.3834 11.5249 17.0633C12.1813 17.7431 13.0716 18.125 13.9998 18.125C14.9281 18.125 15.8183 17.7431 16.4747 17.0633C17.1311 16.3834 17.4998 15.4614 17.4998 14.5C17.4998 13.5386 17.1311 12.6166 16.4747 11.9367C15.8183 11.2569 14.9281 10.875 13.9998 10.875V10.875Z" fill="white" />
                            </g>
                        </svg>

                    </a>
                </li>
                <li class="nav__nav-item">
                    <a>
                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M22.5144 7.83845L18.4519 3.6197C18.376 3.5415 18.2859 3.47963 18.1869 3.43764C18.0879 3.39566 17.9819 3.37437 17.875 3.37501H4.875C4.44402 3.37501 4.0307 3.5528 3.72595 3.86927C3.4212 4.18574 3.25 4.61496 3.25 5.06251V21.9375C3.25 22.3851 3.4212 22.8143 3.72595 23.1308C4.0307 23.4472 4.44402 23.625 4.875 23.625H21.125C21.556 23.625 21.9693 23.4472 22.274 23.1308C22.5788 22.8143 22.75 22.3851 22.75 21.9375V8.43751C22.7506 8.32647 22.7301 8.21639 22.6897 8.11359C22.6493 8.01079 22.5897 7.91729 22.5144 7.83845ZM9.75 5.06251H16.25V8.43751H9.75V5.06251ZM16.25 21.9375H9.75V15.1875H16.25V21.9375ZM17.875 21.9375V15.1875C17.875 14.74 17.7038 14.3107 17.399 13.9943C17.0943 13.6778 16.681 13.5 16.25 13.5H9.75C9.31902 13.5 8.9057 13.6778 8.60095 13.9943C8.2962 14.3107 8.125 14.74 8.125 15.1875V21.9375H4.875V5.06251H8.125V8.43751C8.125 8.88507 8.2962 9.31429 8.60095 9.63076C8.9057 9.94722 9.31902 10.125 9.75 10.125H16.25C16.681 10.125 17.0943 9.94722 17.399 9.63076C17.7038 9.31429 17.875 8.88507 17.875 8.43751V5.40845L21.125 8.78345V21.9375H17.875Z" fill="#F8F8F8" />
                            </g>
                        </svg>

                    </a>
                </li>
                <li class="nav__nav-item svg-stroke">
                    <a>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M3.25 8.125H22.75L21.6667 22.75H4.33333L3.25 8.125Z" stroke="#F8F8F8" stroke-width="1.91667" stroke-linejoin="round" />
                                <path d="M8.6665 10.2917V3.25H17.3332V10.2917" stroke="#F8F8F8" stroke-width="1.91667" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.6665 18.4165H17.3332" stroke="#F8F8F8" stroke-width="1.91667" stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav__nav-item svg-stroke">
                    <a>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M6.49984 3.25V22.75M6.49984 3.25L10.8332 7.58333M6.49984 3.25L2.1665 7.58333M19.4998 22.75V3.25M19.4998 22.75L23.8332 18.4167M19.4998 22.75L15.1665 18.4167" stroke="#F8F8F8" stroke-width="1.91667" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav__nav-item">
                    <a>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M23 11.4783C23.0117 17.8144 17.8445 22.9955 11.5083 23C8.77176 23.0019 6.25808 22.048 4.28273 20.4537C3.76908 20.0392 3.73068 19.2694 4.19745 18.8026L4.71991 18.2801C5.11912 17.8809 5.75644 17.8372 6.19873 18.1881C7.65408 19.343 9.49588 20.0323 11.5 20.0323C16.2161 20.0323 20.0322 16.2154 20.0322 11.5C20.0322 6.78385 16.2154 2.96775 11.5 2.96775C9.23644 2.96775 7.18058 3.84736 5.6541 5.28315L8.00761 7.63666C8.47503 8.10408 8.14399 8.90324 7.48302 8.90324H0.741935C0.332155 8.90324 0 8.57109 0 8.16131V1.42021C0 0.759233 0.799157 0.42819 1.26658 0.895564L3.556 3.185C5.62057 1.21195 8.41873 0 11.5 0C17.844 0 22.9882 5.13699 23 11.4783ZM14.6109 15.1316L15.0664 14.5459C15.4438 14.0607 15.3564 13.3615 14.8712 12.9842L12.9839 11.5162V6.67743C12.9839 6.06278 12.4856 5.56453 11.871 5.56453H11.129C10.5144 5.56453 10.0161 6.06278 10.0161 6.67743V12.9677L13.0492 15.3268C13.5344 15.7041 14.2336 15.6168 14.6109 15.1316V15.1316Z" fill="white" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>

    <main class="main">
        <header class="header">
            <div class="header__title">Dashboard</div>
            <div class="header__search">
                <img src="images/loop.svg" alt="">
                <input type="text" placeholder="Search Here">
            </div>
            <div class="header__account">
                <div class="header__account-logo">
                    <picture>
                        <img src="images/account-logo.png" alt="">
                </div>
                </picture>
                <div class="header__account-info">
                    <div class="header__account-name">Ferreen Torres</div>
                    <div class="header__account-login">@torres_4</div>

                </div>
            </div>
        </header>
        <section>
            <div class="main__content">
                <div class="main__content-hero">
                    <picture>
                        <img class="hero-main__image" src="images/hero.png" alt="">
                        <div class="hero-main__body">
                            <div class="hero-main__content">
                                <div class="hero__main-title">
                                    buy and sell the most trusted NFT marketplace
                                </div>
                                <button class="hero__main-button">
                                    get started
                                </button>
                            </div>
                            <img class="hero-helper__image" src="images/hero-girl.png" alt="">
                        </div>
                    </picture>
                </div>
                <div class="main__content-slider">
                    <div class="slider-title">trending creators</div>
                    <div class="slider-body">
                        <div class="slider-list">
                            <picture class="slider-item-mask1">
                                <img src="images/slider1.png" alt="">
                            </picture>
                            <picture class="slider-item-mask1">
                                <img src="images/slider2.png" alt="">
                            </picture>
                            <picture class="slider-item-mask1">
                                <img src="images/slider3.png" alt="">
                            </picture>
                            <picture class="slider-item-mask2">
                                <img src="images/slider4.png" alt="">
                            </picture>
                            <picture class="slider-item-mask2">
                                <img src="images/slider5.png" alt="">
                            </picture>
                            <picture class="slider-item-mask2">
                                <img src="images/slider6.png" alt="">
                            </picture>
                            <picture class="slider-item-mask2">
                                <img src="images/slider7.png" alt="">
                            </picture>
                            <picture class="slider-item-mask2">
                                <img src="images/slider8.png" alt="">
                            </picture>
                        </div>
                        <button class="slider-button slider-button__next">
                            <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.999999 13L6 7L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </button>
                    </div>
                </div>
                <div class="main__content-items">
                    <div class="main__content-header">
                        <div class="main__content-title">hot bids</div>
                        <div class="main__content-settings">
                            <input checked name="main__content-settings" id="setting__radio1" type='radio' value="All">
                            <label for="setting__radio1">All</label>
                            <input name="main__content-settings" id="setting__radio2" type='radio' value="Artwork">
                            <label for="setting__radio2">Artwork</label>
                            <input name="main__content-settings" id="setting__radio3" type='radio' value="Collectibles">
                            <label for="setting__radio3">Collectibles</label>
                            <input name="main__content-settings" id="setting__radio4" type='radio' value="Utility">
                            <label for="setting__radio4">Utility</label>
                        </div>
                    </div>
                    <div class="main__content-list">
                        <div class="main__content-item item-1">
                            <div class="content-item__info">
                                <div class="content-item__title">diamond cat collection </div>
                                <div class="content-item__author">
                                    <div class="content-item__logo">
                                        <img src="images/author1.png" alt="">
                                    </div>
                                    <div class="content-item__name">thomas lee</div>
                                </div>
                                <div class="content-item__price">
                                    <div class="content-item__crypto">500 ETH</div>
                                    <div class="content-item__usd">4034 USD</div>
                                </div>
                            </div>
                        </div>
                        <div class="main__content-item item-2">
                            <div class="content-item__info">
                                <div class="content-item__title">diamond Rabbit collection </div>
                                <div class="content-item__author">
                                    <div class="content-item__logo">
                                        <img src="images/author2.png" alt="">
                                    </div>
                                    <div class="content-item__name">Albert Thawn</div>
                                </div>
                                <div class="content-item__price">
                                    <div class="content-item__crypto">750 ETH</div>
                                    <div class="content-item__usd">7599 USD</div>
                                </div>
                            </div>
                        </div>
                        <div class="main__content-item item-3">
                            <div class="content-item__info">
                                <div class="content-item__title">diamond collection</div>
                                <div class="content-item__author">
                                    <div class="content-item__logo">
                                        <img src="images/author3.png" alt="">
                                    </div>
                                    <div class="content-item__name">Chris Evans</div>
                                </div>
                                <div class="content-item__price">
                                    <div class="content-item__crypto">350 ETH</div>
                                    <div class="content-item__usd">2900 USD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="main__aside">
                <div class="main__aside-header">
                    <div class="main__aside-title">statistice</div>
                    <div class="main__aside-viewed">View All</div>
                </div>
                <div class="main__aside-statistic">
                    <div class="main__aside-present">Present sell</div>
                    <div class="main__aside-total">Total earning</div>
                </div>
                <div class="main__aside-grafhic">
                    <img src="images/grafhic.png" alt="">
                    <div class="graphic-dates">
                        <div class="graphic-dates__item">Feb</div>
                        <div class="graphic-dates__item">Mar</div>
                        <div class="graphic-dates__item date__item-checked">Apr</div>
                        <div class="graphic-dates__item">Jun</div>
                        <div class="graphic-dates__item">July</div>
                    </div>
                </div>
                <div class="main__aside-sells">
                    <div class="aside__sells-header">
                        <div class="aside__sells-title">Top Sells</div>
                        <div class="aside__sells-viewed">view all</div>
                    </div>
                    <div class="aside__sells-items">
                        <div class="aside__sells-item">
                            <div class="sells__item-logo">
                                <img src="images/item2.jfif" alt="">
                            </div>
                            <div class="sells__item-info">
                                <div class="sells__item-title">diamond Rabbit</div>
                                <div class="sells__item-sold">Sold 403 </div>
                                <div class="sells__item-dateAndCost">
                                    <div class="sells__item-date">22 Jan 2022, 11:11PM</div>
                                    <div class="sells__item-cost">753 ETH </div>
                                </div>
                            </div>
                            <div class="aside__sells-settings">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="8" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="14" r="2" fill="#A168EC" />
                                </svg>
                            </div>
                        </div>
                        <div class="aside__sells-item">
                            <div class="sells__item-logo">
                                <img src="images/item.jfif" alt="">
                            </div>
                            <div class="sells__item-info">
                                <div class="sells__item-title">diamond cat </div>
                                <div class="sells__item-sold">Sold 300 </div>
                                <div class="sells__item-dateAndCost">
                                    <div class="sells__item-date">20 feb 2022, 10:25PM</div>
                                    <div class="sells__item-cost">375 ETH </div>
                                </div>
                            </div>
                            <div class="aside__sells-settings">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="8" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="14" r="2" fill="#A168EC" />
                                </svg>
                            </div>
                        </div>
                        <div class="aside__sells-item">
                            <div class="sells__item-logo">
                                <img src="images/item3.jfif" alt="">
                            </div>
                            <div class="sells__item-info">
                                <div class="sells__item-title">diamond Monkey</div>
                                <div class="sells__item-sold">Sold 799</div>
                                <div class="sells__item-dateAndCost">
                                    <div class="sells__item-date">10 Jan 2022, 09:00PM</div>
                                    <div class="sells__item-cost">750 ETH </div>
                                </div>
                            </div>
                            <div class="aside__sells-settings">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="8" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="14" r="2" fill="#A168EC" />
                                </svg>
                            </div>
                        </div>
                        <div class="aside__sells-item">
                            <div class="sells__item-logo">
                                <img src="images/sell-item.png" alt="">
                            </div>
                            <div class="sells__item-info">
                                <div class="sells__item-title">diamond flamingo</div>
                                <div class="sells__item-sold">Sold 290 </div>
                                <div class="sells__item-dateAndCost">
                                    <div class="sells__item-date">09 mar 2022, 11:10PM</div>
                                    <div class="sells__item-cost">350 ETH </div>
                                </div>
                            </div>
                            <div class="aside__sells-settings">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="8" r="2" fill="#A168EC" />
                                    <circle cx="2" cy="14" r="2" fill="#A168EC" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </section>
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>