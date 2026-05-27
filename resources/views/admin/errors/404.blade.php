   @include  ('header')
    <!doctype html>

   <div class = "error-page">

   <h2 class="headline-text-yellow>404 /h2>
   <div class="erro_context"/>
   <h3><i class="fa fa w warning text-yellow"></i> opps {{trans ('adminite_lang::message.pagenotfound') }}.</h3>


<form class ='search-form'>


<div class= 'input-group'

<input type="text" name="search" class='form control' placeholder="{trans('adminite_lang::message.search') }}"/>
<div class='input-group-btn'>

<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class= 'fa fa-search"</i></button>
</div>

</div>

<!-- /.input group -->


</div> <!-- error_content -->

</div> <!-- error.page -->


@endsection




