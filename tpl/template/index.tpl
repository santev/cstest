<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$app_name}</title>
        <style>

            .left {
                width: 30%;
                float:left;
            }

            .right {
                width: 70%;
                float:right;
            }

            ul.level-0 {
                display: block;
            }

            .visible {
                display: block;
            }

            .green {
                color: green;
            }

            ul {
                display: none;
            }
        </style>
        <script src="vendor/components/jquery/jquery.min.js"></script>
    </head>
    <body>
        <span><a href="/{$app_name}">Все товары</a></span>


        <div class="container">
            <div class="left">
                {$catalog_menu}
            </div>
            <div class="right">
                {$product_list}
            </div>
        </div>

        <script>

            $("li.active").parents("ul").addClass("visible");
            $("li.active").children("a").addClass("green");
            $("li.active").children("ul").addClass("visible");

        </script>
    </body>
</html>