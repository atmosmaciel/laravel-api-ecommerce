@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $title }}</h3>
                </div>
                <div class="panel-body">
                    <?php
                        $form->add('submit', 'submit', [
                            'laravel' => '<span class="glyphicon glyphicon-floppy-disc" aria-hidden="true"></span>'
                        ]);
                    ?>
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
