$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();
    $('#sidebar-menu .arrow').click(function() {
        $(this).parents('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-angle-right fa-angle-down');
    });

    // $("input[name='checkall']").click(function() {
    //     var checked = $(this).is(':checked');
    //     $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    // });
});
$(document).ready(function(){ 
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       maxItemCount:5,
       searchResultLimit:5,
       renderChoiceLimit:5
     }); 
});
//click input search
const input_search=document.getElementById('input-search');
const component_body=document.body;
const btn_search=document.getElementById('btn-search');
input_search.addEventListener('click', ()=>{
    //input_search.classList.add('border-search');
    btn_search.classList.add('border-button-search');
});
component_body.addEventListener('click',(e)=>{
    if(!input_search.contains(e.target)){
        btn_search.classList.remove('border-button-search');
    }
});
//active status product
$('.status-product a').click(function(){
    $('.status-product a').removeClass('active-status');
    $(this).addClass('active-status');
});
//choose image product
$('.dandev_insert_attach').click(function() {
    if ($('.list_attach').hasClass('show-btn') === false) {
        $('.list_attach').addClass('show-btn');
    }
    var _lastimg = jQuery('.dandev_attach_view li').last().find('input[type="file"]').val();
    if (_lastimg != '') {
        var d = new Date();
        var _time = d.getTime();
        var _html = '<li id="li_files_' + _time + '" class="li_file_hide">';
        _html += '<div class="img-wrap">';
        _html += '<span class="close" onclick="DelImg(this)">×</span>';
        _html += ' <div class="img-wrap-box"></div>';
        _html += '</div>';
        _html += '<div class="' + _time + '">';
        _html += '<input type="file" class="hidden"  onchange="uploadImg(this)" id="files_' + _time + '"   />';
        _html += '</div>';
        _html += '</li>';
        jQuery('.dandev_attach_view').append(_html);
        jQuery('.dandev_attach_view li').last().find('input[type="file"]').click();
    } else {
        if (_lastimg == '') {
            jQuery('.dandev_attach_view li').last().find('input[type="file"]').click();
        } else {
            if ($('.list_attach').hasClass('show-btn') === true) {
                $('.list_attach').removeClass('show-btn');
            }
        }
    }
});
function uploadImg(el) {
    var file_data = $(el).prop('files')[0];
    var type = file_data.type;
    var fileToLoad = file_data;

    var fileReader = new FileReader();

    fileReader.onload = function(fileLoadedEvent) {
        var srcData = fileLoadedEvent.target.result;

        var newImage = document.createElement('img');
        newImage.src = srcData;
        var _li = $(el).closest('li');
        if (_li.hasClass('li_file_hide')) {
            _li.removeClass('li_file_hide');
        }
        _li.find('.img-wrap-box').append(newImage.outerHTML);
    }
    fileReader.readAsDataURL(fileToLoad);
}
function DelImg(el) {
    jQuery(el).closest('li').remove();
}
