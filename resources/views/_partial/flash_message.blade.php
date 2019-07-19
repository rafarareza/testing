@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissable" style="position: fixed; width: 80%; top: 90px; right: 2%">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_message') }}
                  </div>
@endif