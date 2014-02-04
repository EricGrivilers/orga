caravane_bij_upload = {}

$(function () {
console.log('fup');
    files=[]
    $('.multipleupload').fileupload({
        dataType: 'json',
        /*add: function (e, data) {
            data.context = $('#caravane_bij_upload_files').append('Uploading ');
            data.submit();
        },*/
        done: function (e, data) {
          console.log('done');
          widget=$('#'+this.id).closest('.controls');
            $.each(data.result.files, function (index, file) {
                //theClone=$('#caravane_bij_upload_files .uploaded_files_row:first').clone();
                 theClone=widget.find('.uploaded_files_row:first').clone();
                 theList=widget.find('.caravane_bij_upload_files_list');
                $(theClone).appendTo(theList);
                $(theClone).find('.uploaded_file_img img').attr('src',file.thumbnail_url);
                $(theClone).find('.uploaded_file_name').html(file.name);
                $(theClone).show();


                files.push(file.name);
                //$('#caravane_bij_upload_files').append('<div class="row"><img src="'+file.thumbnail_url+'" /> '+file.name+' uploaded </div>');
            });
        },

        progressall: function (e, data) {
          console.log('progresall');
          widget=$('#'+this.id).closest('.controls');
          var progressa = parseInt(data.loaded / data.total * 100, 10);
          //$('#caravane_bij_upload_progress .bar').css(
          widget.find('.bar').css(
              'width',
              progressa + '%'
          );
       },
       stop: function(e) {
        //alert(this.id);
        console.log('stop');
          inputVar=$('#'+this.id).data('var');
          widget=$('#'+this.id).closest('.controls');
          //$('#caravane_bij_upload_progress .bar').css('width','0%');
          //$('#caravane_bij_upload_files_input').val(files.join(";"));
           widget.find('.bar').css('width','0%');
           //widget.find('input.files:first').val(files);
           $.each(files,function(index,file) {
              newInput="<input type='hidden' name='"+inputVar+"[]' value='"+file+"' />";
              widget.append(newInput);
           })
          //widget.find('input.files').val(files.join(";"));
           files=[]
       }
    });

});


