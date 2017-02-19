$(document).ready(function() {

    var photo_input = $('#user-profile-photo-input');
    var photo_container = $('#edit-user-photo-container');
    var edit_photo_dialog = $('#edit-photo-dialog');

    var previewWidth = 500;
    var previewHeight = 500;

    var cropSelector = 200;

    photo_input.on('change', function(event){
        loadPhoto(photo_container, event, previewWidth, previewHeight, cropSelector);
        edit_photo_dialog.dialog({
            width: previewWidth,
            height: previewHeight
        });
    });

    $('#test').on('click', function () {
        edit_photo_dialog.dialog();
    });
});

function loadPhoto(element, event, width, height, cropSelector)
{
    return loadImage(
        event.target.files[0],
        function (img) {
            element.html(img);
            editPhoto(element, cropSelector);
        },
        {
            maxWidth: width,
            maxHeight: height,
            minWidth: width,
            minHeight: height,
            canvas: true
        } // Options
    );
}

function editPhoto(element, selector)
{
    var canvas = element.find('canvas');

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