$(document).ready(function() {

    var photoInput = $('#userProfilePhotoInput');
    var photoContainer = $('#editUserPhotoContainer');
    var photoEditModal = $('#editUserPhotoModal');
    var photoPreview = $('#photoPreview');

    var image;

    var cropSelector = 200;
    var cropSubmit = $('#cropSubmit');

    photoInput.on('change', function(event){
        image = loadPhoto(
            event,
            {
                photoContainer: photoContainer,
                photoModalContainer: photoEditModal
            },
            {
                previewWidth: 500,
                previewHeight: 500,
                cropSelector: 200
            });
    });

    photoEditModal.on('shown.bs.modal', function () {
        loadJcrop(photoContainer, cropSelector);
    });

    cropSubmit.click(function(event){
        applyJcrop(photoPreview, image)
    });

});

function loadPhoto(event, containers, options)
{
    return loadImage(
        event.target.files[0],
        function (img) {
            containers.photoContainer.html(img);
            containers.photoModalContainer.modal();
        },
        {
            maxWidth: options.previewWidth,
            maxHeight: options.previewHeight,
            minWidth: options.previewWidth,
            minHeight: options.previewHeight,
            canvas: true
        } // Options
    );
}

function loadJcrop(element, selector)
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
            setSelect: [ x, y, x1, y1],
            onSelect: updateCoords,
            addClass: 'jcrop-centered'
        });
    }
}

function applyJcrop(canvas, image)
{
    var context = canvas[0].getContext("2d");

    img = $('#editUserPhotoContainer').find('canvas');

    context.drawImage(img[0], $('#x').val(), $('#y').val(), $('#w').val(), $('#h').val(), 0, 0, canvas[0].width, canvas[0].height);

}

function updateCoords(coords) {
    $('#x').val(coords.x);
    $('#y').val(coords.y);
    $('#w').val(coords.w);
    $('#h').val(coords.h);
}

