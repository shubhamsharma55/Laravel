<script>
    // $("#menu_Toggle_Fm").on("click", function() {
    //     $("#article_Dashboard_Id_FM").toggleClass("active");

    // });



    $("#menu_Toggle_Fm").on("click", function() {
        var $article = $("#article_Dashboard_Id_FM"); // Select the element by ID

        // Toggle the "active" class
        $article.toggleClass("active");

        // Check the current display property and toggle it
        if ($article.style("display") === 'none') {
            $article.style("display", 'block');
        } else {
            $article.style("display", 'none');
        }
    });
</script>
