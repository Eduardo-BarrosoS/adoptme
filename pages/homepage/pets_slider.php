<?php
$pets = [
    [
        "name" => "Bruno",
        "img-url" => "https://i.ibb.co/prPTC8g/image-19.png",
        "pet-age" => "1.2 years old",
        "date-waiting" => "180 days waiting",
    ],
    [
        "name" => "Max",
        "img-url" => "https://i.ibb.co/JjtgmbD/image-20.png",
        "pet-age" => "2 years old",
        "date-waiting" => "100 days waiting",
    ],
    [
        "name" => "Lucy",
        "img-url" => "https://i.ibb.co/j6CmGkw/image-21.png",
        "pet-age" => "6 months old",
        "date-waiting" => "50 days waiting",
    ],
    [
        "name" => "Buddy",
        "img-url" => "https://i.ibb.co/tL1bjMy/image-23.png",
        "pet-age" => "3 years old",
        "date-waiting" => "200 days waiting",
    ],
    [
        "name" => "Daisy",
        "img-url" => "https://i.ibb.co/VWQSh6m/image-24.png",
        "pet-age" => "1 year old",
        "date-waiting" => "120 days waiting",
    ],
    [
        "name" => "Milo",
        "img-url" => "https://i.ibb.co/sFSY3gn/image-25.png",
        "pet-age" => "4 months old",
        "date-waiting" => "40 days waiting",
    ],
    [
        "name" => "Bella",
        "img-url" => "https://i.ibb.co/PCyP8ND/image-2.png",
        "pet-age" => "2 years old",
        "date-waiting" => "190 days waiting",
    ],
    [
        "name" => "Charlie",
        "img-url" => "https://i.ibb.co/NZq2pQp/image-4.png",
        "pet-age" => "3 years old",
        "date-waiting" => "210 days waiting",
    ],
    [
        "name" => "Lola",
        "img-url" => "https://i.ibb.co/84R7g7P/image-5.png",
        "pet-age" => "1.5 years old",
        "date-waiting" => "160 days waiting",
    ],
    [
        "name" => "Rocky",
        "img-url" => "https://i.ibb.co/K7hcCBD/image-12.png",
        "pet-age" => "4 years old",
        "date-waiting" => "220 days waiting",
    ],
];
?>

<div class="module--pets-slider" id="pets-slider">
    <div class="module--pets-slider__content">
        <div class="module--pets-slider__header">
            adoption pet
        </div>
        <div class="module--pets-slider__subheader">
            Adopt the pet that has waited too long
        </div>
        <div class="module--pets-slider__description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. It ac purus eget. Sit dolor est proin vestibulum, duis. im dolor sit amet, consectetur adipisci.
        </div>
        <div class="module--pets-slider__filter-container">
            <button class="module--pets-slider__filter-button">
                <span>filter</span>
                <i class="fa-solid fa-filter"></i>
            </button>

            <div class="module--pets-slider__arrows-container">
                <div class="swiper-button-prev">
                    <!-- <i class="fa-regular fa-circle-left"></i> -->
                </div>
                <div class="swiper-button-next">
                    <!-- <i class="fa-regular fa-circle-right"></i> -->
                </div>
            </div>
        </div>
    </div> 
    <div class="swiper">
        <div class="swiper-wrapper module--pets-slider__slider">
        <?php
        foreach ($pets as $pet): ?>
            <div class="swiper-slide module--pets-slider__pet-card">
                <div class="module--pets-slider__img-container"> 
                    <img src="<?= $pet['img-url']?>" alt="" class="module--pets-slider__img">
                    <div class="module--pets-slider__img-overlay">
                        <button class="module--pets-slider__adopt-button"> Adopt </button>
                    </div>
                    <div class="module--pets-slider__waiting-time">
                        <span><?= $pet['date-waiting']?></span>
                    </div>
                </div>
                <div class="module--pets-slider__pet-info">
                    <span class="module--pets-slider__pet-name"><?= $pet['name']?></span>
                    <span class="module--pets-slider__pet-age"><?= $pet['pet-age']?></span>
                </div>
            </div>
            <? endforeach ?>
        </div>   
    </div>
</div>


<script>
    var swiper = new Swiper(".swiper", {
        slidesPerView: 5,
        spaceBetween: 14,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1092: {
                slidesPerView: 3,   
                spaceBetween: 40
            },
            1292: {
                slidesPerView: 4 ,
                spaceBetween: 30
            }
        },
        navigation: {
            prevEl: ".swiper-button-prev",
            nextEl: ".swiper-button-next",
        },
    });
</script>