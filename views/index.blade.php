@extends('layouts.basic')

@section('content')


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <img src="https://cdn0.iconfinder.com/data/icons/fruits/128/Mango.png">
        <h1 class="display-4">Mango</h1>
        <p class="lead">Modern, solid and flexible language for web development.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-7">
                <h4 class="text-center">So, why?</h4>
                <p>The sense of developing another language is a lot of accumulated architectural problems in such modern languages as PHP and JS.
                    The other languages as C++, C# or Java are not suitable that good for web development for some reasons.
                </p>
                <p>
                    So, the following are goals of making one more language:
                </p>
                <ul>
                    <li>Making a good architectural basis and avoid mistakes as it was with PHP</li>
                    <li>Using only modern principles in development of languages</li>
                    <li>Giving an ability to develop everything in web: from tiny websites to large, scalable enterprise projects</li>
                    <li>Good and modern OOP support (hello, JavaScript :))</li>
                    <li>Good, easy, predictable type-handling system (hello, PHP)</li>
                    <li>Providing good tools only for web applications, no other domain of usage</li>
                </ul>
            </div>
            <div class="col-5 text-center">
                <h4>ok, then... How?</h4>

                <p>The process of developing such type of product is very huge and requires lots of time for testing, patching and bug fixing.
                    That's why any help is appreciated!</p>

                <p>This software is continuously delivering by people who has good understanding on "how should this look like" and "what the web means when you develop a piece of software".</p>

                <p>The resulting product is licensed under <b>GNU General Public License</b>, which means that rights to
                    this software product belongs to nobody and everybody the same time.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <a href="/doc/intro/concept" type="button" class="btn btn-lg btn-block btn-outline-primary">Documentation</a>
            </div>
            <div class="col-5">
                <a href="/contribute" type="button" class="btn btn-lg btn-block btn-primary">How can I help?</a>
            </div>
        </div>
    </div>

@endsection