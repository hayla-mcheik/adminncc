@extends('admin.layouts.master')
@section('title')
Contact
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
            <h3 class="card-title">Contact</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: block;">
            <form method="POST" id="frm1" enctype="multipart/form-data"
                action="{{ Route('admin.contact.update') }}" novalidate>
                @csrf

                <br>
                <label>UAE NCC Head Office - KIZAD A8, Abu Dhabi, UAE </label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_head_uae" id="tel_head_uae" class="form-control" value="{{ $contact->tel_head_uae }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_head_uae" id="tel_head_uae" class="form-control" value="{{ $contact->tel_head_uae }}">
                <br>
          
                <label>NCC Central Stores </label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_ncc_uae" id="tel_ncc_uae" class="form-control" value="{{ $contact->tel_ncc_uae }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_ncc_uae" id="fax_ncc_uae" class="form-control" value="{{ $contact->fax_ncc_uae }}">
                <br>
          
                <label>NCC Dubai Office</label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_dubai_uae" id="tel_dubai_uae" class="form-control" value="{{ $contact->tel_dubai_uae }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_dubai_uae" id="fax_dubai_uae" class="form-control" value="{{ $contact->fax_dubai_uae }}">
                <br>
          

                <label>Kuwait NCC Head Office </label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_head_kwt" id="tel_head_kwt" class="form-control" value="{{ $contact->tel_head_kwt }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_head_kwt" id="fax_head_kwt" class="form-control" value="{{ $contact->fax_head_kwt }}">
                <br>
          
                <label>NCC Central Stores </label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_ncc_kwt" id="tel_ncc_kwt" class="form-control" value="{{ $contact->tel_ncc_kwt }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_ncc_kwt" id="fax_ncc_kwt" class="form-control" value="{{ $contact->fax_ncc_kwt }}">
                <br>
          
                <label>NCC Dubai Office</label>
                <br>
                <label>Tel:</label>
                <input type="text" name="tel_dubai_kwt" id="tel_dubai_kwt" class="form-control" value="{{ $contact->tel_dubai_kwt }}">
                <br>
                <label>Fax</label>
                <input type="text" name="fax_dubai_kwt" id="fax_dubai_kwt" class="form-control" value="{{ $contact->fax_dubai_kwt }}">
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
