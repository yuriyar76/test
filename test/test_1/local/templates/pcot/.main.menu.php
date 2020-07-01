<?
if($_SERVER['REQUEST_URI']=='/about/'){
    $aMenuLinks = Array(
        Array(
            "Документы",
            "#about-sect-docs",
            Array(),
            Array(),
            ""
        ),

        Array(
            "Отзывы",
            "#mark-3",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Наши клиенты",
            "#mark-4",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Контакты",
            "#mark-5",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Заказать",
            "#mark-6 ",
            Array(),
            Array(),
            ""
        )
    );
}
if($_SERVER['REQUEST_URI']!='/'){
    $aMenuLinks = Array(
        Array(
            "О компании",
            "/about/",
            Array(),
            Array(),
            ""
        ),

        Array(
            "Отзывы",
            "#mark-3",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Наши клиенты",
            "#mark-4",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Контакты",
            "#mark-5",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Заказать",
            "#mark-6 ",
            Array(),
            Array(),
            ""
        )
    );
}
if($_SERVER['REQUEST_URI']=='/'){
    $aMenuLinks = Array(
        Array(
            "О компании",
            "#mark-2",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Преимущества",
            "#mark-1",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Отзывы",
            "#mark-3",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Наши клиенты",
            "#mark-4",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Контакты",
            "#mark-5",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Заказать",
            "#mark-6 ",
            Array(),
            Array(),
            ""
        )
    );
}?>
