$(document).ready(function() {

    var photo_input = $('#user-profile-photo-input');
    var photo_container = $('#edit-user-photo-container');
    var edit_photo_modal = $('#edit-photo-modal');

    photo_input.on('change', function(event){
        loadPhoto(photo_container, event);
    });

    $('#test').on('click', function () {
        showModal(edit_photo_modal);
    });
});

function loadPhoto(element, event)
{
    loadImage(
        event.target.files[0],
        function (img) {
            element.html(img);
            editPhoto(element);
            // showModal($('#edit-photo-modal'));
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
    var canvas = element.find('canvas');

    var selector = 200;

    var width = canvas.width();
    var height = canvas.height();

    var x = (width/2)-(selector/2);
    var y = (height/2)-(selector/2);
    var x1 = x + (selector);
    var y1 = y + (selector);

    if (canvas.length > 0) {
        canvas.Jcrop({
            aspectRatio: 1, // Aspect ratio of w/h (e.g. 1 for square)
            keySupport: false,
            bgFade:     true,
            bgOpacity: .5,
            setSelect: [ x, y, x1, y1]
        });
    }
}

function showModal(element)
{
    $(element).modal('show');
}