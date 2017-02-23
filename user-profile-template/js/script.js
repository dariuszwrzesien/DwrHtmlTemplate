$(document).ready(function() {

    var photoInput = $('#userProfilePhotoInput');
    var photoContainer = $('#editUserPhotoContainer');
    var photoEditModal = $('#editUserPhotoModal');
    var photoPreview = $('#photoPreview');
    var photoDefault = $('#photoDefault');

    var cropSelector = 200;
    var cropSubmit = $('#cropSubmit');

    var editUserProfilePhotoBtn = $('#editUserProfilePhotoBtn');

    var dateOfBirthInput = $('#InputDateOfBirth');

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
        loadJcrop(photoContainer, cropSelector);
    });

    cropSubmit.click(function(){
        applyJcrop(photoPreview, photoContainer.find('canvas'))

        photoPreview.show();
        photoDefault.hide();
        editUserProfilePhotoBtn.show();
        photoEditModal.modal('hide');
    });

    editUserProfilePhotoBtn.click(function(){
        photoEditModal.modal();
    });

    dateOfBirthInput.datepicker({
        format: "dd/mm/yyyy"
    });


});

/**
 * Loads photo to stage
 *
 * @param event
 * @param containers
 * @param options
 */
function loadPhoto(event, containers, options)
{
    clearCoords();

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

/**
 * Applies Jcrop to canvas with defined selector size
 *
 * @param element
 * @param selector
 */
function loadJcrop(element, selector)
{
    var canvas = element.find('canvas');

    var width = canvas.width();
    var height = canvas.height();

    var x = (width/2)-(selector/2);
    var y = (height/2)-(selector/2);
    var x2 = x + (selector);
    var y2 = y + (selector);

    var coords = {
        x: $('#x').val() == '' ? x : $('#x').val(),
        y: $('#y').val() == '' ? y : $('#y').val(),
        x2: $('#x2').val() == '' ? x2 : $('#x2').val(),
        y2: $('#y2').val() == '' ? y2 : $('#y2').val()
    }

    if (canvas.length > 0) {
        canvas.Jcrop({
            aspectRatio: 1, // Aspect ratio of w/h (e.g. 1 for square)
            keySupport: false,
            bgFade:     true,
            bgOpacity: .5,
            setSelect: [ coords.x, coords.y, coords.x2, coords.y2],
            onSelect: updateCoords,
            addClass: 'jcrop-centered'
        });
    }
}

/**
 * Rewrites selected canvas zone (on modal preview) to form canvas
 *
 * @param formCanvas
 * @param modalCanvas
 */
function applyJcrop(formCanvas, modalCanvas)
{
    var context = formCanvas[0].getContext("2d");
    context.drawImage(
        modalCanvas[0],
        $('#x').val(),
        $('#y').val(),
        $('#w').val(),
        $('#h').val(),
        0,
        0,
        formCanvas[0].width,
        formCanvas[0].height
    );
}

/**
 * Updates jCrop coordinate from preview to form inputs
 *
 * @param coords
 */
function updateCoords(coords) {

    $('#x').val(coords.x);
    $('#y').val(coords.y);
    $('#w').val(coords.w);
    $('#h').val(coords.h);
    $('#x2').val(coords.x2);
    $('#y2').val(coords.y2);
}

function clearCoords()
{
    $('#x').val('');
    $('#y').val('');
    $('#w').val('');
    $('#h').val('');
    $('#x2').val('');
    $('#y2').val('');
}

