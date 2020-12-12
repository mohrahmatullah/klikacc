if($('#image-portofolio-uploader').length>0)
{
  Dropzone.autoDiscover = false;
  $("#image-portofolio-uploader").dropzone({ 
    url: "/admin/upload-related-image",
    paramName: "cover_portofolio", 
    acceptedFiles:  "image/*", 
    uploadMultiple:false, 
    maxFiles:1, 
    autoProcessQueue: true, 
    parallelUploads: 100, 
    addRemoveLinks: true, 
    maxFilesize: 10,
    dataType:  'json',
    headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }, 
    init: function() {

          this.on("maxfilesexceeded", function(file){
              swal("" , "Image is larger than 10MB");
          });
          this.on("error", function(file, message){
            if (file.size > 1*10240*10240) 
            {
              swal("" , "File larger");
              this.removeFile(file)
               return false;
            }
            if(!file.type.match('image.*')) {
              swal("" , "Image file validation");
              this.removeFile(file)
              return false;
            }
          });
          
          this.on("success", function(file, responseText) 
          {
            if(responseText.status === 'success')
            {
              
              $('.show-image-portofolio').find('img').attr('src', '/uploads/'+ responseText.name); 
              $('.show-image-portofolio').show();             
              $('.upload-gallery-cover').hide();
              $('#hf_portofolio_image').val( responseText.name );
              $('.image-portofolio-uploader').hide();
              swal("Ok!", "Gambar Anda berhasil diunggah!", "success")
              this.removeAllFiles();
            }
          });
    }
  });
}

if($('.remove-image-portofolio').length>0)
{
  $('.remove-image-portofolio').on('click', function()
  {
    $('.image-portofolio-uploader').show();
    $('.show-image-portofolio').hide();
    $('#hf_portofolio_image').val('');
  });
}

if($('#gallery-portofolio-uploader').length>0)
{
  Dropzone.autoDiscover = false;
  $("#gallery-portofolio-uploader").dropzone({ 
    url: "/admin/upload-related-image",
    paramName: "gallery_portofolio", 
    acceptedFiles:  "image/*", 
    uploadMultiple: false, 
    maxFiles:1, 
    autoProcessQueue: true, 
    parallelUploads: 100, 
    addRemoveLinks: true, 
    maxFilesize: 10,
    dataType:  'json',
    headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }, 
    init: function() {

          this.on("maxfilesexceeded", function(file){
              swal("" , "Image is larger than 10MB");
          });
          this.on("error", function(file, message){
            if (file.size > 1*10240*10240) 
            {
              swal("" , "File larger");
              this.removeFile(file)
               return false;
            }
            if(!file.type.match('image.*')) {
              swal("" , "Image file validation");
              this.removeFile(file)
              return false;
            }
          });
          
          this.on("success", function(file, responseText) 
          {
            if(responseText.status === 'success')
            {
              
              $('.show-gallery-portofolio').find('img').attr('src', '/uploads/'+ responseText.name); 
              $('.show-gallery-portofolio').show();             
              $('.upload-gallery-cover').hide();
              $('#hf_portofolio_gallery').val( responseText.name );
              $('.gallery-portofolio-uploader').hide();
              swal("Ok!", "Gambar Anda berhasil diunggah!", "success")
              this.removeAllFiles();
            }
          });
    }
  });
}

if($('.remove-gallery-portofolio').length>0)
{
  $('.remove-gallery-portofolio').on('click', function()
  {
    $('.gallery-portofolio-uploader').show();
    $('.show-gallery-portofolio').hide();
    $('#hf_portofolio_gallery').val('');
  });
}
