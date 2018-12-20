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
                <p>The sense of developing another language is a lot of accumulated architectural problems in PHP and JS languages.
                    The other languages as C++, C#, Java, Python and Ruby wasn't developed directly for web development and are not that
                    popular in this domain as PHP and JS.
                </p>
                <p>
                    All mentioned above leads to the following major points which forms the basement (philosophy) of this language:
                </p>
                <ol>
                    <li>Domain of usage is only web-development which affects on syntax, execution flow, components and all other sides of the language.
                        This also leads to simple rule: "develop something which works good for doing only one job is easier and better than doing lots of jobs but tricky"
                    </li>
                    <li>Easy to use, minimalistic and flexible syntax increases feedback from developer to language.
                        That's why beautiful for end user is more important than trickiness in implementation.
                    </li>
                    <li>
                        Large variety of usage: language should support quick development of simple applications (tiny websites) and to be
                        flexible and strict enough for using it in enterprise applications.
                    </li>
                    <li>
                        Strict but non-static typing is an optimal way which prevents many issues while developing an app.
                        The same time, forced typecast should be flexible, predictable and simple to do.
                    </li>
                    <li>
                        According to points 1 and 3, the language components covers all major cases and situations in web development.
                        That doesnt means that it has a solution for all the possible cases of application, but provides simple structures and services which could be
                        used, extended or encapsulated in your application or framework.<br>
                        Additionally, the language provides a variety of contracts (interfaces) within its contracts package, which allows to modify
                        syntax behavior or standardise child packages.
                    </li>
                </ol>
            </div>
            <div class="col-5">
                <h4 class="text-center">ok, then... How?</h4>

                <p>The process of developing such type of software product is very complex and requires much time for
                    development/testing/validating. Please take a look into our <a href="/road-map">Road map</a></a>
                <p>

                <p>The software is continuously delivering, which means that it will be done step by step within some
                    amount of time and can be used starting from some point in development, when the core part is done.
                </p>

                <p>The core functionality development is fully enthusiastic, but doing by people who have a good experience
                    and understanding of main tasks/problems in web applications development.</p>

                <p>The language is licensed under <b>GNU General Public License</b>, which means that it's completely free
                    and all rights for this software belongs to nobody and everybody the same time.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <a href="/doc/intro/concept" type="button" class="btn btn-lg btn-block btn-outline-primary">Read the documentation</a>
            </div>
            <div class="col-5">
                <a href="/contribute" type="button" class="btn btn-lg btn-block btn-primary">How can I help?</a>
            </div>
        </div>
    </div>

@endsection