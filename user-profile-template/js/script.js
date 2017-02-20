$(document).ready(function() {

    var photoInput = $('#userProfilePhotoInput');
    var photoContainer = $('#editUserPhotoContainer');
    var photoEditModal = $('#editUserPhotoModal');

    var jCropSelector = 200;


    photoInput.on('change', function(event){
        loadPhoto(
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
        editPhoto(photoContainer, jCropSelector);
    })
});

function loadPhoto(event, containers, options)
{
    loadImage(
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
            setSelect: [ x, y, x1, y1],
            addClass: 'jcrop-centered'
        });
    }
}
