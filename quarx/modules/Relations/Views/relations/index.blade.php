@extends('quarx-frontend::layouts.master')

@section('content')

    <section class="content-header">
        <h1 class="pull-left page-header">Relations</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#">New Relation</a>
        </h1>
    </section>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('relations::relations.table')
            </div>
        </div>


@endsection

@section('javascript')

    @parent
    <script type="text/javascript">

        // add js here

    </script>

@endsection


