@extends('layouts.basic')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Road Map</h1>
                <p>Here is the plan of delivering this software step-by-step. It's fully transparent which means that there are no extra steps which were hidden from you.</p>

                <ul class="list-group">
                    <li class="list-group-item">
                        <h3>2019 Jan-Apr <small>Documentation, core planning</small></h3>
                        <p>3 months are planned for developing documentation and core features structure.</p>
                    </li>
                    <li class="list-group-item">
                        <h3>2019 May-Dec <small>Scriptable version development</small></h3>
                        <p>Development of first version of script interpreter. This means that the language will work in script way and not project way yet.</p>
                    </li>
                    <li class="list-group-item">
                        <h3>2020 Jan-May <small>Complete first version development</small></h3>
                        <p>Development first version which will support packing project</p>
                    </li>
                    <li class="list-group-item">
                        <h3>2020 June - &infin; <small>Improvements and optimizations</small></h3>
                        <p>Endless language improvements</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
