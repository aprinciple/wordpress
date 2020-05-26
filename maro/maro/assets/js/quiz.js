var currentStep = 1;
var finalStep = 6;

jQuery(function($) {
    $('.count-btn').hide();
    $('.rules-check').hide();
    $('.prev-step').hide();
    for(let i = 2; i < finalStep+1; i++)
    {
        $('.step'+i).hide();
    }

    $( '.next-step' ).click(function(){
        $('.step'+currentStep).hide();
        currentStep++;
        $('.step'+currentStep).show();
        $('.prev-step').show();
        if(currentStep === finalStep)
        {
            $(this).hide();
            $('.prev-step').hide();
            $('.count-btn').show();
            $('.rules-check').show();
        }
    });
    $( '.prev-step' ).click(function(){
        $('.step'+currentStep).hide();
        currentStep--;
        $('.step'+currentStep).show();
        if(currentStep === 1)
        {
            $(this).hide();
        }
    });

    //Загрузка файлов
    var fileInput = $('#file');
    $( '#file-upload' ).click(function(){
        fileInput.trigger('click');
        fileInput.bind({
            change: function() {
                var files = this.files;
                $.each(files, function(i, file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.querySelector('#file-upload').innerHTML = file.name;
                        document.querySelector('#file-upload').innerText = file.name;
                        document.querySelector('#file-upload').textContent = file.name;
                    };
                    reader.readAsDataURL(file);
                });
            }
        });
    });
});