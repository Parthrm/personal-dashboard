$( document ).ready(function() {
    $('.heading').click(function(){
        $(this).siblings('.skill-builder').slideToggle(350,"swing");
        $(this).find("img").toggleClass('flip');
    });
    function updateCounts() {
        $('.skill-wrap').each(function() {
            var totalCheckboxes = $(this).find('input[type="checkbox"]').length;
            var checkedCheckboxes = $(this).find('input[type="checkbox"]:checked').length;

            // Update the spans
            $(this).find('.total').text(" "+totalCheckboxes);
            $(this).find('.selected').text(checkedCheckboxes+" ");
            if (totalCheckboxes==checkedCheckboxes) {
                $(this).addClass("border-green-400");
                $(this).addClass("bg-green-50");
                $(this).removeClass("border-slate-400");
            }
            else{
                $(this).addClass("border-slate-400");
                $(this).removeClass("border-green-400");
                $(this).removeClass("bg-green-50");
            }
        });
    }

    // Update counts whenever a checkbox is clicked
    $('input[type="checkbox"]').on('change', function() {
        updateCounts();
        let id = $(this).siblings('label').attr('for');
        id*=2;
        if($(this).is(":checked")){
            id+=1;
        }
        $.ajax({
            type: 'GET',
            url: "/study-status/"+id,
            succces: function(data){
                console.log('success',data);                    
            },
            error:function(data){
                console.log('error',data);                    
                
            }
        });
        console.log(id);
    });

    $('#open').on('click',function (each) {
        if(each.originalEvent.detail==1)
        {
            open_incomplete();
            return;
        }
        open_all();
    });
    $('#close').on('click',function (each) {
        console.log(each.originalEvent.detail);
        if(each.originalEvent.detail==1)
        {
            close_completed();
            return;
        }
        close_all();
    });

    // Initial update on page load
    updateCounts();
    close_completed();
});

function close_completed() {
    $('.skill-wrap').each(function() {
        var totalCheckboxes = $(this).find('input[type="checkbox"]').length;
        var checkedCheckboxes = $(this).find('input[type="checkbox"]:checked').length;
        if(totalCheckboxes==checkedCheckboxes){
            $(this).find('.skill-builder').slideUp(350,"swing");
        }
    });
}
function open_incomplete() {
    $('.skill-wrap').each(function() {
        var totalCheckboxes = $(this).find('input[type="checkbox"]').length;
        var checkedCheckboxes = $(this).find('input[type="checkbox"]:checked').length;
        if(totalCheckboxes!=checkedCheckboxes){
            $(this).find('.skill-builder').slideDown(350,"swing");
        }
    });
}
function open_all() {
    $('.skill-builder').slideDown(350,"swing");
}
function close_all() {
    $('.skill-builder').slideUp(350,"swing");  
}
