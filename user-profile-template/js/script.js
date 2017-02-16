$(document).ready(function() {

    var photo_input = $('#user-profile-photo-input');
    var photo_container = $('#user-photo-container');

    photo_input.on('change', function(event){
        loadPhoto(photo_container, event);
    });

    // photo_input.on('change', function(e){
    //     loadPhoto(photo_container, e);
    //     // editPhoto(photo_container.children('canvas').length);
    //
    //     // if (photo_container.children('canvas').length > 0) {
    //     //     editPhoto(photo_container.children('canvas'));
    //     // }
    //
    // });

    $('#log').on('click', function () {
        var photo = photo_container;
        editPhoto(photo);
    });


});

function loadPhoto(element, event)
{
    loadImage(
        event.target.files[0],
        function (img) {
            element.html(img);
        },
        {
            maxWidth: 500,
            maxHeight: 500,
            minWidth: 200,
            minHeight: 200,
            canvas: true
        } // Options
    );
}

function editPhoto(element)
{
    console.log(element.children('canvas'));
    console.log(element.children('canvas').length);
    if (element.children('canvas').length > 0) {
        element.Jcrop();
    }
}
