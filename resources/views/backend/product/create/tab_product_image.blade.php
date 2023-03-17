                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label for="image">Hình ảnh</label>
                                    <input name="image[]" id="image" type="file" multiple
                                        onchange="previewFile(this); " class="form-control btn-sm image-preview">
                                    <img id="previewImg" class="mt-1" width="25%"
                                        src="{{ asset('images/No-Image-Placeholder.svg.png') }}" alt="">
                                    @if ($errors->has('image.*'))
                                        <div class="text-danger">
                                            {{ $errors->first('image.*') }}
                                        </div>
                                    @endif
                                   
                                </div>

                            </div>
                        </div>



                        <script>
 
// $(document).ready(function(){
//  $('#file-input').on('change', function(){ //on file input change
//     if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
//     {
         
//         var data = $(this)[0].files; //this file data
         
//         $.each(data, function(index, file){ //loop though each file
//             if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
//                 var fRead = new FileReader(); //new filereader
//                 fRead.onload = (function(file){ //trigger function on successful read
//                 return function(e) {
//                     var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
//                     $('#thumb-output').append(img); //append image to output element
//                 };
//                 })(file);
//                 fRead.readAsDataURL(file); //URL representing the file's data.
//             }
//         });
         
//     }else{
//         alert("Your browser doesn't support File API!"); //if File API is absent
//     }
//  });
// });
 
// </script>