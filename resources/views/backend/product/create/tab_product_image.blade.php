                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label for="image">Hình ảnh</label>
                                    <input name="image[]" id="image" type="file" multiple
                                        onchange="previewFile(this); " class="form-control btn-sm image-preview">
                                    <img id="previewImg" class="mt-1" width="25%"
                                        src="{{ asset('images/No-Image-Placeholder.svg.png') }}" alt="">
                                    @if ($errors->has('image[]'))
                                        <div class="text-danger">
                                            {{ $errors->first('image[]') }}
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </div>

                       
