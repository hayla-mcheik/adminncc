@extends('admin.layouts.master')
@section('title')
Home Background
@endsection
@section('content')
    <script>
        var desc = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Background</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: block;">
            <form method="POST" id="frm1" enctype="multipart/form-data"
                action="{{ Route('home.hero.back.update') }}" novalidate>
                @csrf
                <div align="center">
                    <img alt="" id="img" src="{{ asset( $homehero->image) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'img');" name="image">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>
       
                <br>
                <br>
                <label>Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $homehero->title }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
                <label>Arabic Title</label>
                <input type="text" name="arabic_title" id="arabic_title" class="form-control" value="{{ $homehero->arabic_title }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
                <label>Description</label>
                <input type="text" name="description" class="form-control" id="description" value="{{  $homehero->description }}" required>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
          
                <br>

                <label>Arabic Description</label>
                <input type="text" name="arabic_description" class="form-control" id="arabic_description" value="{{  $homehero->arabic_description }}" required>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
          
                <br>
   
       

                <div align="center">
                    <img alt="" id="imgone" src="{{ asset( $homehero->imageone) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'imgone');" name="imageone">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>
       

                <div align="center">
                    <img alt="" id="imgtwo" src="{{ asset( $homehero->imagetwo) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'imgtwo');" name="imagetwo">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>
       
                <div align="center">
                    <img alt="" id="imgthree" src="{{ asset( $homehero->imagethree) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'imgthree');" name="imagethree">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>
       
                <div align="center">
                    <img alt="" id="imgfour" src="{{ asset( $homehero->imagefour) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'imgfour');" name="imagefour">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>
       

                <div align="center">
                    <img alt="" id="imgfive" src="{{ asset( $homehero->imagefive) }}" width="50%">
                </div>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="image/*" id="customFile"
                        onchange="desc(event,'imgfive');" name="imagefive">
                    <div class="invalid-feedback">
                        Please choose an image.
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file...</label>
                </div>

                <br>
                <div align="center">
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict'

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('#frm1')

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                        .forEach(function(form) {
                            form.addEventListener('submit', function(event) {
                                if (!form.checkValidity()) {
                                    event.preventDefault()
                                    event.stopPropagation()
                                }

                                form.classList.add('was-validated')
                            }, false)
                        })
                })()
            </script>
        </div>
    </div>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "searching": false,
                "lengthChange": true,
                "autoWidth": false,
                "pageLength": 25,
                "lengthMenu": [25, 50, 75, 100],
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function matchStart(term, text) {
            if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
                return true;
            }

            return false;
        }

        $.fn.select2.amd.require(['select2/compat/matcher'], function(oldMatcher) {
            $(".select2").select2({
                matcher: oldMatcher(matchStart),
            });
            $("#category_id").select2({
                matcher: oldMatcher(matchStart),
            })
        });
        $('#deadline').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
