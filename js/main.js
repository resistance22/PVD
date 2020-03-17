jQuery(document).ready(function($){
    $(document).on('mouseenter','.product-main-item',function(e){
        let elem = e.target,
        cat = elem.getAttribute("term");
        $('.product-main-item').each(function(i){
            $(this).removeClass('active');
        })
        $(elem).addClass('active');
        $('.sub-cat-cont').each(function(index){         
            $(this).css({
                "display":"none",
            });
            if( this.getAttribute('parent-cat') == cat ){
                $(this).css({
                    "display":"block",
                });
            }
        })
    })

    
    $(document).on('mouseenter','.product-sub-item',function(e){
        let elem = e.target;
        $('.product-sub-item').each(function(i){
            $(this).removeClass('active');
        })
        $(elem).addClass('active');
        
        })

    $(document).on('mouseenter','.product-menu',function(e){
        $('.op-menu').css({
            "opacity":1,
            "pointer-events":"all"
        })
    })

    $(document).on('mouseleave','.product-menu, .op-menu',function(e){
        $('.op-menu').css({
            "opacity":0,
            "pointer-events":"none"
        })
    })

})