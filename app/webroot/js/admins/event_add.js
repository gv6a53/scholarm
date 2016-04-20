$(document).ready(function() {
    tinymce.init({
        selector:'textarea',
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });

    $('#EventStartDate').datepicker({
        dateFormat: 'yy-mm-dd'
    });

    new google.maps.places.Autocomplete(
        (document.getElementById('EventLocation'))
        //{types: ['geocode']}
    );
});