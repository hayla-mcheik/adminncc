@extends('admin.layouts.master')
@section('title')
About Values
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
            <h3 class="card-title">About Values</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: block;">
            <form method="POST" id="frm1" enctype="multipart/form-data"
                action="{{ Route('admin.about.values.update') }}" novalidate>
                @csrf
         
       
                <br>
                <label>Our Values</label>
                <input type="text" name="titleone" id="titleone" class="form-control" value="{{ $values->titleone }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
        
                <label>Our Values in Arabic</label>
                <input type="text" name="arabic_titleone" id="arabic_titleone" class="form-control" value="{{ $values->arabic_titleone }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>

                <label>Description</label>
                <textarea name="descone" id="descriptionone" required>{{ $values->descone  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#descriptionone').summernote();
                </script>
                <br>
          
                <label>Arabic Description</label>
                <textarea name="arabic_descone" id="arabic_descriptionone" required>{{ $values->arabic_descone  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#arabic_descriptionone').summernote();
                </script>
                <br>

                <label>INNOVATION</label>
                <input type="text" name="titletwo" id="title" class="form-control" value="{{ $values->titletwo }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
        
                <label>Innovation in Arabic</label>
                <input type="text" name="arabic_titletwo" id="arabic_title" class="form-control" value="{{ $values->arabic_titletwo }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
                <label>Description</label>
                <textarea name="desctwo" id="descriptiontwo" required>{{ $values->desctwo  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#descriptiontwo').summernote();
                </script>
                <br>

                <label>Arabic Description</label>
                <textarea name="arabic_desctwo" id="arabic_descriptiontwo" required>{{ $values->arabic_desctwo  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#arabic_descriptiontwo').summernote();
                </script>
                <br>

                <label>Client Satisfaction</label>
                <input type="text" name="titlethree" id="titlethree" class="form-control" value="{{ $values->titlethree }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>

                <label>Client Satisfaction in Arabic</label>
                <input type="text" name="arabic_titlethree" id="arabic_titlethree" class="form-control" value="{{ $values->arabic_titlethree }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
        
                <label>Description</label>
                <textarea name="descthree" id="descriptionthree" required>{{ $values->descthree  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#descriptionthree').summernote();
                </script>
                <br>

                <label>Arabic Description</label>
                <textarea name="arabic_descthree" id="arabic_descriptionthree" required>{{ $values->arabic_descthree  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#arabic_descriptionthree').summernote();
                </script>
                <br>
                <label>Quality</label>
                <input type="text" name="titlefour" id="titlefour" class="form-control" value="{{ $values->titlefour }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>
        
                <label>Quality in Arabic</label>
                <input type="text" name="arabic_titlefour" id="arabic_titlefour" class="form-control" value="{{ $values->arabic_titlefour }}"
                    required>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
                <br>

                <label>Description</label>
                <textarea name="descfour" id="descriptionfour" required>{{ $values->descfour  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#descriptionfour').summernote();
                </script>
                <br>

                <label>Arabic Description</label>
                <textarea name="arabic_descfour" id="arabic_descriptionfour" required>{{ $values->arabic_descfour  }}</textarea>
                <div class="invalid-feedback">
                    Please enter description.
                </div>
                <script>
                    $('#arabic_descriptionfour').summernote();
                </script>
                <br>
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
