
<?php
$faqs = [
    [
        "question" => "How to adopt a pet?",
        "answer" => "If you want to adopt an animal. Before you come to Adoptme, please make an account or login. Set your date to come, we will make a note on the daily guest list.",
    ],
    [
        "question" => "Does Adoptme also sell my dog's needs?",
        "answer" => "Yes, Adoptme also provides a wide range of pet supplies to cater for your dog's needs. From food to toys, we've got it all.",
    ],
    [
        "question" => "Was I given an official adoption letter when I adopted?",
        "answer" => "Yes, after the adoption process, you will receive an official adoption letter as a proof of your new companionship.",
    ],
    [
        "question" => "How long does the process take to adopt?",
        "answer" => "The adoption process duration can vary, but it usually takes between a few days to a week for all the checks and paperwork to be completed.",
    ],
    [
        "question" => "What are the requirements for adopting a pet?",
        "answer" => "Adopters need to be at least 18 years old, provide identification, and proof of address. A home visit may be required to ensure the pet is going to a safe and suitable home.",
    ],
    [
        "question" => "How much should I spend to adopt?",
        "answer" => "Adoption costs can vary based on the pet's age, breed, and health status. It's best to contact us directly for specific information.",
    ],
    [
        "question" => "What kind of care should I give my pet?",
        "answer" => "Your pet will need regular feeding, exercise, veterinary care, and lots of love and attention. Specific care requirements may vary based on the pet's age, breed, and health status.",
    ],
    [
        "question" => "Where is my nearest adoption place?",
        "answer" => "You can find the nearest adoption center by visiting our website and using the 'Find a Center' function.",
    ]
];
?>
<div class="module--faqs" id="faqs">
    <div class="module--faqs__container">
        
        <div class="module--faqs__content">
            <div class="module--faqs__header">
            Forum answer and question
            </div>
            <div class="module--faqs__subheader">
            Adopt the pet that has waited too long  
            </div>
            <div class="module--faqs__description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. It ac purus eget. Sim dolor sit amet, consectetur adipisci.
            </div>
        </div>
        <div class="module--faqs__faqs-container">
            <?
            foreach($faqs as $faq): ?>
            <div class="module--faqs__item">
                <div class="module--faqs__question">
                    <span><?= $faq["question"]?></span>
                    <i class="fa-regular fa-square-caret-down"></i>
                </div>
                <div class="module--faqs__answer">
                    <p><?= $faq["answer"]?></p>
                </div>
            </div>
            <?endforeach?>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
    $(".module--faqs__faqs-container").accordion({
        header: ".module--faqs__question",
        collapsible: true,
        active: false,
        heightStyle: "content"
    });
});
</script>