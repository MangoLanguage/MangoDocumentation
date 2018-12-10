@extends('layouts.basic')

@section('styles')
    .menu {
        width: 100%;
        border-right: 1px solid #eee;
        margin-right: 20px;
    }

    #doc-container table td {
        border: 1px solid #eee;
        padding: 5px;
    }

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="menu">
                    <ul class="nav flex-column ml-1">
                        <?php foreach ($sections as $sectionName => $subPages) { ?>
                            <li class="nav-item mb-4">
                                <b><?= $sectionName ?></b>
                                <ul class="nav flex-column">
                                    <?php foreach ($subPages as $pageAddress => $pageName) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/doc/<?= $pageAddress ?>"><?= $pageName ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-9" id="doc-container">
                {!! $page !!}
            </div>
        </div>
    </div>
@endsection