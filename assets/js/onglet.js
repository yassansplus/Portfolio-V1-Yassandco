$(function() {
    var veille = $('.veille');
    var article = $('.article');
    var epreuve = $('.epreuve');
    var epreuveonglet = $('.epreuveonglet');
    var articleonglet = $('.articleonglet');
    var veilleonglet = $('.veilleonglet');

    veille.hide();
    article.hide();
    epreuve.hide();

    epreuveonglet.click(function(){
        epreuve.show('slow');
        article.hide();
        veille.hide();

    });
    articleonglet.click(function(){
        epreuve.hide();
        article.show('slow');
        veille.hide();

    });
    veilleonglet.click(function(){
        epreuve.hide();
        article.hide();
        veille.show('slow');

    });




    $('.deletebutton').click(function(){
        id_rea = $(this).attr('data-idrea');
        $self = $(this);
        $.ajax({
            url: "<?php echo base_url(); ?>" + "index.php/ajax_post_controller/deleterea",
            method: "POST",
            data: { id : id_rea },
            dataType: "json",
            success: function (msg){
                alert('ok')
            },
            error: function (msg){
                alert('not ok')
            }
        });


    });


});
